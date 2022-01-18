@extends('layouts.sidebarSupervisor')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Auth::guard('supervisors')->user()->name}} Profile </h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboardsupervisor') }}">Home</a></li>
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
                    <div class="card-header bg-navy">
                        <a href="{{ route('viewprofilesv') }}"><h3 class="card-title"> Profile information</h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10" >
                                            <input type="text" class="form-control"  value="{{ Auth::guard('supervisors')->user()->name}}" disabled>
                                        </div>
                                </div>         
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" value="{{ Auth::guard('supervisors')->user()->email}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Supervisee quota</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  value="{{ Auth::guard('supervisors')->user()->maxtake}}" disabled> 
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Expertise</label>
                                        <div class="col-sm-10">
                                            {{ Auth::guard('supervisors')->user()->field1}}<br>
                                            {{ Auth::guard('supervisors')->user()->field2}}<br>
                                            {{ Auth::guard('supervisors')->user()->field3}}<br>
                                        </div>
                                </div>    
                        </form>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <a href="{{route('editprofilesupervisor')}}" class="btn btn-danger">Update Profile</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection 
