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


    <section class="contacts ls">
        <div class="container padding-b60 padding-t120">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h4 class="highlight text-uppercase margin-b5 margin-t-5">Feel free to</h4>
                    <h2 class="heading-60 xlight margin-t0 text-uppercase margin-b35">Contact Us</h2>
                </div>
            </div>
<div class="col-md-12 col-sm-12">
                <div class="teaser text-center with_border">
                    <div class="teaser_icon grey size_big main_bg_color">
                        <i class="rt-icon2-heart"></i>
                    </div>
                    <h4>Important Note:</h4>
                    <p>
					
			<ul class="text-left">
				<li>
				If you are in a state of crisis or need immediate help for any reason, please pause filling out this
				form and call <strong>102</strong>.
				</li>
				<li>
				If you feel that you are a danger to yourself, please pause filling out this form and contact the
				National Suicide Prevention Lifeline at <strong>022 2754 6669</strong>.
				</li>
				<li>
				If you are unable to call Elite Care Foundation at <strong>(+91) 81692 40736/75064 13513 </strong>please use Email Id to send a confidential message to our admissions staff. We will respond as
				soon as possible.
				</li>

			</ul>
<!--small>Disclaimer*: Elite Care Foundation disclaims any liability, loss, or risk sustained directly or
indirectly as a consequence of any actions you take with this form.</small-->
					</p>
                </div>
            </div>

			
            <div class="row text-center">
                <div class="col-md-4 padding-v5">
                    <span class="rt-icon2-location-outline highlight"></span>
                    <p>Dalal Farm House, opp. Bharat Gas, Mhaskal Rd, Near Ganesh Temple, Titwala, Maharashtra 421605</p>
                </div>
                <div class="col-md-4 with_border padding-v5">
                    <span class="rt-icon2-phone-outline highlight"></span>
                    <p><strong>(+91) 81692 40736/75064 13513</strong></p>
                </div>
                <div class="col-md-4 padding-v5">
                    <span class="rt-icon2-mail2 highlight"></span>
                    <a href="#">rk17313@gmail.com</a>
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
        <!--script src="js/switcher.js"></script-->
        <script src="js/main.js"></script>

        <script src="js/jquery-ui.js"></script>

    </body>
</html>
