<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SvController;
use App\Http\Controllers\Application;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// |-----------------------------------------------------------------------------------------------
// | Student Routes
// |-----------------------------------------------------------------------------------------------
Route::get('/dashboardstudent',[StudentController::class,'dashboard'])->name('dashboardstudent');

Route::get('/signinstudent',[StudentController::class,'viewSigninForm'])->name('signinstudent');
Route::post('/signinstudentprocess',[StudentController::class,'signinStudent'])->name('signinstudentprocess');

Route::get('/signupstudent',[StudentController::class,'viewSignupForm'])->name('signupstudent');
Route::post('/signupstudentprocess',[StudentController::class,'signupStudent'])->name('signupstudentprocess');

Route::get('/svlist',[StudentController::class,'viewSvList'])->name('svlist');
Route::get('/student/viewsvprofile/{id}',[StudentController::class,'viewSvProfile']);

Route::get('/applicationstatus',[StudentController::class,'viewApplicationStatus'])->name('applicationstatus');

Route::get('/viewprofilestudent',[StudentController::class,'viewProfile'])->name('viewprofilestudent');

Route::get('/editprofilestudent',[StudentController::class,'viewUpdateProfile'])->name('editprofilestudent');
Route::post('/editprofilestudentprocess/{id}',[StudentController::class,'editProfileProcess'])->name('editprofilestudentprocess');

Route::get('/student/requestform/{id}',[StudentController::class,'sendApplication']);
Route::post('/requestformprocess',[StudentController::class,'sendFormProcess'])->name('requestformprocess');

// |-----------------------------------------------------------------------------------------------


// |-----------------------------------------------------------------------------------------------
// | Admin Routes
// |-----------------------------------------------------------------------------------------------
Route::get('/signinsadmin',[AdminController::class,'viewSigninForm'])->name('signinsadmin');

Route::get('/studentlist',[AdminController::class,'viewStudentList'])->name('studentlist');

Route::get('/addsv',[AdminController::class,'fieldDropdown'])->name('addsv');
Route::post('/addsv',[AdminController::class,'signupSV'])->name('addsv');

Route::get('/supervisorlist',[AdminController::class,'viewSupervisorList'])->name('supervisorlist');
Route::get('/admin/viewsvprofile/{id}',[AdminController::class,'viewSvProfile']);
Route::get('/admin/viewstudentprofile/{id}',[AdminController::class,'viewStudentProfile']);

// |-----------------------------------------------------------------------------------------------



// |-----------------------------------------------------------------------------------------------
// | SV Routes
// |-----------------------------------------------------------------------------------------------
Route::get('/signinsv',[SvController::class,'viewSigninForm'])->name('signinsv');
Route::post('/signinsvprocess',[SvController::class,'signinprocess'])->name('signinsvprocess');

Route::get('/dashboardsupervisor',[SvController::class,'dashboard'])->name('dashboardsupervisor');

Route::get('/viewprofilesv',[SvController::class,'viewprofilesv'])->name('viewprofilesv');

Route::get('/editprofilesupervisor',[SvController::class,'viewUpdateProfile'])->name('editprofilesupervisor');
Route::post('/editprofilesupervisorprocess/{id}',[SvController::class,'editProfileProcess'])->name('editprofilesupervisorprocess');

Route::get('/updatepasswordsv',[SvController::class,'updatePassword'])->name('updatepasswordsv');
Route::post('/updatepasswordsvprocess',[SvController::class,'updatePasswordProcess'])->name('updatepasswordsvprocess');

Route::get('/applicationrequest',[SvController::class,'viewRequestList'])->name('applicationrequest');
Route::get('/supervisor/applicationrequestdetail/{id}',[SvController::class,'viewRequestDetail']);

// |-----------------------------------------------------------------------------------------------


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
