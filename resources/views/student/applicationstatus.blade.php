<head>
    <style>
        .center {
            border: 5px solid #FFFF00;
            padding: 50px 0;
        }
</style>
</head>
@extends('layouts.sidebarStudent')
@section('content') 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Application list</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboardstudent') }}">Home</a></li>
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
            <div class="card">
              <div class="card-header bg-indigo">
                <h3 class="card-title">List of application</h3>
              </div>
              <div class="card-body">
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Title</th>
                      <th>To</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($statuslist as $list)
                    <tr>                    
                      <td>{{$loop->iteration}}</td>
                      <td>{{$list->title}}</td>
                      <td>{{$list->name}}</td>
                      <td>{{$list->status}}</td>
                      <td> <div class="input-group-append">
                      <a href="" type="submit" class="btn bg-indigo">Download Proposal</a>
                    </div></td>
                    </tr>
                    @endforeach       
                  </tbody>
  
                </table>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
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