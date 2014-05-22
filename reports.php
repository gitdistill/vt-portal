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
                    <a href="index.php">
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
                                <li class="active">Reports</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                        <!-- app content here -->
                            <div class="magic-layout" data-cols="3">

                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-calendar"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-warning">45</span> <small>Tickets This Month</small>
                                        </h3><!-- /pb-title -->

                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->


                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-calendar"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-warning">45</span> <small>Tickets This Year</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->

                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-calendar"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title">
                                            <span class="text-warning">289</span> <small>Tickets Last Year</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->
                            </div> <!-- /magic layout data cols 4 -->  
                            
                            <div class="magic-layout">                            
                  
                                <div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-warning">
                                        <h3 class="pb-title">Ticket Totals</h3>
                                    </div>
                                    <div id="chart-bar" class="chart"></div>
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-ion btn-sm btn-warning active">By Month</button>
                                            <button type="button" class="btn btn-ion btn-sm btn-warning">By Quarter</button>
                                            <button type="button" class="btn btn-ion btn-sm btn-warning">By Year</button>
                                        </div>
                                    </div><!-- /panel-body -->
                                </div><!-- /panel -->

								<!--  Pie Chart, called "sales chart" in js in footer -AD  -->
                                <div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-primary">
                                        <h3 class="pb-title">
                                            Ticket Priority Breakdown
                                        </h3><!-- /pb-title -->
                                    </div><!-- /panel-body-heading -->
                                    <div class="kits-chart">
                                        <div id="sales-chart" class="chart"></div>
                                        <div class="panel-body">
	                                        <div class="text-center">
	                                            <button type="button" class="btn btn-ion btn-sm btn-default active">By Month</button>
	                                            <button type="button" class="btn btn-ion btn-sm btn-default">By Quarter</button>
	                                            <button type="button" class="btn btn-ion btn-sm btn-default">By Year</button>
	                                        </div>
										</div><!-- /panel-body -->
                                    </div><!-- /kits-chart -->
                                </div><!-- /panel -->
 
                                 <div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-danger">
                                        <h3 class="pb-title">
                                            Top 10 Users
                                        </h3><!-- /pb-title -->
                                    </div><!-- /panel-body-heading -->
                                    <!-- list group -->
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mba Jessica</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Design Manager
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Yu Darsih</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Accountant
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Doel Jony</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Editor
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Yumiko</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Artisan
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Programmer
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Programmer
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Programmer
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Programmer
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Programmer
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar9.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-briefcase"></i> Programmer
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->                                                                                                                                                                                                      
                                    </ul><!-- /list-group -->
                                </div><!-- /panel top 10 users -->   
 
 									<div id="ticketpanel" class="panel panel-default magic-element">
	                                    <div class="panel-body-heading bg-primary">
	                                        <h3 class="pb-title">Managed Services Reports</h3>
	                                    </div>
	                                    <div class="panel-body bordered-none">
											<div class="mpc-attach">
				                            	<div class="lead">Most Recent <small class="text-muted">(6 files)</small></div>
				                                <ul class="list-unstyled text-muted">
				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>March2014.pdf <small>(654 KB)</small></p>
				                                    </li>
				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>February2014.pdf <small>(421 KB)</small></p>
				                                    </li>
				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>January2014.pdf <small>(122 KB)</small></p>
				                                    </li>
				                                    				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>Q42013.pdf <small>(184 KB)</small></p>
				                                    </li>
				                                    				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>December2013.pdf <small>(294 KB)</small></p>
				                                    </li>
				                                    				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>November2013.pdf <small>(300 KB)</small></p>
				                                    </li>
				                                </ul>
				                            </div>

	                                    </div>
	                                </div><!-- /panel-default -->
 
                            </div><!-- /magic-layout #2 -->
 
                            
                        </div><!-- /app body -->
                    </div><!-- /content app -->

                </section><!-- /content main -->
                

                
                <!-- define your extra apps here -->
                <!-- (recomended: dont change the id value) -->

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
        <script src="assets/morris/morris.min.js"></script>
        <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
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
	        
	        // chart bar
	        var data_bar = [
	            {month: 'Jan', tickets: 1136},
	            {month: 'Feb', tickets: 137},
	            {month: 'Mar', tickets: 275},
	            {month: 'Apr', tickets: 380},
	            {month: 'May', tickets: 655},
   	            {month: 'Jun', tickets: 955},
	            {month: 'Jul', tickets: 55},
	            {month: 'Aug', tickets: 655},
   	            {month: 'Sep', tickets: 255},
   	            {month: 'Nov', tickets: 655},	               	            
	            {month: 'Dec', tickets: 1571}
	        ],
	        chart_bar = Morris.Bar({
	            element: 'chart-bar',
	            data: data_bar,
	            barColors: ['#fcba38'],
	            gridTextColor: '#34495e',
	            xkey: 'month',
	            ykeys: ['tickets'],
	            labels: ['Geekbench'],
	            barRatio: 0.4,
	            xLabelAngle: 35,
	            hideHover: 'auto'
	        }),
            salesChart = Morris.Donut({
            element: 'sales-chart',
            data: [
                {label: 'Emergency', value: 25 },
                {label: 'Quick Response', value: 65 },
                {label: 'Non-Critical', value: 35 },
                {label: 'Maintenance', value: 25 }
            ],
            colors: ['#9E1B25', '#C43D41', '#D3545E', '#E58088'],
            gridTextColor: '#3498db'
        });
	        
        
        })
    </script>
  </body>
</html>