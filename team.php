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
                                <li class="active">My Team</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
							<div class="magic-layout">                              
                                  <div class="panel panel-default magic-element">
                                    <div class="panel-body-heading bg-danger">
                                        <h3 class="pb-title">
                                            Your Team: <span class="team-name">Team Name</span>
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
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br/><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                    <h4>IT Consultant - <a href="#">SeeBio</a></h4>
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
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br/><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>

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
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br/><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>
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
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>
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
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br/><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>
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
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>
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
                                                        <i class="icon ion-ios7-telephone"></i><a href="tel:4153140195"> (415) 314-0195</a><br/><i class="icon ion-email"></i> <a href="#" target="_top"> name@varsitytechnologies.com</a>
                                                    </div>
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>
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
                                                    <h4>IT Consultant - <a href="#">See Bio</a></h4>
                                                </div><!-- /media-body -->
                                            </div><!-- /media -->
                                        </li><!-- /list-group-item -->                                                                                                                                                                                                      
                                    </ul><!-- /list-group -->
                                </div><!-- /panel top 10 users --> 

                                </div><!-- /box -->                                
                                                                                                                           
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