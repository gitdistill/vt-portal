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
                                <li class="active">My Support Tickets</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
<!-- app content here -->

							<div class="magic-layout" data-cols="4">
                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-gear-a"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-info">5</span> <small>Open Tickets</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->
                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-calendar"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-info">2</span> <small>Tickets This Month</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->
                                <div class="panel panel-default magic-element">
                                    <a href="#" class="panel-body-heading full-line">
                                        <div class="pb-object pb-object-circle">
                                            <i class="pbo-icon icon ion-calendar"></i>
                                        </div><!-- /pb-object -->
                                        <h3 class="pb-title ">
                                            <span class="text-info">19</span> <small>Tickets This Year</small>
                                        </h3><!-- /pb-title -->
                                    </a><!-- /panel-body-heading -->
                                </div><!-- /panel -->
							</div><!-- /4col magic layout -->
							
                            <div class="magic-layout">

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
                                        <table id="tickets" class="table table-hover datatables">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Site</th>
                                                    <th>Priority</th>
                                                    <th>#</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
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
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center">
														<div class="demoplaybar">
															<div class="progress"><span class="progressbar-back-text">40%</span>
																<div class="progress-bar progress-bar-info" aria-valuetransitiongoal="60" style="width: 60%;" aria-valuenow="60">
																	<span class="progressbar-front-text" style="width: 588px;">40%</span>
																</div>
															</div>
														</div>	                                                    
                                                    </td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center"><span class="label label-danger">Open</span></td>
                                                </tr>
                                            <tr class="gradeA">
                                                    <td><a href="single_ticket.php">Title for the ticket</a></td>
                                                    <td>excerpt of the tickets description...</td><td>Location 1</td>
                                                    <td>1: Emergency</td>
                                                    <td class="center">#001</td>
                                                    <td class="center"><span class="label label-danger">Open</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /panel7 -->

                     

								<div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-danger">
                                        <h3 class="pb-title">
                                            Recent Updates
                                            <small class="text-inverse">Updates 5 minutes ago</small>
                                        </h3><!-- /pb-title -->
                                        <div class="pb-actions">
                                            <!-- Single button -->
                                        </div><!-- /pb-actions -->
                                    </div><!-- /panel-body-heading -->

                                    <!-- list group -->
                                    <div class="list-group">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar7.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <div>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, debitis, distinctio, eveniet quia at minima incidunt officia unde blanditiis delectus dolore nulla voluptatum nisi aspernatur rem labore deserunt porro nostrum.
                                                    </div>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>John Doe</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>16 minutes ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="approve" class="btn btn-default"><i class="icon ion-checkmark"></i></a>
                                                        <a href="#" title="replay" class="btn btn-default"><i class="icon ion-reply"></i></a>
                                                        <a href="#" title="spam" class="btn btn-default"><i class="icon ion-alert"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar2.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <div>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perferendis, odit, quae fuga omnis sit maiores veritatis modi rerum quis est mollitia labore accusantium. Culpa, eos aliquam cum neque hic.
                                                    </div>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>Bent</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>3 hours ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="approve" class="btn btn-default"><i class="icon ion-checkmark"></i></a>
                                                        <a href="#" title="replay" class="btn btn-default"><i class="icon ion-reply"></i></a>
                                                        <a href="#" title="spam" class="btn btn-default"><i class="icon ion-alert"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <div>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, eius, sed, repudiandae quos nulla voluptatum a quas eligendi eos at maxime numquam placeat voluptates perspiciatis debitis. Laudantium fugiat nam in?
                                                    </div>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>Collin</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>22 hours ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="approve" class="btn btn-default"><i class="icon ion-checkmark"></i></a>
                                                        <a href="#" title="replay" class="btn btn-default"><i class="icon ion-reply"></i></a>
                                                        <a href="#" title="spam" class="btn btn-default"><i class="icon ion-alert"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->

                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar4.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <div>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, culpa libero magni consequatur assumenda in harum illo asperiores voluptatum labore? Est, modi temporibus sint animi odio quia vitae ipsam reiciendis.
                                                    </div>
                                                    <div class="text-bold text-muted">
                                                        <i class="icon ion-person"></i>
                                                        <small>David Edward</small>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <i class="icon ion-ios7-clock-outline"></i>
                                                        <small>1 day ago</small>
                                                    </div>
                                                </div><!-- /media-body -->
                                                <div class="list-actions auto-hide">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="#" title="approve" class="btn btn-default"><i class="icon ion-checkmark"></i></a>
                                                        <a href="#" title="replay" class="btn btn-default"><i class="icon ion-reply"></i></a>
                                                        <a href="#" title="spam" class="btn btn-default"><i class="icon ion-alert"></i></a>
                                                        <a href="#" title="delete" class="btn btn-default"><i class="icon ion-close"></i></a>
                                                    </div><!-- /btn-group -->
                                                </div><!-- /list-actions -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->
                                    </div><!-- /list-group -->
                                </div><!-- /panel latest comments -->
 
                                 <div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-warning">
                                        <h3 class="pb-title">My Ticket Totals</h3>
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
 
                             </div><!-- /magic-layout -->
 
                            
                        </div><!-- /app body -->
                    </div><!-- /content app -->

                </section><!-- /content main -->
                

                
                <!-- define your extra apps here -->
                <!-- (recomended: dont change the id value) -->
                <section id="content-aside" class="content-aside">
                    <!-- your module content -->
                    <div class="content-module fixed-header">
                        <!-- module header -->
                        <div class="module-header">
                            <h3 class="module-title">
                                <i class="icon ion-ios7-chatboxes-outline"></i> Chats
                            </h3>
                        </div><!-- /module header -->

                        <!-- module body -->
                        <div class="module-body">
                            
                            <!-- app module here -->
                            
                            <!-- chat module -->
                            <div class="chats-module">
                                <div class="cm-contact">
                                    <div class="cm-contact-separate">Top contacts</div>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar8.png" alt="">
                                        </div>
                                        <p class="cmci-name">Iin Bent <small>Team Leader</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar1.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mr. Doe <small>UI Designer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar9.png" alt="">
                                        </div>
                                        <p class="cmci-name">Yu Darsih <small>Data Analyst</small></p>
                                    </a>

                                    <div class="cm-contact-separate">More contacts</div>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar2.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mba Jessica <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar1.png" alt="">
                                        </div>
                                        <p class="cmci-name">Doel Jony <small>Rubi Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar11.png" alt="">
                                        </div>
                                        <p class="cmci-name">Yumiko <small>Java Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar4.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mark Londrian <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar5.png" alt="">
                                        </div>
                                        <p class="cmci-name">Mahatma <small>PHP Programmer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar6.png" alt="">
                                        </div>
                                        <p class="cmci-name">Harab <small>Junior Designer</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar7.png" alt="">
                                        </div>
                                        <p class="cmci-name">Sungep <small>Acountant</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar10.png" alt="">
                                        </div>
                                        <p class="cmci-name">Pathoel <small>Acountant</small></p>
                                    </a>
                                    <a href="#" class="cm-contact-item">
                                        <div class="cmci-avatar">
                                            <img src="assets/app/img/avatar6.png" alt="">
                                        </div>
                                        <p class="cmci-name">Opytama <small>Data Analyst</small></p>
                                    </a>
                                </div><!-- /chat module contact -->

                                <div class="cm-content">
                                    <a href="#" class="cm-content-heading">
                                        <h3><i class="icon ion-ios7-arrow-left"></i> Mr. Doe</h3>
                                    </a><!-- /cm-content-heading -->

                                    <div class="cm-content-chats">
                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>In eget pellentesque vehicula, quam aliquet turpis convallis</p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 12 min</time>
                                            </div>
                                        </div><!-- /chat-in -->

                                        <div class="chat-out">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar4.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>lorem nibh nam suspendisse lacinia</p>
                                                <time datetime="2013-12-13T20:00">8 min</time>
                                            </div>
                                        </div><!-- /chat-out -->

                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>massa cursus auctor urna parturient</p>
                                                <p>
                                                    <small><a href="#"><i class="icon ion-paperclip"></i> paperclips.zip</a></small>
                                                </p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 5 min</time>
                                            </div>
                                        </div><!-- /chat-in -->

                                        <div class="chat-out">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar4.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>Great!</p>
                                                <time datetime="2013-12-13T20:00">4 min</time>
                                            </div>
                                        </div><!-- /chat-out -->

                                        <div class="chat-in">
                                            <div class="chat-avatar">
                                                <img src="assets/app/img/avatar5.png" title="" />
                                            </div>
                                            <div class="chat-msg">
                                                <p>Pulvinar aute massa amet dapibus, etiam consectetuer consectetuer sagittis, egestas massa nibh vestibulum, sapien in sodales, quisque nec habitasse phasellus ultricies tempus</p>
                                                <time datetime="2013-12-13T20:00">Mr. Doe - 2 min</time>
                                            </div>
                                        </div><!-- /chat-in -->
                                    </div><!-- /cm-content-chats -->

                                    <div class="cm-content-status">
                                        <i class="icon ion-chatbubble-working"></i> Mr. Doe is typing...
                                    </div><!-- /cm-content-status -->

                                    <div class="cm-content-input">
                                        <form id="frm-send-chat" role="form">
                                            <button type="button" class="btn btn-lg btn-transparent" title="Attach file">
                                                <i class="icon ion-paperclip"></i>
                                            </button>
                                            <input type="text" name="chat-msg" class="form-control" placeholder="Write a message" />
                                            <button type="submit" class="btn btn-lg btn-transparent" title="Send">
                                                <i class="icon ion-ios7-paperplane-outline"></i>
                                            </button>
                                        </form>
                                    </div><!-- /cm-content-input -->
                                </div><!-- /chat module content -->
                            </div><!-- /chat module -->
                            
                        </div><!-- /module body -->
                    </div><!-- /content module -->
                </section><!-- /content asside -->
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
	        });
        
        })
    </script>
  </body>
</html>