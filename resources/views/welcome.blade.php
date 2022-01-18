<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
    <div class="login-logo">
        <p>Welcome to</p>
        <a href="#"><b>Student Supervisor Matching System</b></a>
    </div>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">To register as a student please create an account.</p>
            <p class="login-box-msg"> To register as a supervisor please contact the administrator.</p>
         <center>
            <div class="navbar-nav ml-auto">
                <li class="nav-item"><li class="nav-item">
                    <a class="btn btn-block btn-primary" href="{{ route('signinstudent') }}">{{ __('Login as Student') }}</a>
                </li>
            <div>
            <p></p>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item"><li class="nav-item">
                        <a class="btn btn-block btn-primary" href="{{ route('signinsv') }}">{{ __('Login as Staff') }}</a>
                    </li>
                </div>
            <p></p>
        </div>
        <div>
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-block btn-primary" href="signupstudent">{{ __('Create a student account') }}</a>
                </li>
            </div>
          </div>
        </div>
    </center>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
    </body>
</html>
