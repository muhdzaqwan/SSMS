@extends('layouts.sidebarSupervisor')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Request Information </h1>
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
                        <a href="{{ route('viewprofilesv') }}"><h3 class="card-title"> Request Details</h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10" >
                                            <input type="text" class="form-control"  value="{{$application->title}}" disabled>
                                        </div>
                                </div>         
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                        <textarea name="description" type="text" class="form-control" disabled>{{$application->description}}</textarea>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Field</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  value="{{$application->field}}" disabled> 
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Proposal Document</label>
                                        <div class="col-sm-10">
                                            <a href="{{route('editprofilesupervisor')}}" class="btn bg-navy">Download Proposal(.pdf)</a>
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                        <a href="{{route('editprofilesupervisor')}}" class="btn bg-green">Accept Request</a>
                                        <a href="{{route('editprofilesupervisor')}}" class="btn btn-danger">Reject Request</a>                                        </div>
                                </div>
                        </form>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <input type="button" class="btn btn-primary" value="Back" onclick="history.back()" ></input>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection 
