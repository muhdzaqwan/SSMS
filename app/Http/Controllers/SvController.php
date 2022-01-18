<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Supervisor;
use App\Models\Application;
use App\Models\Field;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
class SvController extends Controller{

    use AuthenticatesUsers;

    public function viewSigninForm(){
        return view('auth.supervisorsignin');
    }

    public function signinprocess(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('supervisors')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('dashboardsupervisor')->withSuccess('Signed in');
         }
         return back()->withInput()->withErrors(['email' => 'invalid credential']);
    }

    public function dashboard(){
        if(Auth::guard("supervisors")->check()){
            return view('supervisor.home');
        }
    }

    public function viewprofilesv(){
        return view('supervisor.viewprofile');
    }

    public function viewUpdateProfile(){
        $fields=Field::all();
        return view('supervisor.updateprofilesv')
        ->with(compact('fields'));
    }

    public function editprofileprocess(Request $request,$id){
        $name = $request ->name;
        $email = $request ->email;
        $maxtake = $request ->maxtake;
        $field1 = $request ->field1;
        $field2 = $request ->field2;
        $field3 = $request ->field3;

        $update = DB::table('supervisors')
                    ->where('id', '=', Auth::guard('supervisors')->user()->id)
                    ->update([  
                        'name'      => $name, 
                        'email'     => $email, 
                        'maxtake'   => $maxtake, 
                        'field1'    => $field1, 
                        'field2'    => $field2, 
                        'field3'    => $field3, 
                    ]);
                     return redirect()->intended('viewprofilesv');
    }

    public function updatePassword(){
        return view('supervisor.updatepassword');
    }

    public function updatePasswordProcess(Request  $request){
            $password= $request ->confirmpassword;

            $update = DB::table('supervisors')
            ->where('id', '=', Auth::guard('supervisors')->user()->id)
            ->update([  
                'password' => Hash::make($password),
            ]);
            return redirect()->back()->with('success', 'your password has been updated');   
    }

    public function viewRequestList(){

        $supervisorid = Auth::guard('supervisors')->user()->id;

        $statuslist = DB::table('applications')
                ->leftjoin('students','applications.student_id','=','students.id')
                ->select('title','status','firstname','lastname','applications.id as id')
                ->where('supervisor_id', '=', $supervisorid)
                ->where('applications.supervisor_id', '=', $supervisorid)
                ->get();
                // ->dd();

        return view('supervisor.requestlist')
        ->with(compact('statuslist'));
    }
    
    public function viewRequestDetail($id){
        $application=Application::find($id);
        return view('supervisor.viewrequestdetail')
        ->with(compact('application'));
    }
}
