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
					</li><li>
			If you are unable to call Elite Care Foundation, please use the below form to submit a
confidential message to our admissions staff. We will get back to you as soon as possible.
</li><li>
If you are in a state of crisis or need immediate help for any reason, please pause filling out this
form and call <strong>102</strong>.
</li><li>
If you feel that you are a danger to yourself, please pause filling out this form and contact the
National Suicide Prevention Lifeline at <strong>022 2754 6669</strong>.
</li><li>
If you are unable to call Elite Care Foundation at <strong>(+91) 81692 40736/75064 13513 </strong>please use the form
provided below to submit a confidential message to our admissions staff. We will respond as
soon as possible.
</li><li>
Please note that by leaving your contact information in the space provided, you consent to allow
Elite Care Foundation to use this information to contact you. 
</li>
<li>
Any information provided will
remain confidential. Please note that by choosing to not leave your information, the staff at Elite
Care Foundation will not contact you.
</li>

</ul>
<small>Disclaimer*: Elite Care Foundation disclaims any liability, loss, or risk sustained directly or
indirectly as a consequence of any actions you take with this form.</small>
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
    <section class="contacts-form-sec ls">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <form class="contact-form" method="post" action="/">
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Adress">
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                            <div class="form-control-group">
                                <input type="text" aria-required="true" class="form-control" value="" name="date" id="datepicker" placeholder="Date">
                            </div>
                            <div class="select-group with_background time-select">
                                <select aria-required="true" id="time" name="time">
                                    <option value="" disabled selected>Time</option>
                                    <option value="12:00 AM">12:00 AM</option>
                                    <option value="12:30 AM">12:30 AM</option>
                                    <option value="1:00 AM">1:00 AM</option>
                                    <option value="1:30 AM">1:30 AM</option>
                                    <option value="2:00 AM">2:00 AM</option>
                                    <option value="2:30 AM">2:30 AM</option>
                                    <option value="3:00 AM">3:00 AM</option>
                                    <option value="3:30 AM">3:30 AM</option>
                                    <option value="4:00 AM">4:00 AM</option>
                                    <option value="4:30 AM">4:30 AM</option>
                                    <option value="5:00 AM">5:00 AM</option>
                                    <option value="5:30 AM">5:30 AM</option>
                                    <option value="6:00 AM">6:00 AM</option>
                                    <option value="6:30 AM">6:30 AM</option>
                                    <option value="7:00 AM">7:00 AM</option>
                                    <option value="7:30 AM">7:30 AM</option>
                                    <option value="8:00 AM">8:00 AM</option>
                                    <option value="8:30 AM">8:30 AM</option>
                                    <option value="9:00 AM">9:00 AM</option>
                                    <option value="9:30 AM">9:30 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="10:30 AM">10:30 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="11:30 AM">11:30 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="12:30 PM">12:30 PM</option>
                                    <option value="1:00 PM">1:00 PM</option>
                                    <option value="1:30 PM">1:30 PM</option>
                                    <option value="2:00 PM">2:00 PM</option>
                                    <option value="2:30 PM">2:30 PM</option>
                                    <option value="3:00 PM">3:00 PM</option>
                                    <option value="3:30 PM">3:30 PM</option>
                                    <option value="4:00 PM">4:00 PM</option>
                                    <option value="4:30 PM">4:30 PM</option>
                                    <option value="5:00 PM">5:00 PM</option>
                                    <option value="5:30 PM">5:30 PM</option>
                                    <option value="6:00 PM">6:00 PM</option>
                                    <option value="6:30 PM">6:30 PM</option>
                                    <option value="7:00 PM">7:00 PM</option>
                                    <option value="7:30 PM">7:30 PM</option>
                                    <option value="8:00 PM">8:00 PM</option>
                                    <option value="8:30 PM">8:30 PM</option>
                                    <option value="9:00 PM">9:00 PM</option>
                                    <option value="9:30 PM">9:30 PM</option>
                                    <option value="10:00 PM">10:00 PM</option>
                                    <option value="10:30 PM">10:30 PM</option>
                                    <option value="11:00 PM">11:00 PM</option>
                                    <option value="11:30 PM">11:30 PM</option>
                                </select>
                                <i class="rt-icon2-time2"></i>
                            </div>

                            <textarea rows="6" cols="45" name="message" id="message" placeholder="Additional Info"></textarea>
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button inverse">Submit</button>
                        </form>
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