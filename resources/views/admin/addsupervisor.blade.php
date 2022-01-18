<head>
    <style>
        .center {
            border: 5px solid #FFFF00;
            padding: 50px 0;
        }
</style>
</head>
@extends('layouts.sidebarAdmin')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add new supervisor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add supervisor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form form action="{{ route('addsv') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Supervisor Fullname</label>
                    <input name="name" type="text" class="form-control" placeholder="e.g. Asif Kamas" required>
                  </div>
                  <div class="form-group">
                    <label>Supervisor Email address</label>
                    <input  name="email" type="email" class="form-control" placeholder="e.g. asif@gmail.com"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Supervisor Password('default123')</label>
                    <input  name="password" type="password" class="form-control"  placeholder="Password" value="default123">
                  </div>
                  <div class="form-group">
                    <input name="maxtake" type="number" class="form-control" value="1" hidden>
                  </div>
                  <div class="form-group">
                    <input name="role" type="int" class="form-control" value="2" hidden>
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectBorder">Expertise / Interest</label>
                  <select  name="field1" class="custom-select form-control-border" required>
                  <option>Please choose</option>                  
                    @foreach ($fields as $field)
                    <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                    @endforeach
                  </select>
                  <label for="exampleSelectBorder">Expertise / Interest 2 (optional)</label>
                  <select class="custom-select form-control-border" name="field2" optional>
                  <option value="-" selected>None</option>                  
                    @foreach ($fields as $field)
                    <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                    @endforeach
                  </select>
                  <label for="exampleSelectBorder">Expertise / Interest 3 (optional)</label>
                  <select class="custom-select form-control-border" name="field3" optional>
                  <option value="-" selected>None</option>                  
                    @foreach ($fields as $field)
                    <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                    @endforeach
                  </select>
                </div>
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
