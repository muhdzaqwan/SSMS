@extends('layouts.sidebarSupervisor')
@section('content') 

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Change Password</h1>
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
                        <a href=""><h3 class="card-title"> Fill in the new password</h3></a>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body" style="width: 800px;">
                    @if (Session::has('success'))
                    <div class="alert alert-info">{{ Session::get('success') }}</div>
                    @endif
                            <form class="form-horizontal" method="POST" action="{{route('updatepasswordsvprocess')}}">
                                @csrf
                                <div class="error-text"></div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">New password</label>
                                        <div class="col-sm-10" >
                                            <input onkeyup="active()" id="pswrd_1" name="newpassword" type="password" class="form-control"  value="" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Confirm password</label>
                                        <div class="col-sm-10" >
                                            <input onkeyup="active_2()" id="pswrd_2" disabled name="confirmpassword" type="password" class="form-control"  value="" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <a href="{{ route('dashboardsupervisor') }}" class="btn btn-primary">Back</a>
                                        <button type="submit" class="btn btn-warning" disabled>Change Password</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    

<script>
         const pswrd_1 = document.querySelector("#pswrd_1");
         const pswrd_2 = document.querySelector("#pswrd_2");
         const errorText = document.querySelector(".error-text");
         const showBtn = document.querySelector(".show");
         const btn = document.querySelector("button");
         function active(){
           if(pswrd_1.value.length >= 7){
             btn.removeAttribute("disabled", "");
             btn.classList.add("active");
             pswrd_2.removeAttribute("disabled", "");
           }else{
             btn.setAttribute("disabled", "");
             btn.classList.remove("active");
             pswrd_2.setAttribute("disabled", "");
           }
         }
         btn.onclick = function(){
           if(pswrd_1.value != pswrd_2.value){
             errorText.style.display = "block";
             errorText.classList.remove("matched");
             errorText.textContent = "Error! Confirm Password Not Match";
             return false;
           }else{
             errorText.style.display = "block";
             errorText.classList.add("matched");
             errorText.textContent = "Nice! Confirm Password Matched";
             button.submit;
             return false;
           }
         }
         function active_2(){
           if(pswrd_2.value != ""){
             showBtn.style.display = "block";
             showBtn.onclick = function(){
               if((pswrd_1.type == "password") && (pswrd_2.type == "password")){
                 pswrd_1.type = "text";
                 pswrd_2.type = "text";
                 this.textContent = "Hide";
                 this.classList.add("active");
               }else{
                 pswrd_1.type = "password";
                 pswrd_2.type = "password";
                 this.textContent = "Show";
                 this.classList.remove("active");
               }
             }
           }else{
             showBtn.style.display = "none";
           }
         }
      </script>
@endsection 

