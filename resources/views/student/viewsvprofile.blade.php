@extends('layouts.sidebarStudent')
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
                        <a href="{{ route('viewprofilestudent') }}"><h3 class="card-title"> {{$supervisors->name}}'s Profile </h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="height: 445px; width: 800px;">
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
                                            <input type="number" class="form-control"  value="{{$supervisors->currenttake}}"disabled>
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
                                            <table>
                                            <tr><td>{{$supervisors->field1}}</td></tr>
                                            <tr><td>{{$supervisors->field2}}</td></tr>
                                            <tr><td>{{$supervisors->field3}}</td></tr>

                                            </table>
                                        </div>
                                </div>             
                            </form>
                            
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <a href="{{route('svlist')}}"><button class="btn btn-primary">Back</button></a>
                                        <a href="{{url('/student/requestform',$supervisors->id)}}" type="submit" class="btn bg-warning">Send Supervisee Request</a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection 

