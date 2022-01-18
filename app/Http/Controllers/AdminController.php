<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Field;
use App\Models\Supervisor;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    public function viewSigninForm(){
        return view('auth.adminsignin');
    }

    public function viewStudentList(){
        $students = Student::all();
        return view('admin.studentlist')
                ->with(compact('students'));
    }

    public function viewSupervisorList(){
        $supervisors = Supervisor::paginate(5);
        return view('admin.supervisorlist')
                ->with(compact('supervisors'));
    }

    public function fieldDropdown(){
        $fields = Field::all();
        return view('admin.addsupervisor')
        ->with(compact('fields'));
    }

    public function signupSV(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'maxtake' => 'required|numeric',
            'role' => 'required|numeric',
            'field1' => 'required',
            'field2' => 'string',
            'field3' => 'string',
        ]);
        $data = $request->all();
        $data ['adminid']= Auth::guard('web')->user()->id;
        $check = $this->createSV($data);
        return redirect()->intended('home');
    }

    public function createSV(array $data)
    {
        if($data['field2'] == "-"){
            $data['field2'] = null;
        }
        if($data['field3'] == "-"){
            $data['field3'] = null;
        }
        return Supervisor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'maxtake' => $data['maxtake'],
            'role' => $data['role'],
            'field1' => $data['field1'],
            'field2' => $data['field2'],
            'field3' => $data['field3'],
            'admin_id' => $data['adminid']
        ]);

    }

    public function viewSvProfile($id){

        $supervisors=Supervisor::find($id);
        return view('admin.viewsvprofile')
        ->with(compact('supervisors'));
    }
    
    public function viewStudentProfile($id){

        $students=Student::find($id);
        return view('admin.viewstudentprofile')
        ->with(compact('students'));
    }
    
}
