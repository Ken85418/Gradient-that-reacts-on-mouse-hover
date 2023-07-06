<!--?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?-->
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->
<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title>Gradient Research v2</title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/hamburgers.min.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/rslides.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skitter.styles.min.css" type="text/css" media="all"  />
	<link rel="stylesheet" href="css/animate.min.css">

	<!--?php if ( is_user_logged_in() ) { ?-->
		<!-- <style>
			@media only screen
			and (max-width : 800px) {
				nav.toggle_right_style{top:32px;}
			}
			@media only screen
			and (max-width : 782px) {
				nav.toggle_right_style{top:46px;}
			}
		</style> -->
	<!--?php }?-->

	<!--?php wp_head(); ?-->
</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">

<!-- Header -->
<header>
	<div class="wrapper">
		<div class="header_con">
			<div class="main_logo wow fadeIn" data-wow-duration="2000ms">
			  <a href="<?php //echo get_home_url(); ?>"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"/></figure></a>
			</div>

			<div class="head_info">
				<div class="social_media wow fadeInRight" data-wow-duration="2045ms">
					<h2>Stay Connected:</h2>
					<ul>
						<li><a href="https://www.facebook.com" target="_blank"><figure><img src="images/icons/fb-icon.png" alt="facebook"/></figure></a></li>
						<li><a href="https://www.twitter.com" target="_blank"><figure><img src="images/icons/twitter-icon.png" alt="twitter"/></figure></a></li>
					</ul>
				</div>
			</div>
		</div>
	  <div class="clearfix"></div>
	</div>
</header>
<!-- End Header -->

<!-- Navigation -->
<div id="nav_area">
	<div class="nav_toggle_button">
	<div class="logo_wrap"></div>
		<div class="toggle_holder">
			<div class="hamburger hamburger--spin-r">
			  <div class="hamburger-box">
				<div class="hamburger-inner"></div>
			  </div>
			</div>
			<small>Menu</small>
		</div>
	<div class="clearfix"></div>
	</div>

	<div class="toggle_right_nav">
	  <nav class="page_nav">
			<div class="menu_slide_right">
				<a href="<?php //echo get_home_url(); ?>" class="logo_slide_right"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"/></figure></a>
				<div class="toggle_holder">
					<div class="hamburger hamburger--spin-r">
					  <div class="hamburger-box">
						<div class="hamburger-inner"></div>
					  </div>
					</div>
					<small>Close</small>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="wrapper">
				<!--?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?-->
				<ul>
					<li class="current_page_item"><a href="">Home</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Donate</a></li>
					<li><a href="">Programs</a></li>
					<li><a href="">Volunteer</a></li>
					<li><a href="">Sponsorship</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</div>
	  </nav>
		<div class="toggle_nav_close"></div>
	</div>
</div>
<!-- End Navigation -->

<!-- Banner -->
<div id="banner">
	<div class="wrapper">
		<div class="bnr_con">

			<div class="slider">
				<ul class="rslides">
					<li><figure><img src="images/slider/1.jpg" alt="man and woman imagining their dream house"/></figure></li>
					<li><figure><img src="images/slider/2.jpg" alt="hand placing wooden house templates in the table"/></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt="hand placing small house designs in the table"/></figure></li>
				</ul>
				<div class="box_skitter box_skitter_large">
					<ul>
						<li><figure><img src="images/slider/1.jpg" alt="man and woman imagining their dream house" class="random"/></figure></li>
						<li><figure><img src="images/slider/2.jpg" alt="hand placing wooden house templates in the table" class="random"/></figure></li>
						<li><figure><img src="images/slider/3.jpg" alt="hand placing small house designs in the table" class="random"/></figure></li>
					</ul>
				</div>
			</div>

			<div class="bnr_dots">
				<figure class="bnr_dots1"><img src="images/bnr-dots1.png" alt="dots shape"></figure>
				<figure class="bnr_dots2"><img src="images/bnr-dots2.png" alt="dots shape"></figure>
			</div>

			<div class="bnr_info radial_gradient wow fadeIn" data-wow-duration="1955ms">
				<h2 class="heading2">Custom Slogan <span>Goes Here</span></h2>
				<p>You are reading dummy text. This space is reserved for more information.</p>
				<a href="#" class="btnStyle1">Find Out More</a>
			</div>

		</div>
	</div>
