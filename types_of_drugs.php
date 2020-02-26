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
                <h1 class="text-uppercase">Types of Drugs</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">
                            Abused in India
                        </a>
                    </li>
                    
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
                                    <i class="rt-icon2-waves-outline"></i> Opioids
                                </a>
                            </li>
                            <li>
                                <a href="#vertical-tab2" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-home-outline"></i> Tobacco
                                </a>
                            </li>
                            <li>
                                <a href="#vertical-tab3" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-plug"></i> Alcohol
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-offset-1 col-lg-8 col-md-8">
                        <div class="tab-content padding_0 no-border">
                            <div class="tab-pane fade in active" id="vertical-tab1">

                                <h1 class="text-uppercase xlight">Opioids</h1>
                                <img src="images/service-details.jpg" alt>
                                <div class="row">
								
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Persistent desire</strong></p>
                                        <p>Persistent desire or unsuccessful efforts to cut down or control opioid use</p>
										<p class="margin-t20 margin-b0 grey"><strong>Craving</strong></p>
                                        <p>Craving, or a strong desire or urge to use opioids</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Tolerance </strong></p>
                                        <p>Tolerance (i.e., need for increased amounts or diminished effect with continued use of the same amount)
</p>
<p class="margin-t20 margin-b0 grey"><strong>Reduced Activities </strong></p>
                                        <p>Giving up or reducing activities because of opioid use.</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                

                            </div>

                            <div class="tab-pane fade in active" id="vertical-tab2">
							
                               <h1 class="text-uppercase xlight">Tobacco</h1>
                                <img src="images/service-details.jpg" alt>
                                <div class="row">
								
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Must smoke or chew</strong></p>
                                        <p>must smoke or chew after every meal or after long periods of time without using, such as after a movie or work meeting</p>
										<p class="margin-t20 margin-b0 grey"><strong>Won’t attend events</strong></p>
                                        <p>gives up activities or won’t attend events where smoking or tobacco use is not allowed</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Has withdrawal symptoms</strong></p>
                                        <p>has withdrawal symptoms when they try to quit (shaky hands, sweating, irritability, or rapid heart rate).</p>
										<p class="margin-t20 margin-b0 grey"><strong>Health problems </strong></p>
                                        <p>continues to smoke despite health problems </p>
										
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
 							
</div>

                            <div class="tab-pane fade in active" id="vertical-tab3">
							                               <h1 class="text-uppercase xlight">Alcohol</h1>
                                <img src="images/service-details.jpg" alt>
                                <div class="row">
								
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Temporary Blackouts </strong></p>
                                        <p>Experiencing temporary blackouts or short-term memory loss</p>
										<p class="margin-t20 margin-b0 grey"><strong>Extreme mood swings</strong></p>
                                        <p>Exhibiting signs of irritability and extreme mood swings</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Making excuses for drinking </strong></p>
                                        <p>Making excuses for drinking such as to relax, deal with stress or feel normal</p>
<p class="margin-t20 margin-b0 grey"><strong>Becoming isolated </strong></p>
                                        <p>Becoming isolated and distant from friends and family members.</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
 
							</div>

 
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php 
include("includes/footer.php");
include("includes/copyright.php");
?>


</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->

        <script src="js/compressed.js"></script>
        <script src="js/switcher.js"></script>
        <script src="js/main.js"></script>

        <script src="js/jquery-ui.js"></script>

    </body>
</html>