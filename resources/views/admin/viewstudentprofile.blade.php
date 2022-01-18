@extends('layouts.sidebarAdmin')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Student Information</h1>
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
                        <a href="#"><h3 class="card-title"> {{$students->firstname}}'s Profile </h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                            <form class="form-horizontal">
                            <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Matric Number</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  value="{{$students->matricnumber}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$students->firstname}} {{$students->lastname}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control"  value="{{$students->email}}" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" placeholder="0{{$students->phoneNo}}" disabled>
                                        </div>
                                </div>

                            </form>
                            
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                            <input type="button" class="btn btn-warning" value="Back" onclick="history.back()" ></input>
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
                        <a href="#"><h3 class="card-title"> Supervisor </h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" >
                    <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="width: 15px"><a href=""><button type="button" class="btn btn-block bg-gradient-warning btn-xs" >View Profile</button></a></td>
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