</div>
<!-- End Banner -->

<!-- Middle -->
<div id="middle">
	<div class="wrapper">
		<div class="middle_con">

			<div class="middle_boxes">

				<section class="mid_box1 wow fadeInRight" data-wow-duration="2045ms" data-wow-delay="1500ms">
					<figure><img src="images/icons/mid-box1.png" alt="support icon"></figure>
					<div class="mid_box_info">
						<h2 class="heading3">Support <span>Our Cause</span></h2>
						<p>You are reading dummy text as placeholder.</p>
					</div>
					<a href="#" class="btnStyle1">Click Here</a>
				</section>

				<section class="mid_box2 wow fadeInRight" data-wow-duration="2045ms" data-wow-delay="1000ms">
					<figure><img src="images/icons/mid-box2.png" alt="volunteer icon"></figure>
					<div class="mid_box_info">
						<h2 class="heading3">Sign Up As <span>a Volunteer</span></h2>
						<p>You are reading dummy text as placeholder.</p>
					</div>
					<a href="#" class="btnStyle1">Click Here</a>
				</section>

				<section class="mid_box3 wow fadeInRight" data-wow-duration="2045ms" data-wow-delay="500ms">
					<figure><img src="images/icons/mid-box3.png" alt="donation icon"></figure>
					<div class="mid_box_info">
						<h2 class="heading3">Make a <span>Donation</span></h2>
						<p>You are reading dummy text as placeholder.</p>
					</div>
					<a href="#" class="btnStyle1">Click Here</a>
				</section>

				<section class="mid_box4 wow fadeInRight" data-wow-duration="2045ms">
					<figure><img src="images/icons/mid-box4.png" alt="sponsor icon"></figure>
					<div class="mid_box_info">
						<h2 class="heading3">Sign Up As <span>a Sponsor</span></h2>
						<p>You are reading dummy text as placeholder.</p>
					</div>
					<a href="#" class="btnStyle1">Click Here</a>
				</section>

			</div>

		</div>
	</div>
</div>
<!-- End Middle -->

<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="radial_gradient">
				<h1 class="h1_title heading2"><small class="subHead2">Welcome to </small>JK Home of <span>Good Hope</span></h1>
				<p>More will display about he company contents on this website soon. You are reading dummy text reserved as placeholder for the viewer to review. Dummy text for the reader to review. Soon More additional information will be uploaded soon. We are excited to post more contents on the website. This spaces is reserved to display more detailed. </p>
			</main>

			<figure class="main_img"><img src="images/main-img.jpg" alt="different hosue shapes on the table"></figure>

			<div class="main_dots">
				<figure class="main_dots1"><img src="images/main-dots1.png" alt="dots shape"></figure>
				<figure class="main_dots2"><img src="images/main-dots2.png" alt="dots shape"></figure>
			</div>

			<div class="main_info">
				<div class="main_info_con wow fadeIn" data-wow-duration="1955ms">
					<h2>Call or Messages Us today! <span><mark>443-579-6044 </mark> <q>|</q> <a href="mailto:info@samplemail.com">info@samplemail.com</a></span></h2>
				</div>
			</div>
			
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<!-- Bottom -->
<div id="bottom1">
	<div class="wrapper">
		<div class="btm1_con">

			<div class="btm1_info">
				<h2 class="heading2"><small class="subHead2">What We Do </small>Programs We Offer</h2>
				<p>We are excited to post more contents on this website. This space is reserved for more information about the company website.</p>
			</div>

			<div class="btm1_boxes">

				<section class="btm1_box1">
					<figure class="wow fadeIn" data-wow-duration="2045ms" data-wow-delay="1000ms"><img src="images/btm1-box1.jpg" alt="homeless man holding a house shaped cardboard"></figure>
					<div class="btm1_box_con wow fadeInLeft" data-wow-duration="2045ms">
						<div class="btm1_box_info">
							<h2 class="heading3">Housing for <span>Less Fortunate</span></h2>
							<p>These texts are temporary only and will soon be replaced.</p>
						</div>
						<a href="#" class="btnStyle1">Click Here</a>
					</div>
				</section>

				<section class="btm1_box2">
					<figure class="wow fadeIn" data-wow-duration="2045ms" data-wow-delay="1000ms"><img src="images/btm1-box2.jpg" alt="two hands holding a house shape with a family in it"></figure>
					<div class="btm1_box_con wow fadeInRight" data-wow-duration="2045ms">
						<div class="btm1_box_info">
							<h2 class="heading3">View More <span>Programs</span></h2>
							<p>These texts are temporary only and will soon be replaced.</p>
						</div>
						<a href="#" class="btnStyle1">Click Here</a>
					</div>
				</section>

			</div>
		</div>
	</div>
