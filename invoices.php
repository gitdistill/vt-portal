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
                            <div class="pull-right">
                                <a href="submit.php" class="btn btn-danger scroll-smooth" role="button">
                                    SUBMIT TICKET
                                </a>
                            </div>
                            <ol class="breadcrumb bg-none pull-left hide-xs">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Invoices</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
							<div class="magic-layout">
							  <div id="panel7" class="panel panel-default magic-element width-full">
                                <div class="panel-heading">
                                    <div class="panel-icon"><i class="icon ion-document"></i></div>
                                    <div class="panel-actions">
                                        <a role="button" data-refresh="#panel7" title="refresh" class="btn btn-sm btn-icon">
                                            <i class="icon ion-refresh"></i>
                                        </a>
                                    </div><!-- /panel-actions -->
                                    <h3 class="panel-title">Invoices</h3>
                                </div><!-- /panel-heading -->
                                <div class="table-responsive">
                                    <table class="table table-hover datatables">
                                        <thead>
                                            <tr>
                                                <th>Invoice Date</th>
                                                <th>Description</th>
                                                <th>Invoice #</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeA">
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">001</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
												<td><a href="single_invoice.php"><span class="label label-danger">Unpaid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">002</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-danger">Unpaid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">003</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-danger">Unpaid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">004</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-danger">Unpaid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">005</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-danger">Unpaid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">006</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">007</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">008</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">009</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">010</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">011</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">012</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">013</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.4</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.5</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.6</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.7</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.8</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.8</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">1.8</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">125.5</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">312.8</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">419.3</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">Lorem Ipsum dolor set amet</td>
                                                <td class="center"><a href="single_invoice.php">522.1</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">03/12/14</td>
                                                <td><a href="single_invoice.php">OSX.4+</td>
                                                <td class="center"><a href="single_invoice.php">420</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                            <tr class="gradeA">
                                                
                                                <td><a href="single_invoice.php">iPod Touch / iPhone</td>
                                                <td><a href="single_invoice.php">iPod</td>
                                                <td class="center"><a href="single_invoice.php">420.1</td>
                                                <td class="center"><a href="single_invoice.php">$600.00</td>
                                                <td><a href="single_invoice.php"><span class="label label-success">Paid</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                             </div><!-- /panel7 -->
                                                                                            
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
        <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/js/datatables.js"></script>
           
    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>
    <script type="text/javascript">
        $(function(){

            // panel refresh
            $('.panel [data-refresh]').on('click', function(){
                var $this = $(this),
                    panel = $this.attr('data-refresh');

                setTimeout(function(){
                    $(panel).find('.panel-progress').remove();  // remove proggress spinner
                }, 1000 );
            });


            // datatables
            $('.datatables').dataTable({
                "iDisplayLength": 10,
                "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
            });
            /** variation datatables style
            $('.datatables').dataTable({"sPaginationType": "bs_normal"});
            $('.datatables').dataTable({"sPaginationType": "bs_two_button"});
            $('.datatables').dataTable({"sPaginationType": "bs_four_button"});
            $('.datatables').dataTable({"sPaginationType": "bs_full"});
            */
        })
    </script>

  </body>
</html>