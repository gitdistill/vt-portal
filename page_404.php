<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <title>Varsity Client Portal</title>

<?php include 'inc/head.php'; ?>    
    
  </head>

  <body>
    <!-- content wrapper to define fullpage or container -->
    <!-- (recomended: dont change the id value) -->
    <section id="wrapper" class="container">
        <section class="error-msg">
            <div class="error-container">
                <h2 class="error-status">Error <span class="error-code">404</span> <small><strong>Opps!</strong> The page you request was not found</small></h2>
                <div class="text-center">
                    <a href="index.html" role="button" class="btn btn-ion btn-danger"><i class="icon ion-home"></i> Back to homepage</a>
                </div>
            </div><!-- /error-container -->
        </section><!-- /error-msg -->
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

    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>
  </body>
</html>