<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Student;
use App\Models\Application;
use App\Models\Supervisor;
use Hash;
use App\Models\Field;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
class StudentController extends Controller
{
    use AuthenticatesUsers;

    public function dashboard(){
        if(Auth::guard("students")->check()){
            return view('student.home');
        }
    }

    public function viewSigninForm(){
        return view('auth.studentsignin');
    }

    public function viewSignupForm(){
        return view('auth.studentsignup');
    }

    public function signupStudent(Request $request){
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phoneNo' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'semester' => 'required|numeric',
            'role' => 'required|numeric',
            'matricnumber' => 'required|numeric',
        ]);
        $data = $request->all();
        $check = $this->createStudent($data);
        return redirect()->intended('signinstudent');
    }

    public function createStudent(array $data)
    {
        return Student::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'semester' => $data['semester'],
            'role' => $data['role'],
            'matricnumber' => $data['matricnumber']

        ]);
    }

    public function signinStudent(Request $request)
    {        
         $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('students')->attempt(['email' => $request->email, 'password' => $request->password])){
          return redirect()->intended('dashboardstudent')->withSuccess('Signed in');
       }
       return back()->withInput()->withErrors(['email' => 'invalid credential']);
    }

    public function viewSvList(Request $request){
        if($request->get('searchTable')!=null){
            $field=$request->get('searchTable');
            $supervisors=Supervisor::where('field1', 'LIKE', '%'.$field.'%')
            ->orWhere('field2', 'LIKE', '%'.$field.'%')
            ->orWhere('field3', 'LIKE', '%'.$field.'%')->paginate(5);
        }
        else{
            $supervisors = Supervisor::paginate(5);
        }
        return view('student.supervisorlist')
        ->with(compact('supervisors'));
    }

    public function viewSvProfile($id){
        $supervisors=Supervisor::find($id);
        return view('student.viewsvprofile')
        ->with(compact('supervisors'));
    }

    public function viewApplicationStatus(){

        $studentid = Auth::guard('students')->user()->id;

        // $supervisors = DB::table('supervisors')
        // ->join('applications','supervisors.id','=','applications.supervisor_id')
        // ->select('name')
        // ->where('applications.student_id', '=', $studentid)
        // ->get();

        // $applications = Application::find($studentid);
        // dd($applications);

        $statuslist = DB::table('applications')
                ->leftjoin('supervisors','applications.supervisor_id','=','supervisors.id')
                ->select('*')
                ->where('student_id', '=', $studentid)
                ->where('applications.student_id', '=', $studentid)
                ->get();
                
        return view('student.applicationstatus')
        ->with(compact('statuslist'));
    }

    public function viewProfile(){
        return view('student.viewprofile');
    }

    public function viewUpdateProfile(){
        return view('student.updateprofilestudent');
    }
    
    public function editProfileProcess(Request $request,$id){

        $firstname      = $request ->firstname;
        $lastname       = $request ->lastname;
        $email          = $request ->email;
        $phoneNo        = $request ->phoneno;
        $semester       = $request ->semester;
        $matricnumber   = $request ->matricnumber;

        $update = DB::table('students')
                    ->where('id', '=', Auth::guard('students')->user()->id)
                    ->update([  
                        'firstname'     => $firstname, 
                        'lastname'      => $lastname, 
                        'email'         => $email, 
                        'phoneNo'       => $phoneNo, 
                        'semester'      => $semester, 
                        'matricnumber'  => $matricnumber, 
                    ]);
                     return redirect()->intended('viewprofilestudent');
    }

    public function sendApplication($id){
        $fields=Field::all();
        $supervisors=Supervisor::all();
        $supervisors=Supervisor::find($id);

        return view('student.requestform')
        ->with(compact('fields','supervisors'));
    }

    public function sendFormProcess(Request $request){       
   
         $request->validate([
            'adminid'        => 'string',
            'title'          => 'required|string|max:255',
            'description'    => 'required|string|max:255',
            'field'          => 'required|string|max:255',
            'proposaldoc'     => 'required',
        ]);
        $data = $request->all();
        $check = $this->applicationProcessing($data);
        return redirect()->intended('applicationstatus');
    }

    public function applicationProcessing(array $data){

        $studentid = Auth::guard('students')->user()->id;
        
        Application::create([
                
                'supervisor_id'     => $data['adminid'],
                'student_id'        => $studentid,
                'title'             => $data['title'],
                'description'       => $data['description'],
                'field'             => $data['field'],
                'proposaldoc'       => $data['proposaldoc'],
                'status'            => 'Pending',
        ]);
    }
}