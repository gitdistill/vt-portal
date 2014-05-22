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
        <!-- define side left theme -->
        <aside class="side-left">
            <!-- side header -->
            <div class="side-header">
                <!-- place your brand (recomended: dont change the id value) -->
                <!-- (recomended: dont change the id value) -->
                <h1 id="brand" class="brand">
                    <a href="index.html">
                        <!-- <i class="icon ion-waterdrop"></i> -->
                        <img src="img/VTlogo.svg" alt="Brand">   <!-- 32px image logo -->
                        Varsity
                    </a>
                </h1><!-- /brand -->

                <!-- form search, remove class hide if you not place your brand -->
                <!-- (recomended: dont change the id value) -->
                <form id="smart-search" class="side-form hide" role="form">
                    <input type="text" class="form-control" data-target=".side-wrapper" placeholder="Smart Finder">
                </form><!-- /side wrapper -->
            </div><!-- /side header -->

            <!-- side body -->
            <div class="side-body">
                <!-- this you can place your search result with ajax -->
                <div class="side-wrapper side-wrapper-large">
                    <div class="side-wrapper-status lead">No result, please start typing!</div>
                    <div class="side-wrapper-result">
                        <!-- just sample result -->
                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar1.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Post title <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar2.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Username <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar3.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Item name <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar4.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Other result <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->

                        <div class="panel panel-default bordered-none no-radius">
                            <a href="#" class="panel-body-heading full-line">
                                <div class="pb-object pb-object-circle pb-object-sm">
                                    <img src="assets/app/img/avatar5.png" alt="">
                                </div><!-- /pb-object -->
                                <h3 class="pb-title pb-title-sm">
                                    Something else <small>Lorem ipsum dolor sit amet, consectetur</small>
                                </h3><!-- /pb-title -->
                            </a><!-- /panel-body-heading -->
                        </div><!-- /panel -->
                    </div><!-- /side-wrapper-result -->
                </div><!-- /side wrapper -->

                <!-- separate nav for ease development -->
				<?php include 'inc/nav.php'; ?>
            </div><!-- /side body -->
        </aside><!-- /side left -->

        <!-- define content theme, use data-swipe="true" to enable gesture event -->
        <!-- (recomended: dont change the id value) -->
        <section id="content" class="content">
            <!-- define your content header here -->
			<?php include 'inc/header.php'; ?>
            

            <!-- define content row -->
            <div class="content-spliter">
                <!-- define your awesome apps here -->
                <!-- (recomended: dont change the id value) -->
                <section id="content-main" class="content-main">
                    
                    <!-- your app content -->
                    <div class="content-app fixed-header">
                        <!-- app header -->
                        <div class="app-header">
                            <ol class="breadcrumb bg-none pull-left hide-xs">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Invoices</li>
                            </ol>
                            <div class="pull-right">
                                <a href="page_invoice_print.html" target="_blank" class="btn btn-default" role="button">Print</a>
                                <a href="#" class="btn btn-default" role="button">Download</a>
                            </div>
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <!-- invoice -->
                            <div class="center-box center-block">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="panel-body-heading bordered">
                                            <h3 class="panel-body-title">Invoice #247 <small>Company Name, Inc.</small></h3>
                                        </div>
                                        <div class="row invoice-desc">
                                            <div class="col-md-4">
                                                <p class="muted">From</p>
                                                <p>Example Company</p>
                                                <p>47 Address</p>
                                                <p>Example, NY.80091</p>
                                                <p>invoice@mail.com</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="muted">To</p>
                                                <p>XYZ Corp</p>
                                                <p>432 Main Street</p>
                                                <p>San Francisco, CA 91234</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Invoice No. 247</p>
                                                <p>Invoice Date. December 21, 2012</p>
                                                <p>Payment Due. January 17, 2012</p>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ITEM DESCRIPTIONS</th>
                                                        <th>QTY</th>
                                                        <th>PRICE</th>
                                                        <th>TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Lorem Ipsum</td>
                                                        <td class="text-right">5.0</td>
                                                        <td class="text-right">$4.00</td>
                                                        <td class="text-right">$20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nulla pellentesque</td>
                                                        <td class="text-right">3.0</td>
                                                        <td class="text-right">$5.00</td>
                                                        <td class="text-right">$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Leo ornare lacinia</td>
                                                        <td class="text-right">13.0</td>
                                                        <td class="text-right">$2.00</td>
                                                        <td class="text-right">$26.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Est arcu integer consectetuer</td>
                                                        <td class="text-right">5.0</td>
                                                        <td class="text-right">$5.00</td>
                                                        <td class="text-right">$25.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="4">Invoice Totals</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Invoice Subtotal</td>
                                                        <td class="text-right">$66.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Invoice Discount</td>
                                                        <td class="text-right">($4.00)</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Sales Tax  (8.5%)</td>
                                                        <td class="text-right">$5.61</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Total Due</td>
                                                        <td class="text-right">USD $67.61</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/invoice-->
								                                                                 
                        </div><!-- /app body -->
                    </div><!-- /content app -->

                </section><!-- /content main -->
            </div><!-- /content spliter -->

        </section><!-- /content -->
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