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
   
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Register || Yagerdity</title>
    
    <!-- page css -->
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

<style>
            .top-right {
                background: rgba(0,0,0,0.8);
                position: fixed;
                border-radius:30px 0 0 30px ;  
                padding: 20px;
                right: 5px;
                top: 20px;
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
    
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);"><br>
            <div class="login-box card" style="border: 2px solid #2a2f3f;">
                <div class="card-body" style="border-radius:40px 0 40 40px;">
                <div class="top-right links">
                   
                        <a href="https://yagerdityamway.ng">Home</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="https://yagerdityamway.ng/contact/">Contact Us</a>

                       
                    
                </div> <br> <br> <br>
                    <form class="form-horizontal form-material"   method="POST" action="{{ route('register') }}">
                        <h3 class="box-title m-b-20" style=" text-align: center; padding: 5px; border:1px solid black;">Yagerdity Investment Form</h3>

                        
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" type="text"  placeholder="First Name" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}" name="mname" value="{{ old('mname') }}" type="text"  placeholder="Middle Name" required>

                                @if ($errors->has('mname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" type="text"  placeholder="Last Name" required>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="email" required="" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input  class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}"  type="text" required="" placeholder="Username">

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('conaddr') ? ' is-invalid' : '' }}" name="conaddr" value="{{ old('conaddr') }}"  type="text" required="" placeholder="Contact Address">

                                @if ($errors->has('conaddr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('conaddr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"  type="text" required="" placeholder="Phone Number">

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label> Amount to Invest </label>
                                <input class="form-control{{ $errors->has('amtinv') ? ' is-invalid' : '' }}" name="amtinv" value="{{ old('amtinv') }}"  type="text" required="" placeholder="Eg 200,000">

                                @if ($errors->has('amtinv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amtinv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label>Date of Investment </label>
                                <input class="form-control{{ $errors->has('dainv') ? ' is-invalid' : '' }}" name="dainv" value="{{ old('dainv') }}"  type="date" required="">

                                @if ($errors->has('dainv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dainv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label>Duration of Investment </label>
                                <input class="form-control{{ $errors->has('duinv') ? ' is-invalid' : '' }}" name="duinv" value="{{ old('duinv') }}"  type="text" required="" placeholder="Eg 6 months or 1 year">
                    
                                @if ($errors->has('duinv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duinv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                
                                <input class="form-control{{ $errors->has('nextofkin') ? ' is-invalid' : '' }}" name="nextofkin" value="{{ old('nextofkin') }}"  type="text" required="" placeholder="Next of Kin">

                                @if ($errors->has('nextofkin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nextofkin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                
                                <input class="form-control{{ $errors->has('nokaddr') ? ' is-invalid' : '' }}" name="nokaddr" value="{{ old('nokaddr') }}"  type="text" required="" placeholder="Next of Kin's Address">

                                @if ($errors->has('nokaddr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nokaddr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('nokphone') ? ' is-invalid' : '' }}" name="nokphone" value="{{ old('nokphone') }}"  type="text" required="" placeholder="Next of Kin's Phone No">

                                @if ($errors->has('nokphone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nokphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        


                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" required="" placeholder="Password">

                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="password_confirmation" type="password" required="" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="by" value="{{$ref}}" type="text" placeholder="Referrer (Optional)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                    <label class="custom-control-label" for="customCheck1">I agree to all <a href="https://drive.google.com/file/d/1bD_AARFbnGH-uExB3YTIzQuto2PUQuSU/view?usp=sharing">Terms</a></label> 
                                </div> 
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="/login" class="text-info m-l-5"><b>Sign In</b></a>
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
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/node_modules/popper/popper.min.js"></script>
    <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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