<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <title>Varsity Client Portal</title>

<?php include 'inc/head.php'; ?>    

        <style>
    body{
        overflow: hidden; /* just for Sign page */
        background-color: #000;
    }
    </style>
    
  </head>

  </head>

  <body>
    <!-- content wrapper to define fullpage or container -->
    <!-- (recomended: dont change the id value) -->
    <section id="wrapper" class="container">
        <section id="signin" class="sign-wrapper signin transition-layout">
            <div id="loginbg" class="row">
                <div class="col-md-offset-4 col-sm-offset-0 col-xs-offset-0 col-md-4 col-sm-12 col-xs-12">
                    <div class="sign-brand" >
                            <img style="width:100%;" src="img/VTlogo.svg" alt="Brand"/>
                    </div><!-- /sign-brand -->
                    <div class="sign-container">
                        <form role="form" action="index.html">
                            <div class="form-group">
                                <input type="text" class="form-control" name="signin-username" placeholder="Username" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="password" class="form-control" name="signin-password" placeholder="Password" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="submit" class="btn btn-lg btn-danger btn-block" value="Log In" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input class="iCheck" id="rememberme" name="rememberme" type="checkbox" checked>
                                <label class="icheck-label" for="rememberme">Stay sign in</label>
                            </div><!-- /form-group -->
                        </form>
                    </div><!-- /sign-container -->
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="sign-footer">
                <a href="#signup" data-toggle="transition-layout" class="btn btn-link text-inverse">Create Account</a>
                <a href="#recover" data-toggle="transition-layout" class="btn btn-link text-inverse">Forgot password</a>
            </div><!-- /sign-footer -->
        </section><!-- /signin -->

        <section id="signup" class="sign-wrapper signup transition-layout">
            <div class="row">
                <div class="col-md-offset-4 col-sm-offset-0 col-xs-offset-0 col-md-4 col-sm-12 col-xs-12">
                    <div class="sign-brand">
                        <div class="sign-brand-logo">
                            <img src="assets/app/img/brand-md.png" alt="Brand"/>
                        </div>
                        <h1 class="sign-brand-name">Sign Up Syrena</h1>
                    </div><!-- /sign-brand -->
                    <div class="sign-container">
                        <form role="form" action="index.html">
                            <div class="form-group">
                                <input type="text" class="form-control" name="signup-username" placeholder="Username" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="email" class="form-control" name="signup-email" placeholder="Email" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="password" class="form-control" name="signup-password" placeholder="Password" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="password" class="form-control" name="signup-cpassword" placeholder="Repeat password" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block" value="Sign Up" >
                            </div><!-- /form-group -->
                        </form>
                    </div><!-- /sign-container -->
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="sign-footer">
                <a href="#signin" data-toggle="transition-layout" class="btn btn-link text-inverse">Already have an account</a>
            </div><!-- /sign-footer -->
        </section><!-- /signup -->

        <section id="recover" class="sign-wrapper recover transition-layout">
            <div class="row">
                <div class="col-md-offset-4 col-sm-offset-0 col-xs-offset-0 col-md-4 col-sm-12 col-xs-12">
                    <div class="sign-brand">
                        <div class="sign-brand-logo">
                            <img src="assets/app/img/brand-md.png" alt="Brand"/>
                        </div>
                        <h1 class="sign-brand-name">Syrena</h1>
                    </div><!-- /sign-brand -->
                    <div class="sign-container">
                        <form role="form" action="index.html">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="recover-email" placeholder="Email" >
                                <small class="help-block text-inverse">Enter your email address and we will send you a link to reset your password</small>
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Send reset link" >
                            </div><!-- /form-group -->
                        </form>
                    </div><!-- /sign-container -->
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="sign-footer">
                <a href="#signin" data-toggle="transition-layout" class="btn btn-link text-inverse">Sign In</a>
                <a href="#signup" data-toggle="transition-layout" class="btn btn-link text-inverse">Create Account</a>
            </div><!-- /sign-footer -->
        </section><!-- /recover -->
    </section><!-- /wrapper -->

    


    <!-- jQuery, theme required for theme -->
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- theme dependencies -->
    <!-- 
        Contents List
        1. Raphaël
        2. Isotope
        3. verge
        4. Moment
        5. Prettify
    -->
    <script src="assets/app/js/dependencies.js"></script>
        
        <!-- other dependencies -->
        <script src="assets/jquery-icheck/jquery.icheck.min.js"></script>
    
    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>

    <script type="text/javascript">
    $(function() {
        'use strict';

        $('.iCheck').iCheck({
            checkboxClass: 'icheckbox_flat',
            radioClass: 'iradio_flat',
        });
    })
    </script>
  </body>
</html>