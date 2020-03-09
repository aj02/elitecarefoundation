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
                <h1 class="text-uppercase">Therapy</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">
                            At Elite Care Foundation
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
                                <a href="#rehab-tab" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-waves-outline"></i> Residential Rehab
                                </a>
                            </li>
                            <li>
                                <a href="#cbt-tab" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-waves-outline"></i> CBT
                                </a>
                            </li>
                            <li>
                                <a href="#medication-tab" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-home-outline"></i> Medication
                                </a>
                            </li>
                            <li>
                                <a href="#detox-tab" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-plug"></i> detox program
                                </a>
                            </li>
                            <li>
                                <a href="#yoga-tab" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-brush"></i> yoga
                                </a>
                            </li>
                            <li>
                                <a href="#post-rehab-tab" role="tab" data-toggle="tab">
                                    <i class="rt-icon2-puzzle-outline"></i> Post rehab tools
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-offset-1 col-lg-8 col-md-8">
                        <div class="tab-content padding_0 no-border">
							<div class="tab-pane fade in active" id="rehab-tab">

                                <h1 class="text-uppercase xlight">Residential Rehab</h1>
                                <img src="images/oie_D2cvv4YI1kkq.png" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Cognitive Behavioral Therapy (CBT)</strong></p>
                                        <p>which helps patients recognize, avoid, and cope
with situations in which they are most likely to use drugs.</p>
										<p class="margin-t20 margin-b0 grey"><strong>Motivational Incentives (contingency management)</strong></p>
                                        <p>which uses positive reinforcement to encourage abstinence from drugs.</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Multidimensional Family Therapy (MFT)</strong></p>
                                        <p>(MFT):developed for adolescents with drug abuse
problems as well as their families—which addresses a range of influences on their drug
abuse patterns and is designed to improve overall family functioning motivational
interviewing, which makes the most of people&#39;s readiness to change their behavior and
enter treatment</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
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
                                                    Frequently Asked Questions
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
                            <div class="tab-pane fade in" id="cbt-tab">

                                <h1 class="text-uppercase xlight">Behavioral Counseling</h1>
                                <img src="images/oie_dI1bY5viENYK.png" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Cognitive Behavioral Therapy (CBT)</strong></p>
                                        <p>which helps patients recognize, avoid, and cope
with situations in which they are most likely to use drugs.</p>
										<p class="margin-t20 margin-b0 grey"><strong>Motivational Incentives (contingency management)</strong></p>
                                        <p>which uses positive reinforcement to encourage abstinence from drugs.</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Multidimensional Family Therapy (MFT)</strong></p>
                                        <p>(MFT):developed for adolescents with drug abuse
problems as well as their families—which addresses a range of influences on their drug
abuse patterns and is designed to improve overall family functioning motivational
interviewing, which makes the most of people&#39;s readiness to change their behavior and
enter treatment</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
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
                                                    Frequently Asked Questions
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

                            <div class="tab-pane fade in" id="medication-tab">

                                <h1 class="text-uppercase xlight">Medication</h1>
                                <img src="images/oie_coNadmIougkp.png" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Cognitive Behavioral Therapy (CBT)</strong></p>
                                        <p>which helps patients recognize, avoid, and cope
with situations in which they are most likely to use drugs.</p>
										<p class="margin-t20 margin-b0 grey"><strong>Motivational Incentives (contingency management)</strong></p>
                                        <p>which uses positive reinforcement to encourage abstinence from drugs.</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Multidimensional Family Therapy (MFT)</strong></p>
                                        <p>(MFT):developed for adolescents with drug abuse
problems as well as their families—which addresses a range of influences on their drug
abuse patterns and is designed to improve overall family functioning motivational
interviewing, which makes the most of people&#39;s readiness to change their behavior and
enter treatment</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
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
                                                    Frequently Asked Questions
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
							<div class="tab-pane fade in" id="detox-tab">

                                <h1 class="text-uppercase xlight">Detox</h1>
                                <img src="images/oie_hr6HjyKy79aa.png" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Cognitive Behavioral Therapy (CBT)</strong></p>
                                        <p>which helps patients recognize, avoid, and cope
with situations in which they are most likely to use drugs.</p>
										<p class="margin-t20 margin-b0 grey"><strong>Motivational Incentives (contingency management)</strong></p>
                                        <p>which uses positive reinforcement to encourage abstinence from drugs.</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Multidimensional Family Therapy (MFT)</strong></p>
                                        <p>(MFT):developed for adolescents with drug abuse
problems as well as their families—which addresses a range of influences on their drug
abuse patterns and is designed to improve overall family functioning motivational
interviewing, which makes the most of people&#39;s readiness to change their behavior and
enter treatment</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
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
                                                    Frequently Asked Questions
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
							<div class="tab-pane fade in" id="yoga-tab">

                                <h1 class="text-uppercase xlight">Yoga</h1>
                                <img src="images/oie_DQQV5DCLqhJ4.png" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Cognitive Behavioral Therapy (CBT)</strong></p>
                                        <p>which helps patients recognize, avoid, and cope
with situations in which they are most likely to use drugs.</p>
										<p class="margin-t20 margin-b0 grey"><strong>Motivational Incentives (contingency management)</strong></p>
                                        <p>which uses positive reinforcement to encourage abstinence from drugs.</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Multidimensional Family Therapy (MFT)</strong></p>
                                        <p>(MFT):developed for adolescents with drug abuse
problems as well as their families—which addresses a range of influences on their drug
abuse patterns and is designed to improve overall family functioning motivational
interviewing, which makes the most of people&#39;s readiness to change their behavior and
enter treatment</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
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
                                                    Frequently Asked Questions
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
							<div class="tab-pane fade in" id="post-rehab-tab">

                                <h1 class="text-uppercase xlight">Post Rehab</h1>
                                <img src="images/oie_qxpQgwHbCFbt.png" alt>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Cognitive Behavioral Therapy (CBT)</strong></p>
                                        <p>which helps patients recognize, avoid, and cope
with situations in which they are most likely to use drugs.</p>
										<p class="margin-t20 margin-b0 grey"><strong>Motivational Incentives (contingency management)</strong></p>
                                        <p>which uses positive reinforcement to encourage abstinence from drugs.</p>
                                    
										
                                        </div>
                                    <div class="col-sm-6">
                                        <p class="margin-t20 margin-b0 grey"><strong>Multidimensional Family Therapy (MFT)</strong></p>
                                        <p>(MFT):developed for adolescents with drug abuse
problems as well as their families—which addresses a range of influences on their drug
abuse patterns and is designed to improve overall family functioning motivational
interviewing, which makes the most of people&#39;s readiness to change their behavior and
enter treatment</p>
									</div>
                                    <div class="col-sm-6"></div>
                                </div>
                                <div class="panel-group" id="accordion3">
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
                                                    Frequently Asked Questions
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