</div>

<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">

			<div class="btm2_dots">
				<figure class="btm2_dots1"><img src="images/btm2-dots1.png" alt="dots shape"></figure>
				<figure class="btm2_dots2"><img src="images/btm2-dots2.png" alt="dots shape"></figure>
			</div>
		
			<div class="btm2_info">
				<h2 class="heading2"><small class="subHead2">Our Commitment </small> Mission Statement</h2>
				<p>Contents are for display purposes only. This space is reserved for more details about the company website. Additional business details will be uploaded on this website soon.</p>
				<a href="#" class="btnStyle1">About Us</a>
			</div>

			<figure class="btm2_img wow fadeIn" data-wow-duration="2045ms"><img src="images/btm2-img.jpg" alt="man holding a house shaped keychain"></figure>
			
		</div>
	</div>
</div>

<div id="bottom3">
	<div class="wrapper">
		<div class="btm3_con">
		
			<div class="btm3_form radial_gradient">
				<div class="btm3_form_info">
					<h2 class="heading2"><small class="subHead2">Reach Out to Us </small>Send Us a Message</h2>
					<p>Words shown on this layout are placeholders. More additional business details.</p>
				</div>

				<form action="#bottom3" method="post" id="submit_formmessage">
					<input class="form_fullname" type="text" name="Full_Name" placeholder="Full Name*" required/>
					<input class="form_email" type="email" name="Email_Address" placeholder="Email Address*" required/>
					<textarea class="form_textarea" name="Question_or_Comment" placeholder="Message(s)"></textarea>
					<!-- <div class="captcha-box"><div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_sitekey; ?>"></div></div> -->
					<button class="form_btn" name="submit_info" type="submit">Submit</button>
				</form>
			</div>
			
		</div>
	</div>
</div>
<!-- End Bottom -->

<!--Footer -->
<footer>
<div class="footer_top">
	<div class="wrapper">
		<div class="footer_top_con">
			<div class="contact_info">
				<div class="contact_info_heading">
					<h2 class="heading2"><small class="subHead2">Get in Touch </small>Contact Details</h2>
				</div>
				<ul class="contact_info_list">
					<li>Address: <address>123 Street Name, Suite B <span>City Name, Maryland 12345</span></address></li>
					<li>Phone Number: <mark>443-579-6044</mark><span>Email: <a href="mailto:info@samplemail.com">info@samplemail.com</a></span></li>
				</ul>
			</div>

			<div class="footer_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1592031.575326258!2d-78.55608677465898!3d38.79954667226164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64debe9f190df%3A0xf2af37657655f6b1!2sMaryland%2C%20USA!5e0!3m2!1sen!2sph!4v1688026197942!5m2!1sen!2sph" width="489" height="327" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="footer_logo">
				<a href="<?php //echo get_home_url(); ?>"><figure><img src="images/footer-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure></a>
			</div>
		</div>
	</div>
</div>

<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="footer_nav">
					<ul>
						<li class="current_page_item"><a href="index.php">Home</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Donate</a></li>
						<li><a href="">Programs</a></li>
						<li><a href="">Volunteer</a></li>
						<li><a href="">Sponsorship</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</div>

				<div class="copyright">
				  &copy; Copyright 2023
						<?php
						$start_year = '2023';
						$current_year = date('Y');
						$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
						echo $copyright;
						?>
				  <span class="footer_comp"><?php //echo get_bloginfo('name');?></span>
				  <a class="copyrigh_text">Designed by</a> <a href="http://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
				</div>
			</div>
		</div>
</div>
</footer>

	<span class="back_top"></span>

  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->

  <!--?php get_includes('ie');?-->

  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="js/jquery-3.5.0.min.js"></script>
  <script src="js/jquery-migrate-1.4.1.min.js"></script>

  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="js/calcheight.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.skitter.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/wow.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--?php wp_footer(); ?-->
</body>
</html>
<!-- End Footer -->
