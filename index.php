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
                    </div><!-- /side-wrapper-result -->
                </div><!-- /side wrapper -->

                <!-- separated nav for ease of development -->
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
                            <div class="submit-wrap">
                                <a href="submit.php" class="btn btn-danger scroll-smooth" role="button">
                                    SUBMIT TICKET
                                </a>
                            </div>

                            <h3 class="app-title pull-left hidden-xs hidden-sm"><strong>Welcome Eduardo!</strong> How can we help you today?</h3>
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <div class="magic-layout" data-cols="4">
                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-clock"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-primary">3.1 hrs</span> <small>Avg Response Time</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->

                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-alert-circled"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-danger">635</span> <small>Open Tickets</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->

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
                                        <h3 class="pb-title">
                                            <span class="text-warning">289</span> <small>Tickets this Year</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->
                            </div><!-- /magic-layout -->
                            
                            <div class="magic-layout">

                            <div id="panel7" class="panel panel-default magic-element width-full">
                                    <div class="panel-heading bg-danger" style="color:#fff;">
                                        <div class="panel-icon"><i class="icon ion-ios7-photos-outline"></i></div>
										
                                        <h3 class="panel-title">VIP Tickets Summary <small><i class="icon ion-edit"></i>&nbsp;<a style="color:#fff;" href="#">Edit VIP's</small></a>
                                        </h3>                                                                         
                                    </div><!-- /panel-heading -->
                                    <div class="table-responsive">
                                        <table class="table table-hover datatables">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Priority</th>
                                                    <th>#</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                <td>excerpt of the tickets description...</td>
                                                <td>2: Quick Response</td>
                                                <td class="center">#001</td>
                                                <td class="center">         
                                                <div class="progress">
													<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
													<div class="progress-bar progress-bar-success" style="width: 80%"></div>
													<div class="progress-bar progress-bar-info" style="width: 60%"></div>
													<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
													<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
												</div><!-- /stacked -->                   	                                                    
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                <td>excerpt of the tickets description...</td>
                                                <td>3: Non-critical</td>
                                                <td class="center">#001</td>
                                                <td class="center">         
                                                <div class="progress">
													<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
													<div class="progress-bar progress-bar-success" style="width: 80%"></div>
													<div class="progress-bar progress-bar-info" style="width: 60%"></div>
													<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
													<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
												</div><!-- /stacked -->                   	                                                    
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                <td>excerpt of the tickets description...</td>
                                                <td>1: Emergency</td>
                                                <td class="center">#001</td>
                                                <td class="center">         
                                                <div class="progress">
													<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
													<div class="progress-bar progress-bar-success" style="width: 80%"></div>
													<div class="progress-bar progress-bar-info" style="width: 60%"></div>
													<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
													<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
												</div><!-- /stacked -->                   	                                                    
                                                </td>
                                             </tr>
                                             <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>2: Quick Response</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /panel7 -->
                            
                            <div id="panel7" class="panel panel-default magic-element width-full">
                                    <div class="panel-heading">
                                        <div class="panel-icon"><i class="icon ion-ios7-photos-outline"></i></div>
                                        <h3 class="panel-title">Ticket Status Summary</h3>
                                        <div class="legend">
                                        <small>Status Legend: </small>
                                        <span class="label label-danger">Opened</span>
                                        <span class="label label-warning">Assigned</span>
                                        <span class="label label-info">In Progress</span>
                                        <span class="label label-success">Pending Feedback</span>
                                        <span class="label label-primary">Closed</span>
                                        </div>                                                                                                                                                                
                                    </div><!-- /panel-heading -->
                                    <div class="table-responsive">
                                        <table class="table table-hover datatables">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Priority</th>
                                                    <th>#</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                              
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>2: Quick Response</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>3: Non-critical</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                             <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>2: Quick Response</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                                 <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>3: Non critical</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">         
	                                                <div class="progress">
														<div class="progress-bar progress-bar-primary" style="width: 100%"></div>
														<div class="progress-bar progress-bar-success" style="width: 80%"></div>
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->                   	                                                    
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /panel7 -->
             
							<!--  Pie Chart, called "sales chart" in js in footer -AD  -->
                                <div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-primary">
                                        <h3 class="pb-title">
                                            % Open Tickets by Position
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
                                            Your Team
                                        </h3><!-- /pb-title -->
                                    </div><!-- /panel-body-heading -->
                                    <!-- list group -->
                                    <ul class="list-group teamlist">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Doel Jony</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br /><i class="icon ion-email"></i><a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar7.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Yumiko</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br />  <i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br />  <i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar7.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br /> <i class="icon ion-email"></i> <a href="#" target="_top">name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br />  <i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar7.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br />  <i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br />  <i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                        
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar7.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Mark Londrian</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br/><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->                                                                                                                                                                                                      
                                    </ul><!-- /list-group -->
                                </div><!-- /panel top 10 users --> 


                            <div style="display: none;" class="panel panel-default magic-element">
                                    <div class="panel-body-heading">
                                        <h3 class="pb-title">
                                            Details Revenue
                                        </h3><!-- /pb-title -->
                                    </div><!-- /panel-body-heading -->
                                    <div class="kits-chart">
                                        <div id="revenue-chart" class="chart"></div>
                                    </div><!-- /kits-chart -->
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-ion btn-sm btn-primary">Day</button>
                                            <button type="button" class="btn btn-ion btn-sm btn-primary">Week</button>
                                            <button type="button" class="btn btn-ion btn-sm btn-primary">Month</button>
                                        </div>
                                    </div><!-- /panel-body -->
                                </div><!-- /panel -->


                            </div><!-- /magic-layout #2 -->
                            
                        </div><!-- /app body -->
                    </div><!-- /content app -->

                </section><!-- /content main -->
                                
            </div><!-- /content spliter -->

        </section><!-- /content -->
    </section><!-- /wrapper -->

    


    <!-- jQuery, required for theme -->
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
        <script src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/js/datatables.js"></script>
        <script src="assets/morris/morris.min.js"></script>
        <script src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/select2/select2.min.js"></script>
        <script src="assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>
    <script type="text/javascript">
    $(function () {
        
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
            
        // charts
        // chart revenue
        var data1 = [
            {dates: '2013-10-30', sales: 236},
            {dates: '2013-10-31', sales: 137},
            {dates: '2013-11-01', sales: 275},
            {dates: '2013-11-02', sales: 380},
            {dates: '2013-11-03', sales: 655},
            {dates: '2013-11-04', sales: 571}
        ],
        revenueChart = Morris.Line({
            element: 'revenue-chart',
            data: data1,
            lineColors: ['#3498db'],
            gridTextColor: '#34495e',
            pointFillColors: ['#3498db'],
            xkey: 'dates',
            ykeys: ['sales'],
            labels: ['Sales'],
            barRatio: 0.4,
            hideHover: 'auto'
        }),

        data_items = [
            {themes: 'Stilearn', purchase: 136},
            {themes: 'StilMetro', purchase: 137},
            {themes: 'Syrena', purchase: 675},
            {themes: 'Biosia', purchase: 380},
            {themes: 'GlitFlat', purchase: 655},
            {themes: 'Zahra', purchase: 1571}
        ],
            salesChart = Morris.Donut({
            element: 'sales-chart',
            data: [
                {label: 'Employee', value: 25 },
                {label: 'Manager', value: 65 },
                {label: 'Executive', value: 10 }
            ],
            colors: ['#a1cc7a', '#c43d41', '#444', '#fcba38'],
            gridTextColor: '#3498db',
            formatter: function (y) { return y + "%" }
        });

        // update data on content or window resize
        var update = function(){
            revenueChart.redraw();
            salesChart.redraw();
            itemsChart.redraw();
        }

        // handle chart responsive on toggle .content
        $(window).on('resize', function(){
            update();
        })
        $('#toggle-aside').on('click', function(){
            // update chart after transition finished
            $("#content").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
                update();
                $(this).unbind();
            });
        })
        $('#toggle-content').on('click', function(){
            update();
        })
        // end chart

    });
    </script>
  </body>
</html>