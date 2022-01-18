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
                        <a href=""><h3 class="card-title"> Edit Profile information</h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                            <form class="form-horizontal" method="POST" action="editprofilesupervisorprocess/Auth::guard('supervisors')->user()->id">
                                @csrf
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10" >
                                            <input name="name" type="name" class="form-control"  value="{{ Auth::guard('supervisors')->user()->name}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="email" class="form-control" value="{{ Auth::guard('supervisors')->user()->email}}" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Supervisee quota</label>
                                        <div class="col-sm-10">
                                            <input name="maxtake" type="number" class="form-control"  value="{{ Auth::guard('supervisors')->user()->maxtake}}" > 
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Expertise / Interest</label>
                                        <select  name="field1" class="custom-select form-control-border" required>
                                                    <option value="{{ Auth::guard('supervisors')->user()->field1}}" selected>{{ Auth::guard('supervisors')->user()->field1}}</option>                  
                                                    @foreach ($fields as $field)
                                                    <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                                                    @endforeach
                                        </select>
                                    <label class="col-sm-4 col-form-label">Expertise / Interest 2 (optional)</label>
                                        <select class="custom-select form-control-border" name="field2" optional>
                                                    <option value="{{ Auth::guard('supervisors')->user()->field2}}" selected>{{ Auth::guard('supervisors')->user()->field2}}</option>                  
                                                    @foreach ($fields as $field)
                                                    <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                                                    @endforeach
                                        </select>
                                    <label class="col-sm-4 col-form-label">Expertise / Interest 3 (optional)</label>
                                        <select class="custom-select form-control-border" name="field3" optional>
                                                    <option value="{{ Auth::guard('supervisors')->user()->field3}}" selected>{{ Auth::guard('supervisors')->user()->field3}}</option>                  
                                                    @foreach ($fields as $field)
                                                    <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                                                    @endforeach
                                        </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <a href="{{ route('viewprofilesv') }}" class="btn btn-primary">Back</a>
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

