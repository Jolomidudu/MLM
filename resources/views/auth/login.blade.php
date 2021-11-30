<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Login || Yagerdity</title>
    
    <!-- page css -->
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    
    <style>
            .top-right {
                background: rgba(0,0,0,0.8);
                position: fixed;
                padding: 20px;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: white;
                padding: 0 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        
        </style>
</head>

<body class="skin-blue card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Yagerdity</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                <div class="top-right links">
                   
                        <a href="https://yagerdityamway.ng">Home</a>
                        <a href="{{ route('register') }}">Register</a>
                        <a href="https://yagerdityamway.ng/contact/">Contact Us</a>

                       
                    
                </div> <br> <br> <br>
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                        <h3 class="box-title m-b-20" style=" text-align: center; padding: 5px; border:1px solid black;"> Yagerdity | Sign In</h3>
                        @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="email" type="text" required="" placeholder="Username or Email"> </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- @captcha

                         <div class="form-group">
                            <div class="col-xs-12">
                                
                                <input class="form-control" type="text" id="captcha" name="captcha" required="" placeholder="enter captcha code"> </div>
                                @if ($errors->has('captcha'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
                        </div> -->
                 
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> 
                                </div> 
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                   
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="/register" class="text-info m-l-5"><b>Sign Up</b></a>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                             <a href="https://yagerdityamway.ng" class="text-info m-l-5"><b>Back to Home</b></a>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" method="POST" action="{{ route('password.email') }}">
                    @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="email" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/node_modules/popper/popper.min.js"></script>
    <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>

</html>