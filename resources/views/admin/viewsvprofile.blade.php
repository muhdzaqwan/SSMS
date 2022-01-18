@extends('layouts.sidebarAdmin')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Supervisor Information</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                    <div class="card-header bg-primary">
                        <a href="#"><h3 class="card-title"> {{$supervisors->name}}'s Profile </h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$supervisors->name}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control"  value="{{$supervisors->email}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Current quota</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" value="{{$supervisors->currenttake}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Preferred quota</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  value="{{$supervisors->maxtake}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Expertise</label>
                                        <div class="col-sm-10" >
                                            <input type="text" class="form-control"  value="{{$supervisors->field1}}" disabled>
                                            <input type="text" class="form-control"  value="{{$supervisors->field2}}" disabled>
                                            <input type="text" class="form-control"  value="{{$supervisors->field3}}" disabled>
                                        </div>
                                </div>             
                            </form>
                            
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                            <input type="button" class="btn btn-warning" value="Back" onclick="history.back()" ></input>
                                            <input type="button" class="btn btn-danger" href="#" value="Delete profile"></input>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <a href="#"><h3 class="card-title"> List of supervisee </h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" >
                    <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width:10px">No</th>
                      <th>Name</th>
                      <th>Woking Title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection 

