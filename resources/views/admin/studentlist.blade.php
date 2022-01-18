
@extends('layouts.sidebarAdmin')
@section('content') 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>
              </div>
              <div class="card-body">
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                    <th style="width: 10px;">No</th>
                      <th style="width: 300px;">Matric Number</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($students as $student)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$student->matricnumber}}</td>
                      <td>{{$student->firstname}} {{$student->lastname}}</td>
                      <td>{{$student->email}}</td>
                      <td style="width: 15px"><a href="{{url('/admin/viewstudentprofile',$student->id)}}"><button type="button" class="btn btn-block bg-gradient-primary btn-xs" >View</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection