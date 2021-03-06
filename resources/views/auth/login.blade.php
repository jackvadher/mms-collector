<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>MMS Collector | User Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="{{ url("assets/global/plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ url("assets/global/plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ url("assets/global/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ url("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ url("assets/global/plugins/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ url("assets/global/plugins/select2/css/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ url("assets/global/css/components-rounded.min.css")}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ url("assets/global/css/plugins.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ url("assets/pages/css/login-5.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-2 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 login-container bs-reset">

                    <div class="login-content">
                        <h1>MMS Collector User Login</h1>                        
                        <form method="POST" action="{{ route('login') }}" class="login-form" >

                            @csrf

                            @if (count($errors) > 0)

                            <div class="alert alert-danger">
                                <button class="close" data-close="alert"></button>
                                <span><strong>{{ $errors->first() }}</strong> </span>
                            </div>

                            @endif

                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group " type="text" autocomplete="off" placeholder="Email" name="email" required value="{{old("email")}}"/> 

                                </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group " type="password" autocomplete="off" placeholder="Password" name="password" required value="{{old("password")}}"/>                                     
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" name="remember" value="{{ old('remember') ? 'checked' : '' }}" /> {{ __('Remember Me') }}
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <button class="btn blue" type="submit">Sign In</button>
                                </div>
                                <div class="col-sm-12 text-right">
                                    <br>
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">                                        
                                        <a href="{{url("register")}}">Don't have an account ?</a> 
                                    </label>
                                </div>
                            </div>
                        </form>                        
                    </div>

                </div>
                <div class="col-md-6 bs-reset">
                    <div class="login-bg"> </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-2 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ url("assets/global/plugins/jquery.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/js.cookie.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/jquery.blockui.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ url("assets/global/plugins/jquery-validation/js/jquery.validate.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/jquery-validation/js/additional-methods.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/select2/js/select2.full.min.js")}}" type="text/javascript"></script>
        <script src="{{ url("assets/global/plugins/backstretch/jquery.backstretch.min.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ url("assets/global/scripts/app.min.js")}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ url("assets/pages/scripts/login-5.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
