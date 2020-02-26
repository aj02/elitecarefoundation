<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]--> <html class="no-js"> <!--<![endif]-->
<?php 
include("includes/head.php");
?>

<body>

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <div class="widget widget_search">
        <form method="get" class="searchform form-inline" action="/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
<div id="box_wrapper">

<!-- template sections -->

<?php 
include("includes/header.php");
?>

<section class="page_breadcrumbs section_padding_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-uppercase">Service Details</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">
                            HomePage
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Service Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>

        <section class="service-details section_padding_v100 ls ms">
            <div class="container">
                <div class="row vertical-tabs">
                    <div class="col-lg-3 col-md-4">
                        <!-- Nav tabs -->
                        <ul class="nav" role="tablist">
                            <li class="active">
                                <a href="#vertical-tab1" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-waves-outline"></i> pediatric
                                </a>
                            </li>
                            <li>
                                <a href="#vertical-tab2" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-home-outline"></i> massage therapy
                                </a>
                            </li>
                            <li>
                                <a href="#vertical-tab3" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-plug"></i> detox program
                                </a>
                            </li>
                            <li>
                                <a href="#vertical-tab4" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-brush"></i> fitness program
                                </a>
                            </li>
                            <li>
                                <a href="#vertical-tab5" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-puzzle-outline"></i> relax therapy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-offset-1 col-lg-8 col-md-8">
                        <div class="tab-content padding_0 no-border">
                            <div class="tab-pane fade in active" id="vertical-tab1">

                                <h1 class="text-uppercase xlight">PEDIATRIC SERVICES</h1>
                                <img src="images/service-details.jpg" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Child Psychology</strong></p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
                                        <p class="margin-t20 margin-b0 grey"><strong>Appointment Schedules</strong></p>
                                        <p>Fabore et dolore magna aliquyam erat diam voluptua. At </p>
                                        <p class="margin-t20 margin-b0 grey"><strong>Raising Healthy Children</strong></p>
                                        <p>Elitr sed diam nonumy eirmod tempor invidunt ut labore</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Raising Healthy Children</strong></p>
                                        <p>Elitr sed diam nonumy eirmod tempor invidunt ut labore</p>
                                        <p class="margin-t20 margin-b0 grey"><strong>Child Psychology</strong></p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</p>
                                        <p class="margin-t20 margin-b0 grey"><strong>Appointment Schedules</strong></p>
                                        <p>Fabore et dolore magna aliquyam erat diam voluptua. At</p>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse11" class="collapsed">
                                                    Pricing
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse12" class="collapsed">
                                                    Gallery
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse12" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse13" class="collapsed">
                                                    Asked Questions
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </div>

                            <div class="tab-pane fade in active" id="vertical-tab2"></div>

                            <div class="tab-pane fade in active" id="vertical-tab3"></div>

                            <div class="tab-pane fade in active" id="vertical-tab4"></div>

                            <div class="tab-pane fade in active" id="vertical-tab5"></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

<footer class="page_footer ls">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="open-hours">
                    <h3 class="widget-title">Open Hours</h3>
                    <div>Monday - Friday <span>9:00 - 17:00</span></div>
                    <div>Saturday <span>11:00 - 15:00</span></div>
                    <div>Sunday <span>Closed</span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_flickr"> 
                    <h3 class="widget-title">Widget Flickr</h3>
                    <ul id="flickr"></ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_mailchimp">
		    
		    <h3 class="widget-title">Newaletter</h3>
            <form class="signup form-inline" action="/" method="get">
                <div class="form-group with_border">
                    <input name="email" type="email" class="mailchimp_email form-control" placeholder="Email">
                </div>
                <button type="submit" class="theme_button rt-icon2-pen2 invertlink small_button"></button>
                <div class="response"></div>
            </form>
            <p>Subscribe to our latest news to be updated, we promise not to spam!</p>
		    
		</div>
            </div>
        </div>
    </div>
    <img src="images/logo.png" alt="Chiroplastic logo" class="logo-footer site-logo">
</footer>

<section class="page_copyright ls">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>&copy; Copyright 2016 by <a href="#">MW Templates</a>. All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>

</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->

        <script src="js/compressed.js"></script>
        <script src="js/switcher.js"></script>
        <script src="js/main.js"></script>

        <script src="js/jquery-ui.js"></script>

    </body>
</html>