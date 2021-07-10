<!DOCTYPE HTML>
<html class="particles_effect" lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>HELAMID</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114.png">
	<link href="css/uikit.css" rel="stylesheet" media="all">
	<link href="css/styles.css" rel="stylesheet" media="all">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201766682-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201766682-1');
</script>
</head>
<body data-ng-app="myPage" data-ng-controller="myPageCtrl" onClick="hidNav(event)">

<!-- Spinner -->
<div class="spinner">
	<div class="spinner_wrapper">
		<div class="spinner_folding_cube">
			<div class="spinner_cube1 spinner_cube"></div>
			<div class="spinner_cube2 spinner_cube"></div>
			<div class="spinner_cube4 spinner_cube"></div>
			<div class="spinner_cube3 spinner_cube"></div>
		</div>
	</div>
</div>

<!-- Page wrapper -->
<div class="wrapper">

<!-- Header -->
<header class="uk-small-hidden header">
	<nav class="uk-navbar header-nav">
		<div class="uk-container uk-container-center" style="display:flex;justify-content:center">
			<a class="uk-navbar-brand logo_link" href="index.html">
				<img class="uk-responsive-height logo" src="./images/logo/helamid-web-logo.png" alt="">
			</a>
			<!-- <div class="uk-navbar-flip uk-visible-large">
				<ul class="uk-navbar-nav header-nav-list">
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_features header_nav_list_item_link" href="#">WHO WE ARE</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_offer header_nav_list_item_link" href="#">OUR PARTNERS</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_pricing header_nav_list_item_link" href="#">WHAT WE DO</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_clients header_nav_list_item_link" href="#">OUR CLIENTS</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_map header_nav_list_item_link" href="#">CONTACT US</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_facts header_nav_list_item_link" href="#">REVIEW</a>
					</li>
				</ul>
			</div> -->
			<!-- <div class="uk-navbar-flip uk-hidden-large header_navbar_mobile_block">
				<div data-ng-click="toggleMobileNav($event)" onClick="openHam()" class="uk-navbar-toggle header_navbar_mobile"></div>
			</div> -->
		</div>
	</nav>
</header>
<!-- Contact -->
<section class="contact grey_overlay section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-position-relative uk-text-contrast animated section_title contact_title">Get in touch</h3>
		<h4 class="uk-h4 uk-text-contrast uk-margin-large-bottom animated section_subtitle">If you have any questions, then please fill our contact form to get actual information about our project</h4>

		<!-- MESSAGE FORM -->
		<form data-ng-submit="contactForm($event);" class="uk-form animated form_send_message" autocomplete="off" action="php/sendmail.php" method="POST">
			<div class="uk-grid uk-grid-small uk-container-center uk-width-medium-2-3 uk-width-large-1-2 uk-margin-bottom">
				<div class="uk-width-small-1-2 uk-margin-bottom">
					<input name="name" class="uk-width-1-1 uk-text-contrast form_input" type="text" placeholder="Name">
				</div>
				<div class="uk-width-small-1-2 uk-margin-bottom">
					<input name="email" class="uk-width-1-1 uk-text-contrast form_input" type="text" placeholder="E-mail">
				</div>
				<div class="uk-margin-bottom uk-width-1-1">
					<textarea name="message" class="uk-width-1-1 uk-text-contrast form_textarea" placeholder="Message"></textarea>
				</div>
				<div class="uk-margin-bottom uk-width-1-1">
					<button class="uk-button button_custom_green uk-width-1-1 form_button" type="submit">Send message</button>
				</div>
			</div>

			<!-- IF MAIL SENT SUCCESSFULLY -->
			<?php
				if(isset($_GET['suc'])){
			?>
					<div class="success">Your message has been sent successfully.</div>
					<div class="success_response"></div>
				<?php
				}
			?>
			

			<!-- IF MAIL SENDING UNSUCCESSFULL -->
			<?php
				if(isset($_GET['err'])){
			?>
					<div class="error">E-mail must be valid and message must be longer than 1 character.</div>
					<div class="error_response"></div>
				<?php
				}
			?>
		</form>
	</div>
</section>


<!-- Footer -->
<footer class="footer">
	<div class="uk-container uk-container-center uk-text-center">
		<ul class="uk-list social_list">
			<li class="social_list_item">
				<a class="uk-icon-facebook social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-twitter social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-google-plus social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-linkedin social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-youtube social_list_item_link" href="#"></a>
			</li>
		</ul>
		<div class="footer_message">© Startup. All Rights Reserved</div>
	</div>
</footer>

<!-- Scroll arrow -->
<div data-ng-click="scrollTop()" class="scroll_top"></div>

</div>

<!-- Mobile menu -->
<div id="mobile_nav" class="uk-offcanvas">
	<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
		<ul class="uk-nav uk-nav-offcanvas">
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_features" href="#">HOW WE WORK</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_offer" href="#">OUR PARTNERS</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_pricing" href="#">WHAT WE DO</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_clients" href="#">OUR CLIENTS</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_map" href="#">CONTACT US</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_facts" href="#">REVIEW</a>
			</li>
		</ul>
	</div>
</div>

<!-- Modal subscribe window -->
<div id="modal_subscribe" class="uk-modal subscribe_window">
    <div class="uk-modal-dialog uk-text-center uk-border-rounded">
		<h4 class="uk-h4 uk-text-contrast subscribe_window_title">Subscribe to our newsletter</h4>
		<!-- NEWSLETTER FORM -->
		<form data-ng-submit="subLetterForm($event);" class="uk-form form_sign_in" autocomplete="off">
			<div class="uk-grid uk-grid-collapse uk-container-center uk-width-medium-3-4">
				<div class="uk-width-medium-3-4 uk-margin-bottom">
					<input name="email" class="uk-width-1-1 uk-text-contrast form_input" type="email" placeholder="Enter your e-mail">
				</div>
				<div class="uk-width-medium-1-4 uk-margin-bottom">
					<button class="uk-width-1-1 uk-button button_custom_green form_button" type="submit">Subscribe</button>
				</div>
			</div>
			<div class="response_wrapper">
				<!-- IF MAIL SENT SUCCESSFULLY -->
				<div class="success">E-mail has been added successfully.</div>
				<div class="success_response"></div>

				<!-- IF MAIL SENDING UNSUCCESSFULL -->
				<div class="error">E-mail must be valid and message must be longer than 1 character.</div>
				<div class="error_response"></div>
			</div>
		</form>
        <a class="uk-modal-close uk-close uk-border-circle subscribe_window_close"></a>
    </div>
</div>


<script>
	function openHam() {
		document.querySelector('#mobile_nav').classList.add('uk-active');
	}
	function hidNav(){
		if(!event.target.className.match('uk-navbar-toggle header_navbar_mobile')){
			if(document.querySelector('#mobile_nav').className.match('uk-active')){
				document.querySelector('#mobile_nav').classList.remove('uk-active');
			}
		}
	}
</script>

<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/ngTouch.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj7cR7j4zbZLwiKDV35BJ6VSASioV0n_8"></script>
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/slideshow.min.js"></script>
<script type="text/javascript" src="js/slideshow-fx.min.js"></script>
<script type="text/javascript" src="js/slider.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/countUp.js"></script>
<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/scripts.ang.js"></script>
</body>
</html>