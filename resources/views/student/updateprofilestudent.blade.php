@extends('layouts.sidebarStudent')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Auth::guard('students')->user()->firstname}} {{ Auth::guard('students')->user()->lastname}} Profile </h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboardstudent') }}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
      <!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-indigo">
                        <a href=""><h3 class="card-title"> Edit Profile information</h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                            <form class="form-horizontal" method="POST" action="editprofilestudentprocess/Auth::guard('students')->user()->id">
                                @csrf
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Matric Number</label>
                                        <div class="col-sm-10" >
                                            <input name="matricnumber" type="number" class="form-control"  value="{{ Auth::guard('students')->user()->matricnumber}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input name="firstname" type="text" class="form-control" value="{{ Auth::guard('students')->user()->firstname}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input name="lastname" type="text" class="form-control"  value="{{ Auth::guard('students')->user()->lastname}}" > 
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="email" class="form-control"  value="{{ Auth::guard('students')->user()->email}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input name="phoneno" type="number" class="form-control"  value="0{{ Auth::guard('students')->user()->phoneNo}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Semester</label>
                                        <div class="col-sm-10">
                                            <input  name="semester" type="number" class="form-control"  value="{{ Auth::guard('students')->user()->semester}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <a href="{{ route('viewprofilestudent') }}" class="btn btn-primary">Back</a>
                                        <button type="submit" class="btn btn-warning">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection 

