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
                                <li><a href="#">Support Tickets</a></li>
                                <li class="active">Ticket #001</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
<!-- app content here -->
							<div class="row">
							<div class="col-sm-8">					            
									<div id="ticketpanel" class="panel panel-default magic-element bordered-none">
	                                    <div class="panel-heading bg-primary text-inverse bordered-none">
	                                        <div class="panel-actions">
	                                            <a role="button" data-toggle="#printtick" title="Print" class="btn btn-sm btn-icon">
	                                                <span style="font-size:.7em;" class="text-inverse">Print</span> <i class="icon ion-printer text-inverse"></i>
	                                            </a>
	                                        </div><!-- /panel-actions -->
	                                        <h3 class="panel-title">Ticket #001</h3>
	                                    </div>
	                                    <div class="panel-body bordered-none">
	                                   		<h2>Ticket Title</h2>
	                                        <div class="demoplaybar">
	                                                <div class="progress" style="margin-bottom:5px;">
														<div class="progress-bar progress-bar-info" style="width: 60%"></div>
														<div class="progress-bar progress-bar-warning" style="width: 40%"></div>														
														<div class="progress-bar progress-bar-danger" style="width: 20%"></div>
													</div><!-- /stacked -->   
	                                        </div>
                                        	<div id="legend-progress" class="row">
												<div class="col-xs-2">opened</div>
												<div class="col-xs-2">assigned</div>
												<div class="col-xs-2">in progress</div>
												<div class="col-xs-2">feedback</div>
												<div class="col-xs-2">closed</div>
											</div> 	                                                    
	                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quisquam dolorum quo aspernatur. Incidunt, corporis, explicabo, alias nostrum a rerum accusantium iste quas odio quasi itaque exercitationem similique maxime rem! Incidunt, corporis, explicabo, alias nostrum a rerum accusantiu Lorem ipsum dolor sit amet, consectetur adipisicing el.</p>

											<div class="mpc-attach">
				                            	<div class="lead">Attachments <small class="text-muted">(3 files, 1.21 MB)</small></div>
				                                <ul class="list-unstyled text-muted">
				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>design_brief.zip <small>(654 KB)</small></p>
				                                    </li>
				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>Flowchart.docx <small>(421 KB)</small></p>
				                                    </li>
				                                    <li>
				                                        <div class="btn-group btn-group-sm pull-right">
				                                            <div class="btn btn-link">Download</div>
				                                            <div class="btn btn-link">View</div>
				                                        </div>
				                                        <p>Revision_191213.jpg <small>(184 KB)</small></p>
				                                    </li>
				                                </ul>
				                            </div>

											<div class="text-bold text-muted">
                                                <i class="icon ion-person"></i>
                                                <small>Eduardo Amadeo DeSouza</small>
                                                &nbsp;&nbsp;&nbsp;
                                                <i class="icon ion-ios7-clock-outline"></i>
                                                <small>16 minutes ago</small>
                                            </div>
	                                    </div>
	                                </div><!-- /panel-default -->
								</div><!-- /col8 -->
							<div class="col-sm-4">
	                                <div id="panel1" class="panel panel-default magic-element">
	                                    <div class="panel-heading">
	                                        <h3 class="panel-title">Contact Details</h3>
	                                    </div><!-- /panel-heading -->
	                                    <div class="panel-body">
	                                     <address>
                                           <strong>Eduardo Amadeo DeSouza</strong><br>
                                           <a href="mailto:#">first.last@example.com</a>
                                        </address>
	                                        <address>
                                           <strong>San Francisco Waldorf High School</strong><br>
                                           795 Folsom Ave, Suite 600<br>
                                           San Francisco, CA 94107<br>
                                           <abbr title="Phone">P:</abbr> (123) 456-7890 ext. 1234
                                        </address>
	                                    </div><!-- /panel-body -->
	                                </div><!-- /panel-default -->	  	                                	                                	                                
	                                <div class="panel panel-default magic-element">
	                                <div class="panel-heading">
	                                        <h3 class="panel-title">Key Team Members</h3>
	                                    </div><!-- /panel-heading -->
                                    <ul class="list-group teamlist">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object media-object-circle" src="assets/app/img/avatar3.png" alt="">
                                                </a><!-- /media-object -->
                                                <div class="media-body">
                                                    <h3 class="media-heading">Quinn Bailey</h3>
                                                    <div class="text-muted">
                                                        <i class="icon ion-ios7-telephone"></i> (415) 314-0195<br /><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
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
                                                        <i class="icon ion-ios7-telephone"></i> (415) 314-0195<br /><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
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
                                                        <i class="icon ion-ios7-telephone"></i> (415) 314-0195<br /><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->                                                                                                                                                                                                                                    
                                    </ul><!-- /list-group -->
                                    <a id="teamlink" href="team.php">See full team...</a>
                                </div><!-- /panel -->                                             	                                                       	                                
								</div><!-- /col4 -->
							</div><!-- /row -->
