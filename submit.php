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
                            <div class="breadcrumbwrap">
	                            <ol class="breadcrumb bg-none pull-left hide-xs">
	                                <li><a href="#">Dashboard</a></li>
	                                <li><a href="#">Support Tickets</a></li>
	                                <li class="active">Submit A Ticket</li>
	                            </ol>
                            </div>
                            <div class="pull-right">
                                <a href="submit.php" class="btn btn-danger scroll-smooth" role="button">
                                    SUBMIT TICKET
                                </a>
                            </div>
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
							<div class="magic-layout">
                                <div class="box magic-element width-full">
                                    <h2 class="box-heading"><strong>Step 1:</strong> Select Service</h2>
                                    <hr>
                                    <form role="form">
                                        <div class="controls" style="padding:25px;">
                                            <div class="form-group">
	                                            <input class="iCheck" name="iradio4" data-skin="line" data-color="red" type="radio" >
	                                            <label>Priority 1: Emergency</label>
	
	                                            <input class="iCheck" name="iradio4" data-skin="line" data-color="red" type="radio">
	                                            <label>Priority 2: Quick Response</label>
	
	                                            <input class="iCheck" name="iradio4" data-skin="line" data-color="red" type="radio">
	                                            <label>Priority 3: Non-critical</label>
	
												<input class="iCheck" name="iradio4" data-skin="line" data-color="red" type="radio">
	                                            <label>Priority 4: Schedule Maintenance</label>
                                            </div><!-- /form-group -->
                               				<div class="radiobutton-caption">
									   			<h4>Emergency</h4>
									   			<p>An issue characterized by both high severity and high impact to your organization.<br />
									   			<small>An example would be a organization-wide internet outage that affects everyone and impairs critical business processes.</small></p>
									   			<h4>Quick Response:</h4> 
									   			<p>An issue characterized by medium severity and high impact to you or your organization.<br /><small>An example would be if one site was unable to print.</small></p>
									   			<h4>Normal Response:</h4>
									   			<p>An issue characterized by medium severity and impact to you or your organization.<br /><small>An example would be needing a printer mapped to your computer.</small></p>
									   			<h4>Scheduled Maintenance:</h4>
									   			<p>An issue with low severity and impact to you or your organization.<br /><small>An example would be patch maintenance/updates on your computer.</small></p>
                               				</div>
                                        </div><!-- /controls -->
                                    </form><!-- /form -->
                                </div><!-- /box -->
                                
                                <div class="box magic-element width-full">
                                    <h2 class="box-heading">

                                        <strong>Step 2:</strong> Ticket Details
                                    </h2>
                                    <hr>
                                    <form class="form-horizontal" role="form">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input" >
                                                </div>
                                            </div><!-- /form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="inputTextarea">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" class="form-control" id="inputTextarea"></textarea>
                                                </div>
                                            </div><!-- /form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input">PO Number</label>
                                                <div class="col-sm-10">
                                                    <input style="width:370px;" type="text" class="form-control" id="input" >
                                                </div>
                                            </div><!-- /form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="input">Site</label>
                                                <div class="col-sm-10">
                                                    <input style="width:370px;" type="text" class="form-control" id="input" >
                                                </div>
                                            </div><!-- /form-group -->                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input">Preferred Completion Date</label>                                        
                                            <div style="padding-left:17px;" class='input-group date' id='datetimepicker1'>
                                                <span class="input-group-addon">
                                                    <span class="icon ion-ios7-calendar-outline"></span>
                                                </span>
                                                <input style="width:327px;" type='text' class="form-control" data-format="MM/DD/YYYY" />

                                            </div>
                                        </div><!-- /form-group -->

                                        </fieldset><!-- /fieldset -->
                                    </form><!-- /form -->
                                </div><!-- /box -->                                
                                
                                <div class="box magic-element width-full">
                                    <h2 class="box-heading">
                                        <strong>Step 3:</strong> Contact Details
                                    </h2>
                                    <hr>


								 <form class="form-horizontal contactinfo">
						            <fieldset>
						                <!-- Address form -->
						        
						         
						                <!-- full-name input-->                                          
						                <div class="form-group">
						                    <label class="col-sm-2 control-label" for="input">Full Name</label>
						                    <div class="col-sm-10">
						                        <input id="full-name" name="full-name" type="text" placeholder="full name" class="form-control">
						                    </div>
						                </div>
						                <!-- address-line1 input-->
						                <div class="form-group">
						                    <label class="col-sm-2 control-label">Address Line 1</label>
						                    <div class="col-sm-10">
						                        <input id="address-line1" name="address-line1" type="text" placeholder="address line 1" class="form-control">
						                    </div>
						                </div>
						                <!-- address-line2 input-->
						                <div class="form-group">
						                    <label class="col-sm-2 control-label">Address Line 2</label>
						                    <div class="col-sm-10">
						                        <input id="address-line2" name="address-line2" type="text" placeholder="address line 2" class="form-control">
						                    </div>
						                </div>
						                <!-- city input-->
						                <div class="form-group">
						                    <label class="col-sm-2 control-label">City / Town</label>
						                    <div class="col-sm-10">
						                        <input id="city" name="city" type="text" placeholder="city" class="form-control">
						                    </div>
						                </div>
						                <!-- region input-->
						                <div class="form-group">
						                    <label class="col-sm-2 control-label">State / Province / Region</label>
						                    <div class="col-sm-10">
						                        <input id="region" name="region" type="text" placeholder="state / province / region" class="form-control">
						                    </div>
						                </div>
						                <!-- postal-code input-->
						                <div class="form-group">
						                    <label class="col-sm-2 control-label">Zip / Postal Code</label>
						                    <div class="col-sm-10">
						                        <input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code" class="form-control">
						                    </div>
						                </div>
						                <!-- phone input-->
						                <div class="form-group">
						                    <label class="col-sm-2 control-label">Telephone</label>
						                    <div class="col-sm-10">
						                        <input id="telephone" name="telephone" type="text" placeholder="phone number" class="form-control">
						                    </div>
						                </div>						                
						            </fieldset>
						            <br /><br />
						            <div class="form-group">
						                <div class="col-sm-offset-2 col-sm-10">
						                    <button type="reset" class="btn btn-default">Reset</button>
						                    <button type="submit" class="btn btn-danger">Submit Ticket</button>
						                </div>
						            </div><!-- /form-group -->
						        </form>




                                </div><!-- /box -->

								<div class="box magic-element width-full">                                
		                            <div id="panel-dropzone" class="panel panel-default">
		                                <div class="panel-heading">
		                                    <div class="panel-icon"><i class="icon ion-ios7-cloud-upload-outline"></i></div>
		                                    <h3 class="panel-title">Dropzone demo</h3>
		                                </div><!-- /panel-heading -->
		                                <div class="panel-body">
		                                    <form action="/file-upload" class="dropzone">
		                                        <div class="fallback">
		                                            <input name="file" type="file" multiple />
		                                        </div>
		                                    </form>
		                                </div><!-- /panel-body -->
		                            </div><!-- /panel dropzone -->  
								</div>                                                              
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
        <script src="assets/jquery-icheck/jquery.icheck.min.js"></script>
        <script src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/select2/select2.min.js"></script>
        <script src="assets/multiselect/js/jquery.multi-select.js"></script>
        <script src="assets/bootstrap-jasny/js/inputmask.js"></script>
        <script src="assets/bootstrap-jasny/js/fileinput.js"></script>
        <script src="assets/moment/moment.min.js"></script>
        <script src="assets/bootstrap3-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/mjaalnir-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
        <script src="assets/dropzone/dropzone.min.js"></script>    
    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>
       <script type="text/javascript">

    $(function() {
        'use strict';

        // checkbox and radio with iCheck
        // Initialize all components iCheck
        $('.iCheck').each(function(){
            // var each element .iCheck
            var $this = $(this),
                skin = $this.attr('data-skin'),
                color = $this.attr('data-color'),
                checkbox, radio, insert = '';

            /**
             * default usage skin
             * 
             * Skins options:
             * @data-skin minimalis
             * @data-skin square
             * @data-skin flat
             * @data-skin line
             * @data-skin polaris
             * @data-skin futurico
             */
            if (skin === undefined) {
                checkbox = 'icheckbox_minimal';
                radio = 'iradio_minimal';
            }
            else{
                checkbox = 'icheckbox_' + skin;
                radio = 'iradio_' + skin;
            }

            /**
             * default usage color
             * 
             * Available colors:
             * @data-color black
             * @data-color red
             * @data-color green
             * @data-color blue
             * @data-color aero
             * @data-color grey
             * @data-color orange
             * @data-color yellow
             * @data-color pink
             * @data-color purple
             */
            if (color !== undefined) {
                checkbox = checkbox + '-' + color;
                radio = radio + '-' + color;
            }

            // handle iCheck skin 'line'
            if (skin == 'line') {
                var label = $this.next(),
                    label_text = label.text();

                insert = '<div class="icheck_line-icon"></div>' + label_text;
                label.remove();
            }

            // initialize
            $this.iCheck({
                checkboxClass: checkbox,
                radioClass: radio,
                insert: insert,
                increaseArea: '20%' // optional
            });
        }); 
        // end iCheck



        // tags input
        $('#tags-input1').tagsInput({
            height: "32px",
            width:'auto',           // support percent (90%)
        });
        $('#tags-input2').tagsInput({
            width:'auto',
            defaultText: 'Add Tag',
            onChange: function(elem, elem_tags)
            {
                var languages = ['php','ruby','javascript'];
                $('.tag', elem_tags).each(function()
                {
                    if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0){
                        $(this).css({
                            'border-color': '#2980b9',
                            'background-color': '#3498db',
                            'color': '#ecf0f1'
                        });
                    }
                });
            }
        });
        // manual style for .tagsinput
        $('div.tagsinput input').on('focus', function(){
            var tagsinput = $(this).parent().parent();
            tagsinput.addClass('focus');
        }).on('focusout', function(){
            var tagsinput = $(this).parent().parent();
            tagsinput.removeClass('focus');
        });
        // end tags input



        // select2
        $(".select2").select2();


        // multiselect
        $(".multiselect").multiSelect();


        // bootstrap3-datetimepicker
        $('#datetimepicker1').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            }
        });
        $('#datetimepicker2').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            },
            pickDate: false
        });
        $('#datetimepicker3').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            },
            pickTime: false
        });
        $('#datetimepicker4').datetimepicker({
            icons : {
                time: 'icon ion-ios7-clock-outline',
                date: 'icon ion-ios7-calendar-outline',
                up:   'icon ion-ios7-arrow-up',
                down: 'icon ion-ios7-arrow-down'
            }
        });
        
        

        // date range picker
        $('#daterangepicker1').daterangepicker();
        $('#daterangepicker2').daterangepicker(
            {
              ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                 'Last 7 Days': [moment().subtract('days', 6), moment()],
                 'Last 30 Days': [moment().subtract('days', 29), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
              },
              startDate: moment().subtract('days', 29),
              endDate: moment()
            },
            function(start, end) {
                $('#daterangepicker2 .text-date').text(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );




        // colorpicker
        $('.colorpicker').colorpicker();
        $('#simpleColorpicker1').simplecolorpicker({
            theme: 'glyphicons'
        });
        $('#simpleColorpicker2').simplecolorpicker({
            picker: true,
            theme: 'glyphicons'
        });
    });

    </script>

  </body>
</html>