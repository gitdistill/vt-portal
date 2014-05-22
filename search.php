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
                                <li class="active">Search</li>
                            </ol>
                            <!-- <h3 class="app-title">Drop App Modules</h3> -->
                        </div><!-- /app header -->

                        <!-- app body -->
                        <div class="app-body">
                            
                            <!-- app content here -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <!-- result nav -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#general-search" data-toggle="tab">General search</a></li>
                                        <li><a href="#items-search" data-toggle="tab">Items search</a></li>
                                        <li><a href="#users-search" data-toggle="tab">Users search</a></li>
                                    </ul><!-- /result nav -->

                                    <form class="form-search-result" action="#" role="form">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Type here to search" />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="#">Only items</a></li>
                                                        <li><a href="#">Only users</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Something else</a></li>
                                                    </ul>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div><!-- /form-group -->
                                    </form><!-- /form -->

                                    <div class="search-tools">
                                        <div class="btn-group">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    Any time <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Any time</a></li>
                                                    <li><a href="#">Last hours</a></li>
                                                    <li><a href="#">Today</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Other time filter</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    All results <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Most Visited</a></li>
                                                    <li><a href="#">Popular User</a></li>
                                                    <li><a href="#">Draft</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Other result filter</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <button type="button" class="btn btn-default btn-sm">Other filter</button>
                                        </div><!-- /btn-group -->
                                    </div><!-- /search-tools -->

                                    <!-- result panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="general-search">
                                            <div class="search-result">
                                                <div class="general-search">
                                                    <h4><a href="#">Syrena - Admin, Dashboard, Webapp Template</a></h4>
                                                    <div><a href="#" class="text-success">http://stilearning.com/items/preview/syrena</a> <small class="text-muted">9 hours ago</small></div>
                                                    <p>Pellentesque facilisis, morbi quis, donec amet et. Vivamus volutpat, nec vulputate ut, odio gravida. Eget pede tristique, eget pede aliquam. Ligula tellus nec, quam eros lobortis, hymenaeos dictum. Nulla eu sed, nullam duis. Ipsum est, lacus urna, tristique amet hendrerit...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Urna aptent - Vestibulum mattis, mattis viverra</a></h4>
                                                    <div><a href="#" class="text-success">https://wrapbootstrap.com</a></div>
                                                    <p>Nisl quam, justo libero, ante risus sem. Quam tortor, platea non, est amet a. Eu vulputate. Sed duis, ut turpis a. Congue mauris, at ullamcorper mattis, tellus ac netus. Porttitor ac in, duis nulla, habitant urna posuere...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Syrena - Admin, Dashboard, Webapp Template</a></h4>
                                                    <div><a href="#" class="text-success">http://stilearning.com/items/preview/syrena</a> <small class="text-muted">9 hours ago</small></div>
                                                    <p>Pellentesque facilisis, morbi quis, donec amet et. Vivamus volutpat, nec vulputate ut, odio gravida. Eget pede tristique, eget pede aliquam. Ligula tellus nec, quam eros lobortis, hymenaeos dictum. Nulla eu sed, nullam duis. Ipsum est, lacus urna, tristique amet hendrerit...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Urna aptent - Vestibulum mattis, mattis viverra</a></h4>
                                                    <div><a href="#" class="text-success">https://wrapbootstrap.com</a></div>
                                                    <p>Nisl quam, justo libero, ante risus sem. Quam tortor, platea non, est amet a. Eu vulputate. Sed duis, ut turpis a. Congue mauris, at ullamcorper mattis, tellus ac netus. Porttitor ac in, duis nulla, habitant urna posuere...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Syrena - Admin, Dashboard, Webapp Template</a></h4>
                                                    <div><a href="#" class="text-success">http://stilearning.com/items/preview/syrena</a> <small class="text-muted">9 hours ago</small></div>
                                                    <p>Pellentesque facilisis, morbi quis, donec amet et. Vivamus volutpat, nec vulputate ut, odio gravida. Eget pede tristique, eget pede aliquam. Ligula tellus nec, quam eros lobortis, hymenaeos dictum. Nulla eu sed, nullam duis. Ipsum est, lacus urna, tristique amet hendrerit...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Urna aptent - Vestibulum mattis, mattis viverra</a></h4>
                                                    <div><a href="#" class="text-success">https://wrapbootstrap.com</a></div>
                                                    <p>Nisl quam, justo libero, ante risus sem. Quam tortor, platea non, est amet a. Eu vulputate. Sed duis, ut turpis a. Congue mauris, at ullamcorper mattis, tellus ac netus. Porttitor ac in, duis nulla, habitant urna posuere...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Syrena - Admin, Dashboard, Webapp Template</a></h4>
                                                    <div><a href="#" class="text-success">http://stilearning.com/items/preview/syrena</a> <small class="text-muted">9 hours ago</small></div>
                                                    <p>Pellentesque facilisis, morbi quis, donec amet et. Vivamus volutpat, nec vulputate ut, odio gravida. Eget pede tristique, eget pede aliquam. Ligula tellus nec, quam eros lobortis, hymenaeos dictum. Nulla eu sed, nullam duis. Ipsum est, lacus urna, tristique amet hendrerit...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Urna aptent - Vestibulum mattis, mattis viverra</a></h4>
                                                    <div><a href="#" class="text-success">https://wrapbootstrap.com</a></div>
                                                    <p>Nisl quam, justo libero, ante risus sem. Quam tortor, platea non, est amet a. Eu vulputate. Sed duis, ut turpis a. Congue mauris, at ullamcorper mattis, tellus ac netus. Porttitor ac in, duis nulla, habitant urna posuere...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Syrena - Admin, Dashboard, Webapp Template</a></h4>
                                                    <div><a href="#" class="text-success">http://stilearning.com/items/preview/syrena</a> <small class="text-muted">9 hours ago</small></div>
                                                    <p>Pellentesque facilisis, morbi quis, donec amet et. Vivamus volutpat, nec vulputate ut, odio gravida. Eget pede tristique, eget pede aliquam. Ligula tellus nec, quam eros lobortis, hymenaeos dictum. Nulla eu sed, nullam duis. Ipsum est, lacus urna, tristique amet hendrerit...</p>
                                                </div><!-- /general-result -->

                                                <div class="general-search">
                                                    <h4><a href="#">Urna aptent - Vestibulum mattis, mattis viverra</a></h4>
                                                    <div><a href="#" class="text-success">https://wrapbootstrap.com</a></div>
                                                    <p>Nisl quam, justo libero, ante risus sem. Quam tortor, platea non, est amet a. Eu vulputate. Sed duis, ut turpis a. Congue mauris, at ullamcorper mattis, tellus ac netus. Porttitor ac in, duis nulla, habitant urna posuere...</p>
                                                </div><!-- /general-result -->
                                            </div><!-- /search-result -->
                                        </div><!-- /general-search -->


                                        <div class="tab-pane fade" id="items-search">
                                            <div class="searc-result magic-layout" data-cols="3">
                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb12.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Commodi, fuga, tempora totam natus dolorum illum odio optio possimus sit aliquam nihil amet nemo voluptatum suscipit repudiandae. Molestias sequi alias iste!</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 8,765
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $20
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 2,564
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb11.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Feugiat nam pulvinar. Ante consectetuer vulputate, wisi litora nonummy, nibh aliquam adipiscing.</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 3,732
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $18
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 1,438
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb10.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Mauris habitant porta. Urna felis, blandit eros mollis. Rhoncus mauris nec, montes venenatis, elementum nunc massa. Sit nec dapibus. Leo neque.</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 6,233
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $15
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 2,054
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb4.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Et lacinia. Lacus lacus curabitur, vel at, gravida placerat. Adipiscing ligula, sed integer bibendum, suscipit vitae euismod. Et magna. Neque gravida, id sapiente metus, dolor eleifend. Quis cras varius, vitae elit.</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 7,343
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $20
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 1,739
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb8.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Sit in adipiscing, a amet. Nibh nulla laoreet. Pellentesque et id. Justo sit. Dui ut tellus, lectus magna, nec vitae condimentum. Eu vivamus dolor, wisi ipsum.</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 8,765
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $21
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 1,564
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb7.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Commodi, fuga, tempora totam natus dolorum illum odio optio possimus sit aliquam nihil amet nemo voluptatum suscipit repudiandae. Molestias sequi alias iste!</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 7,765
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $20
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 1,667
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb6.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Sit in adipiscing, a amet. Nibh nulla laoreet. Pellentesque et id. Justo sit. Dui ut tellus, lectus magna, nec vitae condimentum. Eu vivamus dolor, wisi ipsum.</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 765
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $20
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 251
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->

                                                <div class="panel panel-default magic-element">
                                                    <div class="kits-media full-line">
                                                        <img src="assets/app/img/thumb5.jpg" alt="" />
                                                    </div><!-- /kits-media -->
                                                    <a href="#" class="panel-hover">
                                                        <h3 class="box-heading">Place title here</h3>
                                                        <p>Venenatis rem, molestie amet, est vestibulum turpis. In donec, ipsum libero condimentum. Sit praesent in, sed pede, amet et adipiscing. Vestibulum viverra molestie.</p>
                                                        <p><small>December 12, 2013 - Mr. Doe</small></p>
                                                    </a><!-- /panel-body -->
                                                    <div class="panel-footer clearfix">
                                                        <div class="btn-group btn-group-sm pull-right">
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-eye-outline"></i> 3.233
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-pricetag-outline"></i> $18
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-cart-outline"></i> 564
                                                            </a>
                                                            <a href="#" class="btn btn-trans">
                                                                <i class="icon ion-ios7-redo-outline"></i> Details
                                                            </a>
                                                        </div>
                                                    </div><!-- /panel-footer -->
                                                </div><!-- /panel -->
                                            </div><!-- /magic-layout -->
                                        </div><!-- /items-search -->


                                        <div class="tab-pane fade" id="users-search">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar1.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Nathan Murphy
                                                                    <small> @nathan join at Dec 12, 2013</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border"></span> #HTML5</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #CSS3</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-success"></span> #Javascript</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-warning"></span> #Photoshop</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->

                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar2.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Maria Murray
                                                                    <small>@maria join at Jan 8, 2012</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #PHP</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-danger"></span> #Ruby</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-warning"></span> #Laravel</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-success"></span> #MySql</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->
                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar3.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Steven Ramos
                                                                    <small> @stevenramos join at Dec 12, 2013</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-warning"></span> #Photoshop</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border"></span> #HTML5</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #CSS3</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->

                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar4.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Alan Hansen
                                                                    <small>@ahansen join at Jan 1, 2014</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-warning"></span> #Laravel</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #PHP</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-danger"></span> #Ruby</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-success"></span> #MySql</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->
                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar5.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Jeremy Stone
                                                                    <small> @jstone join at Oct 22, 2013</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-success"></span> #Javascript</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border"></span> #Node</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #jQuery</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->

                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar6.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Frank Montgomery
                                                                    <small>@montgomery join at Feb 14, 2012</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-danger"></span> #Ruby</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #PHP</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-success"></span> #MySql</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->
                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar11.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Denise Hill
                                                                    <small> @dhill join at Dec 23, 2013</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #Illustrator</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-warning"></span> #Photoshop</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->

                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <div class="panel-body-heading bordered">
                                                                <div class="pb-object pb-object-circle">
                                                                    <img src="assets/app/img/avatar8.png" alt="">
                                                                </div><!-- /pb-object -->
                                                                <h3 class="pb-title">
                                                                    Michelle Reed
                                                                    <small>@reedmichelle join at Jan 18, 2011</small>
                                                                </h3><!-- /pb-title -->
                                                            </div><!-- /panel-body-heading -->
                                                            <div class="panel-tags">
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-success"></span> #MySql</a>
                                                                <a href="#" class="panel-tag-item"><span class="pt-border bg-wisteria"></span> #Ruby</a>
                                                            </div>
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel -->
                                                </div><!-- /cols -->
                                            </div><!-- /row -->
                                        </div><!-- /users-search -->
                                    </div><!-- /tab-content -->

                                    <div class="search-pagination">
                                        <ul class="pagination pagination-sm">
                                            <li><a href="#">Previous</a></li>
                                            <li><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div><!-- /search-pagination -->
                                </div><!-- /panel-body -->
                            </div><!-- /search-result panel -->
                            
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
    
    <!-- theme app main.js -->
    <script src="assets/app/js/main.js"></script>
  </body>
</html>