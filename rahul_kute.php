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
                <h1 class="text-uppercase">Care, Courage and Compassion</h1>
                
            </div>
        </div>
    </div>
</section>

<section class="about page section_padding_top_100 section_padding_bottom_65 ls">
	<div class="container">
	    <div class="row">
	    	<div class="col-xs-12 text-center">
				<h4 class="highlight text-uppercase margin-b0 highlight">know more about our</h4>
				<h2 class="heading-60 xlight margin-t0">Founder and CEO</h2>
	    	</div>
	    </div>
		<div class="row">
			<!--div class="col-md-6">
			    <img src="images/gallery/gallery12.jpg" alt="">
			</div-->
			<div class="col-md-12">
				<div class="abot-cont padding-b60 padding-t60">
				    <p>
					At Elite Care Foundation, we have been providing life-changing addiction recovery services.
We understand the devastating impact that addiction can have — not only on the afflicted
individual, but on friends, family members, and other loved ones and we are committed to
providing the highest quality of care to those who choose to heal with us.
The road to sobriety can be a difficult one. I have already experienced that. It requires complete
focus and your utmost dedication to continue to stay sober. I am so proud of what I have
accomplished during my 9 years of sobriety and hope that my story can inspire you to go to start
your path towards recovery.
                        
                    </p>
				    
				</div>
                
				
			</div>
            
		</div>
        <br>
        <div>
            <p>
            I am proud to lead a team of talented and dedicated professionals who possess a wealth of
knowledge and expertise. I am even more proud of the degree to which these professionals are
focused on providing individuals care in an atmosphere of, dignity, and respect.
This focus on personalized compassionate care is at the core of everything we do at Elite Care
Foundation.			
			</p>
<p>
When you or your loved one enters treatment with us, you will join a nurturing, supportive
community that is dedicated to helping you achieve a happier and healthier life that you
deserve. From the day you enter treatment until long after you have completed the residential
phase of your recovery, you will remain a valued member of the Elite Care family.
Again, thank you for your interest in Elite Care Foundation, and for sharing a few moments with me on this page. To learn more about how our program is uniquely prepared to meet your
needs or the needs of someone you love, please feel free to call us at your convenience, or
complete the short form on our Contact page.

            </p>
<p class="important margin-b25 margin-t40 grey">
From all of us in the Elite Care family, we wish you great success as you walk the path of
recovery.	
</p>
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
