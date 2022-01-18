
@extends('layouts.sidebarStudent')
@section('content') 
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- /.container-fluid -->
      <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>List of supervisors</h1>
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
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-indigo">
                <a href="{{ route('svlist') }}"><h3 class="card-title">Supervisor list</h3></a>
                <div class="card-tools">                  
                  <form action="{{ route('svlist') }}">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="searchTable" class="form-control float-right" placeholder="Search Field">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 15px;">ID</th>
                      <th >Name</th>
                      <th>Email</th>
                      <th>Field of Interest / Expertise</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($supervisors as $supervisor)
                    <tr>
                      <td>{{$supervisor->id}}</td>
                      <td>{{$supervisor->name}}</td>
                      <td>{{$supervisor->email}}</td>
                      <td>{{$supervisor->field1}}<br/>{{$supervisor->field2}}<br/>{{$supervisor->field3}}</td>
                      <td style="width: 15px"><a href="{{url('/student/viewsvprofile',$supervisor->id)}}" type="submit"><button type="button" class="btn btn-block bg-gradient-indigo " >View </button></a></td>

                    </tr>
                  </tbody>
                  @endforeach
                </table>
                {{$supervisors->links('pagination::bootstrap-4')}}

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  @endsection 