<!-- ticket updates -->
							<div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-default">
                                        <h3 class="pb-title">
                                            Ticket Updates
                                            <small>Updated 5 minutes ago</small>
                                        </h3><!-- /pb-title -->
                                        <div class="pb-actions">
                                            <!-- Single button -->
                                            <div class="btn-group">
                                                <a role="button" class="btn btn-icon dropdown-toggle" data-toggle="dropdown">
                                                    <span class="icon ion-navicon"></span>
                                                </a>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /pb-actions -->
                                        <span class="pb-watermark">
                                            <i class="icon ion-ios7-chatboxes-outline"></i>
                                        </span><!-- /pb-watermark -->
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
                                                                                  
                            <div id="panel-wysiwyg1" class="panel panel-default magic-element">
                                        <div class="panel-heading">
                                            <div class="panel-icon"><i class="icon ion-edit"></i></div>
                                            <div class="panel-actions">
                                                <a role="button" data-collapse="#panel-wysiwyg1" title="collapse" class="btn btn-sm btn-icon">
                                                    <i class="icon ion-chevron-down"></i>
                                                </a>
                                                <a role="button" data-close="#panel-wysiwyg1" title="close" class="btn btn-sm btn-icon">
                                                    <i class="icon ion-close-round"></i>
                                                </a>
                                            </div><!-- /panel-actions -->
                                            <h3 class="panel-title">Post a comment</h3>
                                        </div>                                        
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <textarea id="wysihtml5-1" name="wysihtml5-1" class="form-control" style="width:100%" rows="10" placeholder="Enter text ..."></textarea>
                                                </div><!-- /form-group -->
                                            </form><!-- /form -->
                                        </div>
                                    </div><!-- /panel -->

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
        <script src="assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="assets/bootstrap-markdown/js/bootstrap-markdown.js"></script>
        <script src="assets/dropzone/dropzone.min.js"></script>
                    
    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>
    
        <script type="text/javascript">
    $(function () {
        'use strict';
        
        $('#wysihtml5-1').wysihtml5({
            "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
            "emphasis": true, //Italics, bold, etc. Default true
            "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "html": true, //Button which allows you to edit the generated HTML. Default false
            "link": true, //Button to insert a link. Default true
            "image": true, //Button to insert an image. Default true,
            "color": true, //Button to change color of font  
            "size": 'sm' // use button small ion and primary
        });

        $('#wysihtml5-2').wysihtml5({
            "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "link": false, //Button to insert a link. Default true
            "image": false, //Button to insert an image. Default true,
            "size": 'xs' //default: default
        });

        $('#wysihtml5-3').wysihtml5({
            "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "link": false, //Button to insert a link. Default true
            "image": false, //Button to insert an image. Default true,
            "size": 'xs btn-flat' //default: default
        });
    });
    </script>
  </body>
</html>