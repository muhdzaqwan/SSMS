@extends('layouts.sidebarStudent')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                 <h1>Send Supervisee Request to {{$supervisors->name}}</h1>
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
                        <a><h3 class="card-title">Proposal Information</h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                            <form class="form-horizontal" action="/requestformprocess" method="POST">  
                                @csrf
                            <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input name="adminid" type="text" class="form-control" value="{{$supervisors->id}}" hidden>
                                        </div>
                                </div>       
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Working Title</label>
                                        <div class="col-sm-10">
                                            <input name="title" type="text" class="form-control" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" type="text" class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Field</label>
                                    <div>
                                            <select  name="field" class="custom-select form-control-border" required>
                                                @foreach ($fields as $field)
                                                <option value="{{$field->fieldname}}">{{$field->fieldname}}</option>                  
                                                @endforeach
                                            </select> 
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Upload proposal</label>
                                        <div class="col-sm-10">
                                            <input name="proposaldoc"type="file" class="form-control" accept="application/pdf" required>
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                            <input type="button" class="btn btn-primary" value="Back" onclick="history.back()" ></input>
                                        <a href="">
                                            <button class="btn btn-warning" type="submit">Send Request</button>
                                        </a>
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

