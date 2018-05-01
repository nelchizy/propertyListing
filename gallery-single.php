<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from steelthemes.com/demo/html/real-estate/gallery-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2018 16:00:57 GMT -->
<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> Real Estate - Responsive HTML5 Template </title>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/fav-icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">




		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="css/custom/style.css">
		<!-- Color css -->
		<link rel="stylesheet" id="jssDefault" href="css/custom/theme-default.css">
		<link rel="stylesheet" type="text/css" href="css/responsive/responsive.css">


		<!-- Fixing Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/html5shiv.js"></script>
		<![endif]-->


	</head>
	<body class="gallery_single">

		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


	<div class="boxed_wrapper">

        <!-- ==================== Style Switcher ==================== -->
        
		<div class="switcher">

			<!-- Switcher button -->
			<div class="switch_btn">
				<button><i class="fa fa-cog fa-spin"></i></button>
			</div>

			<!-- switcher body -->
			<div class="switch_menu">
				<h5 class="title">Style Switcher</h5>

					<!-- Theme layout -->
					<div class="switch_body">
						<div class="switcher_container">
							<h5>Layout Style</h5>
							<div class="box" id="full_width">
								<div></div>
								<p>Fullwidth</p>
							</div>
							<div class="box" id="boxed">
								<div><span></span></div>
								<p>Boxed</p>
							</div>
						</div>
					</div> <!-- /switch_body -->

					<!-- Switch Navigation menu Sticky/Static -->
					<div class="switch_navigation">
						<div class="switcher_container">
							<h5>Navigation</h5>
							<p>Static</p>
							<div class="onoffswitch" id="sticky_switch">
							    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
							    <label class="onoffswitch-label" for="myonoffswitch"></label>
							</div>
							<p>Sticky</p>
						</div>
					</div> <!-- /switch_navigation -->


					
					<!-- Theme color changer -->
					<div class="switcher_container">
						<h5>Primary Color Skins</h5>
						<ul id="styleOptions" title="Switch Color">
							<li>
								<a href="javascript: void(0)" data-theme="theme-default" class="color1">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0)" data-theme="theme-2" class="color2">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0)" data-theme="theme-3" class="color3">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0)" data-theme="theme-4" class="color4">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
						</ul>
					</div>
					
			</div> <!-- /switch_menu -->
		</div>

		<!-- ==================== Style Switcher ==================== -->
		
		

		<!-- Top Header ___________________________________ -->

		<div id="top_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 top_header_left">
						<a href="login.html" class="login"><i class="fa fa-download fa-rotate-270"></i> Login / Register</a>
						<a href="mailto:Realestate@Steelthemes.com" class="mail"><i class="fa fa-envelope-o"></i> Realestate@Steelthemes.com</a>
					</div> <!-- End .top_header_left -->

					<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 top_header_right">
						<div class="dropdown">
							<button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true">
								 $ &nbsp;Dollar
								<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							  	<li>₹ &nbsp;Rupi</li>
								<li>€ &nbsp;EURO</li>
								<li>¥ &nbsp;YEN</li>
								<li>$ &nbsp;Dollar</li>
							</ul>
						</div> <!-- End .dropdown -->

						<div id="polyglotLanguageSwitcher">
							<form action="#">
								<select id="polyglot-language-options">
									<option id="en" value="en" selected>English</option>
									<option id="fr" value="fr">French</option>
									<option id="de" value="de">German</option>
									<option id="it" value="it">Italian</option>
									<option id="es" value="es">Spanish</option>
								</select>
							</form>
						</div> <!-- End #polyglotLanguageSwitcher -->

						<a href="#" class="download"><i class="fa fa-download"></i> Download App</a>

						<ul class="icon_header">
							<li class="border_round tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="border_round tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="border_round tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="border_round tran3s tooltip" title="Linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="border_round tran3s tooltip" title="Vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul> <!-- End .icon_header -->

					</div> <!-- End .top_header_right -->
					<div class="clear_fix"></div>
				</div> <!-- End .row -->
			</div> <!-- End .container -->
		</div> <!-- End .top_header -->

		<!-- END Top Header _______________________________ -->


		<!-- Main Menu ____________________________________ -->

		<div class="main_menu fixed_menu" id="menu">
			<div class="container">
				<div class="wrapper">
					<div class="logo_holder">
						<a href="index-1.html"><img src="images/skin/logo.png" alt="Logo" id="logo" class="img-responsive"></a>
					</div> <!-- End .logo_holder -->
					
					<a href="#" class="amenities tran3s">Add Property</a>

					<!-- Menu ______________ -->
					<nav class="navbar navbar-default">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					     </button>
					   </div> <!-- End .navbar-header -->
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       <li class="tran3sL sub-menu-holder dropdown"><a href="index-1.html">Home</a>
					       		<ul class="sub-menu">
					       			<li><a href="index-5.html">Home 01 - Property Slider</a></li>
					       			<li><a href="index-2.html">Home 02 - Google Map</a></li>
					       			<li><a href="index-1.html">Home 03 - Revolution Slider</a></li>
					       			<li><a href="index-4.html">Home 04 - Tranparent Header</a></li>
					       			<li><a href="index-3.html">Home 05 - Simple Header</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Properties</a>
					       		<ul class="sub-menu">
					       			<li><a href="property-listing-without-sidebar.html">Property Listing Fullwidth</a></li>
					       			<li><a href="property-listing-with-sidebar.html">Property Listing With Sidebar</a></li>
					       			<li><a href="property-details.html">Property Detail Page</a></li>
					       			<li class="dropdown"><a href="#">Property Type <i class="fa fa-angle-right"></i></a>
					       				<ul class="sub-sub-menu">
					       					<li><a href="property-type-building-area.html">Property Type - Building Area</a></li>
							       			<li><a href="property-type-apartment.html">Property Type - Apartment</a></li>
							       			<li><a href="property-type-house.html">Property Type - House</a></li>
							       			<li><a href="property-type-condo.html">Property Type - Condo</a></li>
							       			<li><a href="property-type-villa.html">Property Type - Villa</a></li>
							       		</ul>
					       			</li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Agents & Agencies</a>
					       		<ul class="sub-menu">
					       			<li><a href="agent-listing-sidebar.html">Agents Listing With Sidebar</a></li>
					       			<li><a href="agent-listing-without-sidebar.html">Agents listing Without Sidebar</a></li>
					       			<li><a href="agent-details.html">Agent Detail Page</a></li>
					       			<li><a href="agency-listing.html">Agency Listing</a></li>
					       			<li><a href="agency-details.html">Agency Detail Page</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Pages</a>
					       		<ul class="sub-menu">
					       			<li><a href="about-us.html">About Us</a></li>
					       			<li><a href="pricing-plans.html">Pricing Plans</a></li>
					       			<li><a href="testimonial.html">Testimonials</a></li>
					       			<li><a href="faq.html">FAQ’s</a></li>
					       			<li><a href="home-loan.html">Home Loan Calculator</a></li>
					       			<li><a href="login.html">Login / Register</a></li>
					       			<li><a href="vertical-map.html">vertical Map</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">News</a>
					       		<ul class="sub-menu">
					       			<li><a href="blog-grid.html">Blog Grid View</a></li>
					       			<li><a href="blog-list-view.html">Blog list View</a></li>
					       			<li><a href="blog-large.html">Blog Large Image</a></li>
					       			<li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
					       			<li><a href="blog-details-fullwidth.html">Blog Detail Fullwidth</a></li>
					       			<li><a href="blog-details-sidebar.html">Blog Detail With Sidebar</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Gallery</a>
					       		<ul class="sub-menu space_fix">
					       			<li class="dropdown"><a href="#">Gallery Grid View <i class="fa fa-angle-right"></i></a>
					       				<ul class="sub-sub-menu">
							       			<li><a href="gallery-grid-2columns.html">Gallery Grid 2 Columns</a></li>
							       			<li><a href="gallery-grid-3columns.html">Gallery Grid 3 Columns</a></li>
							       			<li><a href="gallery-grid-4columns.html">Gallery Grid 4 Columns</a></li>
							       		</ul>
					       			</li>
					       			<li class="dropdown"><a href="#">Gallery With Text <i class="fa fa-angle-right"></i></a>
										<ul class="sub-sub-menu">
							       			<li><a href="gallery-2columns-with-text.html">Gallery Text 2 Columns</a></li>
							       			<li><a href="gallery-3columns-with-text.html">Gallery Text 3 Columns</a></li>
							       			<li><a href="gallery-4columns-with-text.html">Gallery Text 4 Columns</a></li>
							       		</ul>
					       			</li>
					       			<li class="dropdown"><a href="#">Gallery Fullwidth <i class="fa fa-angle-right"></i></a>
					       				<ul class="sub-sub-menu">
							       			<li><a href="gallery-fullwidth-2columns.html">Gallery Fullwidth 2 Columns</a></li>
							       			<li><a href="gallery-fullwidth-3columns.html">Gallery Fullwidth 3 Columns</a></li>
							       			<li><a href="gallery-fullwidth-4columns.html">Gallery Fullwidth 4 Columns</a></li>
							       		</ul>
					       			</li>
					       			<li><a href="gallery-masonary.html">Gallery Manasory Style</a></li>
					       			<li><a href="gallery-single.html">Gallery Single Page</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL"><a href="contact.html">Contact</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- End .navbar -->
				<!-- End Menu __________ -->
				</div>  <!-- End .wrapper -->
			</div> <!-- End .container -->
		</div> <!-- End .main_menu -->

		<!-- End Main Menu _______________________________ -->


		<!-- Call Us Anytime _____________________________ -->
		<div class="container">
			<div class="call_us">
				<p><span><i class="fa fa-phone"></i></span>Call Us Anytime [at]</p>
				<a href="tel:1-880-002-0088">1-880-002-0088</a>
			</div>
		</div>

		<!-- End Call Us Anytime _________________________ -->



		<!-- Inner Banner ________________________________ -->
		
		<section id="inner_banner">
			<div class="overlay">
				<div class="container">
					<div class="title">
						<h2>Joyal Beach House</h2>
						<ul>
							<li><a href="index-1.html">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
							<li>Gallery Single</li>
						</ul>
					</div> <!-- End .title -->
				</div> <!-- End .container -->
			</div> <!-- End .overlay -->
		</section> <!-- End .inner_banner -->

		<!-- End Inner Banner ____________________________ -->


		<!-- Single gallery page content _________________ -->

		<section class="container single_gallery">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 gallery_details">

					<!-- ________________________ Single gallery Slider ____________ -->

					<div class="slider_wrapper">
						<div class="single-gallery-carousel-content-box owl-carousel owl-theme">
							<div class="item">
								<img src="images/single-gallery/s1.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s2.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s1.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s2.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s1.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s2.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s1.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s2.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s1.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s2.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s1.jpg" alt="Awesome Image"/>
							</div>
							<div class="item">
								<img src="images/single-gallery/s2.jpg" alt="Awesome Image"/>
							</div>
						</div>
						<div style="margin:10px 46px 0 46px;">
							<div class="single-gallery-carousel-thumbnail-box owl-carousel owl-theme">
								<div class="item">
									<img src="images/single-gallery/s1th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s2th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s1th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s2th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s1th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s2th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s1th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s2th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s1th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s2th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s1th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
								<div class="item">
									<img src="images/single-gallery/s2th.jpg" alt="Awesome Image"/>
									<div class="overlay"></div>
								</div>
							</div>
						</div>

						<p>Our Agriculture lab Property consisting of land and the buildings on it, along with its seds natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited seds unit auction, we had approached by Developers to release incremental units to fulfill the demands at a stepped up cut-off price. Shortlisteed bidders will be called for unit allocation on First Come First Serve Basis. There are many variations of passages slightly believable.</p>
					</div> <!-- End .slider_wrapper -->

					<!-- _______________________ Property Address __________________ -->
					<div class="property_address">
						<!-- Main_title2__________ -->
						<div class="main_title2">
							<h2>Property Address</h2>
						</div>
						<!-- End Main_title2______ -->

						<div class="contact_map">
							<div class="google-map-home" id="banner-google-map" data-map-lat="40.925372" data-map-lng="-74.276544" data-icon-path="images/home2/map-icon.png" data-map-title="Awesome Place" data-map-zoom="12" style="height:355px;"></div>
						</div> <!-- End .contact_map -->
						<div class="location">
							<ul>
								<li><span>Address:</span> Joyal Beach House</li>
								<li><span>Area:</span> Church Street</li>
								<li><span>City:</span> Newyork City</li>
								<li><span>Country:</span> The United States of America</li>
								<li><span>Zipcode:</span> 11379</li>
							</ul>
						</div> <!-- End .location -->
					</div> <!-- End .property_address -->

					<!-- __________________ Property Overview _______________ -->
					<div class="property_overview">
						<!-- Main_title2__________ -->
						<div class="main_title2">
							<h2>Property Overview</h2>
						</div>
						<!-- End Main_title2______ -->

						<div class="overview_content">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single_input">
										<span>Property Id</span>
										<input type="text" placeholder="FS 586936" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Property Location</span>
										<input type="text" placeholder="Church Street,Newyork City" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Material</span>
										<input type="text" placeholder="Block" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Floors</span>
										<input type="text" placeholder="3" readonly>
									</div> <!-- End .single_input -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single_input">
										<span>Property Type</span>
										<input type="text" placeholder="Villa" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Property Size</span>
										<input type="text" placeholder="2600 Sq ft" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Rooms</span>
										<input type="text" placeholder="5" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Available From</span>
										<input type="text" placeholder="Now Onwards" readonly>
									</div> <!-- End .single_input -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single_input">
										<span>Year Built</span>
										<input type="text" placeholder="2014-2015" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Property Lot Size</span>
										<input type="text" placeholder="3400 Sq ft" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Bathrooms</span>
										<input type="text" placeholder="3" readonly>
									</div> <!-- End .single_input -->

									<div class="single_input">
										<span>Price</span>
										<input type="text" placeholder="$ 60,00,000" readonly>
									</div> <!-- End .single_input -->
								</div>
							</div>
						</div> <!-- End .overview_content -->
					</div> <!-- End .property_overview -->

					<!-- __________________Property Specification_________________ -->
					<div class="property_specification">
						<!-- Main_title2__________ -->
						<div class="main_title2">
							<h2>Property Specification</h2>
						</div>
						<!-- End Main_title2______ -->

						<div class="specification_tab">
							<div class="panel-group" id="accordion">
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
							         Cottage Structure</a>
							      </h6>
							    </div>
							    <div id="collapse1" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 1 -->
							  <div class="panel">
							    <div class="panel-heading active-panel">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
							        Flooring</a>
							      </h6>
							    </div>
							    <div id="collapse2" class="panel-collapse collapse in">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 2 -->
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
							        Walls</a>
							      </h6>
							    </div>
							    <div id="collapse3" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 3 -->
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
							        Doors</a>
							      </h6>
							    </div>
							    <div id="collapse4" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 4 -->
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
							        Windows</a>
							      </h6>
							    </div>
							    <div id="collapse5" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 5 -->
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
							        Roofing</a>
							      </h6>
							    </div>
							    <div id="collapse6" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 6 -->
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
							        Electical Works</a>
							      </h6>
							    </div>
							    <div id="collapse7" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 7 -->
							  <div class="panel">
							    <div class="panel-heading">
							      <h6 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
							        Motors</a>
							      </h6>
							    </div>
							    <div id="collapse8" class="panel-collapse collapse">
							      <div class="panel-body">
							      	<p>Living / Dining / Kitchen / Bed Room - Ceramic Tile <br>
							      		Toilet – Ceramic anti-Skid Tile.</p>
							      </div>
							    </div>
							  </div> <!-- /panel 8 -->
							</div> <!-- end #accordion -->
						</div> <!-- End .specification_tab -->
					</div> <!-- End .property_specification -->

					<!-- _________________ Floor Plans ___________________ -->
					<div class="floor_plans">
						<!-- Main_title2__________ -->
						<div class="main_title2">
							<h2>Floor Plans</h2>
						</div>
						<!-- End Main_title2______ -->
						<div class="floor_img">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="single_image">
										<div class="img_holder">
											<img src="images/single-gallery/floorplan-1.png" alt="floor" class="img-responsive">
										</div>
										<h6>Ground Floor</h6>
									</div> <!-- End .single_image -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="single_image">
										<div class="img_holder">
											<img src="images/single-gallery/floorplan-2.png" alt="floor" class="img-responsive">
										</div>
										<h6>First Floor</h6>
									</div> <!-- End .single_image -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="single_image">
										<div class="img_holder">
											<img src="images/single-gallery/floorplan-3.png" alt="floor" class="img-responsive">
										</div>
										<h6>Second Floor</h6>
									</div> <!-- End .single_image -->
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="single_image">
										<div class="img_holder" style="padding:10px 0;">
											<img src="images/single-gallery/floorplan-4.png" alt="floor" class="img-responsive">
										</div>
									</div> <!-- End .single_image -->
								</div>
							</div>
						</div>
					</div> <!-- End .floor_plans -->

					<!-- ____________________ Public Facilities ________________ -->
					<div class="public_facilities">
						<!-- Main_title2__________ -->
						<div class="main_title2">
							<h2>Public Facilities</h2>
						</div>
						<!-- End Main_title2______ -->
						<ul>
							<li class="tooltip" title="4 Km From International School"><i class="fa fa-shield"></i> 4 Km From International School</li>
							<li class="tooltip" title="2 Km From Supermarket"><i class="fa fa-shopping-cart"></i> 2 Km From Supermarket</li>
							<li class="tooltip" title="1 Km From Temple"><i class="fa fa-university"></i> 1 Km From Temple</li>
							<li class="tooltip" title="3 Km From Family Restaurant"><i class="fa fa-spoon"></i> 3 Km From Family Restaurant</li>
							<li class="tooltip" title="1/2 Km From Bus Stop"><i class="fa fa-bus"></i> 1/2 Km From Bus Stop</li>
							<li class="tooltip" title="12 Km From Railway Station"><i class="fa fa-subway"></i> 12 Km From Railway Station</li>
							<li class="tooltip" title="15Km From Internationa Airport"><i class="fa fa-plane"></i> 15Km From Internationa Airport</li>
							<li class="tooltip" title="3 km From City Hospital"><i class="fa fa-hospital-o"></i> 3 km From City Hospital</li>
							<li class="tooltip" title="10 Km From College"><i class="fa fa-graduation-cap"></i> 10 Km From College</li>
						</ul>
					</div> <!-- End .public_facilities -->

					<!-- _________________ Contact  Our Agent _______________ -->
					<div class="contact_agent">
						<div class="agent_details">
							<div class="img">
								<img src="images/single-gallery/2.jpg" alt="image" class="img-responsive">
							</div> <!-- End .img -->
							<div class="agent_info">
								<!-- Main_title2__________ -->
								<div class="main_title2">
									<h3 style="margin-top:-4px; padding-top:0;">Contact  Our Agent</h3>
								</div>
								<!-- End Main_title2______ -->
								<div class="name_holder">
									<h4>Michel Joe Desosa</h4>
									<i>Real Estate Agent</i>
								</div> <!-- End .name_holder -->
								<div class="agent_contact">
									<a href="tel:86952-56-951"><i class="fa fa-phone" style="padding-right:10px;"></i> 86952-56-951</a>
									<a href="mailto:Davidvigo@dotmain.com"><i class="fa fa-envelope-o" style="padding-right:7px;"></i> Davidvigo@dotmain.com</a>
									<ul>
										<li class="tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="tran3s tooltip" title="Whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									</ul>
								</div> <!-- End .agent_contact -->
							</div> <!-- End .agent_info -->
							<div class="clearfix"></div>
						</div> <!-- End .agent_details -->

						<!-- ___ send message box ____ -->
						<div class="send_your_msg send_message">
							<!-- Main_title2__________ -->
							<div class="main_title2">
								<h3>Send  Your Message</h3>
							</div>
							<!-- End Main_title2______ -->

							<form action="#">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
										<input type="text" placeholder="Your Name">
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
										<input type="text" placeholder="Email Address">
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<input type="text" placeholder="Phone">
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea placeholder="Message Here..."></textarea>
									</div>
								</div>
								<button class="tran3s">Send Message</button>
							</form>
						</div>
					</div> <!-- End .contact_agent -->

					<!-- ___________ Similar properties _____________ -->
					<div class="similar_properties">
						<!-- Main_title__________ -->
						<div class="main_title">
							<h2>Similar Properties</h2>
						</div>
						<!-- End Main_title______ -->

						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="single_item">
									<img src="images/gallery-grid/17.jpg" alt="images" class="img-responsive">
									<div class="overlay tran3s">
										<div class="link">
											<a href="images/gallery-grid/17.jpg" class="fancybox"><i class="fa fa-search-plus"></i></a>
											<a href="property-details.html"><i class="fa fa-link"></i></a>
										</div>
										<div class="text">
											<h6>Loyal Beach house</h6>
											<i>Villa , Rent</i>
										</div>
									</div> <!-- End .overlay -->
								</div> <!-- End .single_item -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="single_item">
									<img src="images/gallery-grid/18.jpg" alt="images" class="img-responsive">
									<div class="overlay tran3s">
										<div class="link">
											<a href="images/gallery-grid/18.jpg" class="fancybox"><i class="fa fa-search-plus"></i></a>
											<a href="property-details.html"><i class="fa fa-link"></i></a>
										</div>
										<div class="text">
											<h6>East Haliday Causeway</h6>
											<i>Cottage, Sale</i>
										</div>
									</div> <!-- End .overlay -->
								</div> <!-- End .single_item -->
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
								<div class="single_item">
									<img src="images/gallery-grid/19.jpg" alt="images" class="img-responsive">
									<div class="overlay tran3s">
										<div class="link">
											<a href="images/gallery-grid/19.jpg" class="fancybox"><i class="fa fa-search-plus"></i></a>
											<a href="property-details.html"><i class="fa fa-link"></i></a>
										</div>
										<div class="text">
											<h6>Primrose Guest House</h6>
											<i>Condo, Sale</i>
										</div>
									</div> <!-- End .overlay -->
								</div> <!-- End .single_item -->
							</div>
						</div>
					</div> <!-- End .similar_properties -->
				</div> <!-- End .gallery_details -->

<!-- _______________________________________________ Sidebar ________________________________________________ -->
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar_style_two">
						<!-- _______________________Property Search option________________________ -->
						<div class="preperty_search">
							<h4>Property Search</h4>
							<form action="#">

								<div class="selectmenu_type_1 space_fix single_form">
									<select class="selectmenu">
										<option selected="selected">Location</option>
										<option>Mexcio City</option>
										<option>Seoul</option>
										<option>Miami</option>
										<option>Palo alto</option>
										<option>Los angeles</option>
									</select>
								</div> <!-- End .single_form -->

								<div class="selectmenu_type_2 space_fix single_form"> 
									<select class="selectmenu">
										<option selected="selected">Offer</option>
										<option>For rent</option>
										<option>For sale</option>
									</select>
								</div> <!-- End .single_form -->

								<div class="selectmenu_type_2 space_fix single_form"> 
									<select class="selectmenu">
										<option selected="selected">Type</option>
										<option>For rent</option>
										<option>For sale</option>
									</select>
								</div> <!-- End .single_form -->

								<div class="selectmenu_type_1 single_form">
									<select class="selectmenu">
										<option selected="selected">Bed Rooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div> <!-- End .single_form -->

								<div class="selectmenu_type_1 single_form">
									<select class="selectmenu">
										<option selected="selected">Bath Rooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div> <!-- End .single_form -->

								<div class="selectmenu_type_1 price_range">
									<input type="text" placeholder="Min. Price">
									<input type="text" placeholder="Max. Price">
								</div> <!-- End .single_form -->

								<div class="input_checker">
									<div class="single_checkbox">
										<input type="checkbox" id="airC">
										<label for="airC">Air Conditioning</label>
									</div> <!-- End .single_checkbox -->

									<div class="single_checkbox">
										<input type="checkbox" id="heater">
										<label for="heater">Heater</label>
									</div> <!-- End .single_checkbox -->

									<div class="single_checkbox">
										<input type="checkbox" id="internet">
										<label for="internet">Internet</label>
									</div> <!-- End .single_checkbox -->

									<div class="single_checkbox">
										<input type="checkbox" id="lift">
										<label for="lift">Lift</label>
									</div> <!-- End .single_checkbox -->

									<div class="single_checkbox">
										<input type="checkbox" id="solar">
										<label for="solar">Solar</label>
									</div> <!-- End .single_checkbox -->

									<div class="single_checkbox">
										<input type="checkbox" id="tele">
										<label for="tele">Television</label>
									</div> <!-- End .single_checkbox -->

									<div class="single_checkbox">
										<input type="checkbox" id="laptop">
										<label for="laptop">Laptop</label>
									</div> <!-- End .single_checkbox -->

								</div> <!-- End .input_checker -->
								<button class="search">Search Properties</button>
							</form>
						</div> <!-- End .preperty_search -->

						<!-- ______________________________Brochure Download__________________________ -->
						<div class="brochure_download">
							<!-- Main_title2__________ -->
							<div class="main_title2">
								<h3>Download Brochures</h3>
								<a href="#" class="pdf tran3s" download>Our Brochures.PDF</a>
								<a href="#" class="txt tran3s" download>Our Brochures.TXT</a>
							</div>
							<!-- End Main_title2______ -->
						</div> <!-- End .brochure_download -->


						<!-- _______________________Loan calculator________________________ -->
						<div class="preperty_search" id="loan_calculator">
							<h4>Loan Calculator</h4>
							<form action="#">

								<div class="selectmenu_type_1 space_fix single_form">
									<label for="loan">Loan Required</label>
									<input type="text" id="loan" placeholder="15,00,000">
								</div> <!-- End .single_form -->

								<div class="selectmenu_type_2 space_fix single_form"> 
									<label for="income">Income Per Month</label>
									<input type="text" id="income" placeholder="50,000">
								</div> <!-- End .single_form -->

								<div class="single_form">
									<label>Loan Tenture</label>
									<div class="selectmenu_type_2 space_fix">
										<select class="selectmenu">
											<option selected="selected">15 Years</option>
											<option>20 Years</option>
											<option>30 Years</option>
										</select>
									</div> <!-- End .single_form -->
								</div>

								<div class="selectmenu_type_1 single_form">
									<label for="income">Rate of Interest</label>
									<input type="text" id="interest" placeholder="10%">
								</div> <!-- End .single_form -->

								<button class="search">Check Eligibility</button>
							</form>
						</div> <!-- End .preperty_search -->

						<!-- ___________________________Reduced Properties_______________________________ -->
						<div class="reduced_properties">
							<!-- Main_title2__________ -->
							<div class="main_title2">
								<h3>Reduced Properties</h3>
							</div>
							<!-- End Main_title2______ -->

							<div class="item_wrapper">
								<div class="itme">
									<div class="img_holder">
										<img src="images/home3/16.jpg" alt="images">
									</div> <!-- End .img_holder -->
									<div class="text">
										<a href="#">
											<h6>Jungle golf Villas</h6>
											<span><i class="fa fa-map-marker"></i> California</span>
											<h5>$ 14,500 / Month</h5>
										</a>
									</div> <!-- End .text -->
								</div> <!-- End .itme -->

								<div class="itme">
									<div class="img_holder">
										<img src="images/home3/17.jpg" alt="images">
									</div> <!-- End .img_holder -->
									<div class="text">
										<a href="#">
											<h6>Office Apartment</h6>
											<span><i class="fa fa-map-marker"></i> Sanfransisco</span>
											<h5>$ 18,000 / Month</h5>
										</a>
									</div> <!-- End .text -->
								</div> <!-- End .itme -->

								<div class="itme">
									<div class="img_holder">
										<img src="images/home3/18.jpg" alt="images">
									</div> <!-- End .img_holder -->
									<div class="text">
										<a href="#">
											<h6>Rainbow Building</h6>
											<span><i class="fa fa-map-marker"></i> California</span>
											<h5>$ 15,000 / Month</h5>
										</a>
									</div> <!-- End .text -->
								</div> <!-- End .itme -->

							</div> <!-- End .item_wrapper -->
						</div> <!-- End .reduced_properties -->

						<!-- ____________________ Sidebar Testimonial ________________________ -->
						<div class="sidebar_properties sidebar_testimonial">
							<!-- Main_title2__________ -->
							<div class="main_title2">
								<h3>Testimonials</h3>
							</div>
							<!-- End Main_title2______ -->

							<div class="slider_box">
								<div id="myCarousel11" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<div class="item active">
									    	<div class="title">
												<h6>Peter Robinex</h6>
												<i>Manager Of LCLC Bank</i>
												<img src="images/contact/1.jpg" alt="image">
											</div> <!-- End .img_holder -->
											<div class="text">
												<i class="fa fa-quote-left"></i>
												<p>Who do not know how to pursue pleasures sed rationally encounter that extremely painfull again.</p>
												<i class="fa fa-quote-right"></i>
											</div> <!-- End .text -->
										</div>

										<div class="item">
									    	<div class="title">
												<h6>Peter Robinex</h6>
												<i>Manager Of LCLC Bank</i>
												<img src="images/contact/1.jpg" alt="image">
											</div> <!-- End .img_holder -->
											<div class="text">
												<i class="fa fa-quote-left"></i>
												<p>Who do not know how to pursue pleasures sed rationally encounter that extremely painfull again.</p>
												<i class="fa fa-quote-right"></i>
											</div> <!-- End .text -->
										</div>

										<div class="item">
									    	<div class="title">
												<h6>Peter Robinex</h6>
												<i>Manager Of LCLC Bank</i>
												<img src="images/contact/1.jpg" alt="image">
											</div> <!-- End .img_holder -->
											<div class="text">
												<i class="fa fa-quote-left"></i>
												<p>Who do not know how to pursue pleasures sed rationally encounter that extremely painfull again.</p>
												<i class="fa fa-quote-right"></i>
											</div> <!-- End .text -->
										</div>
									</div> <!-- End .carousel-inner -->
								</div>
								<!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel11" role="button" data-slide="prev">
								    <i class="fa fa-angle-left"></i>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel11" role="button" data-slide="next">
								    <i class="fa fa-angle-right"></i>
								    <span class="sr-only">Next</span>
								  </a>
							</div> <!-- End .slider_box -->
						</div> <!-- End .sidebar_properties -->


						<!-- ________________ Our Commercial Video ______________ -->

						<div class="commercial_video">
							<!-- Main_title2__________ -->
							<div class="main_title2">
								<h3>Our Commercial Video</h3>
							</div>
							<!-- End Main_title2______ -->

							<div class="video_content">
								<img src="images/single-gallery/1.jpg" alt="image" class="img-responsive">
								<a href="https://www.youtube.com/embed/rWVgOe0A5Zg" class="fancy_video fancybox.iframe">
									<img src="images/single-gallery/play.png" alt="play">
								</a>
							</div> <!-- End .video_content -->
						</div> <!-- End .commercial_video -->



					</div> <!-- End .sidebar_style_two -->
				</div> <!-- End of column -->
			</div> 
		</section> <!-- End .single_gallery -->


		<!-- End Single gallery page content _____________ -->




		<!-- Footer __________________________________________ -->

		<footer>

			<div class="main_footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="about_estate">
								<a href="index-1.html"><img src="images/skin/f-logo.png" alt="logo" id="fLogo"></a>
								<p>As a property developers every project  we offer quality Properties and Services for our trustable customers.<span></span>
								If you are interested in real estate do not wait and BUY IT NOW!</p>
								
								<ul class="icon_footer">
									<li class="border_round tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="border_round tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="border_round tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="border_round tran3s tooltip" title="Linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="border_round tran3s tooltip" title="Vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul> <!-- End .icon_header -->

							</div> <!-- End .about_estate -->
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="useful_link">
								<div class="footer_title">
									<h4>Usefull Links</h4>
								</div>
								<ul>
									<li><a href="property-listing-without-sidebar.html" class="tran3s"><i class="fa fa-angle-right"></i> Properties</a></li>
									<li><a href="about-us.html" class="tran3s"><i class="fa fa-angle-right"></i> About Us</a></li>
									<li><a href="property-listing-with-sidebar.html" class="tran3s"><i class="fa fa-angle-right"></i> Find Homes</a></li>
									<li><a href="agent-listing-without-sidebar.html" class="tran3s"><i class="fa fa-angle-right"></i> Popular Agents</a></li>
									<li><a href="blog-without-sidebar.html" class="tran3s"><i class="fa fa-angle-right"></i> News</a></li>
									<li><a href="contact.html" class="tran3s"><i class="fa fa-angle-right"></i> Conatct Us</a></li>
								</ul>

								<ul>
									<li><a href="#" class="tran3s"><i class="fa fa-angle-right"></i> Add Listing</a></li>
									<li><a href="#" class="tran3s"><i class="fa fa-angle-right"></i> Become Agent</a></li>
									<li><a href="pricing-plans.html" class="tran3s"><i class="fa fa-angle-right"></i> Pricing</a></li>
									<li><a href="#" class="tran3s"><i class="fa fa-angle-right"></i> Features</a></li>
									<li><a href="login.html" class="tran3s"><i class="fa fa-angle-right"></i> Login / Register</a></li>
								</ul>
							</div> <!-- End .useful_link -->
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="featured_properties_footer">
								<div class="footer_title">
									<h4>Featured Properties</h4>
								</div>

								<div class="history">
									<div class="item">
										<div class="image_holder">
											<img src="images/home/22.jpg" alt="images">
										</div>
										<div class="text">
											<a href="property-details.html"><h6>High Rise Building</h6></a>
											<span><i class="fa fa-map-marker"></i> California</span>
											<h4>$ 25,500</h4>
										</div> <!-- End .text -->
									</div> <!-- End .item -->

									<div class="item">
										<div class="image_holder">
											<img src="images/home/23.jpg" alt="images">
										</div>
										<div class="text">
											<a href="property-details.html"><h6>Low Rise Building</h6></a>
											<span><i class="fa fa-map-marker"></i> Sanfransisco</span>
											<h4>$ 35,500</h4>
										</div> <!-- End .text -->
									</div> <!-- End .item -->

									<div class="item">
										<div class="image_holder">
											<img src="images/home/24.jpg" alt="images">
										</div>
										<div class="text">
											<a href="property-details.html"><h6>Jango Beach House</h6></a>
											<span><i class="fa fa-map-marker"></i> Coloroda</span>
											<h4>$ 45,500</h4>
										</div> <!-- End .text -->
									</div> <!-- End .item -->
								</div> <!-- End .history -->
							</div> <!-- End .featured_properties_footer -->
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="contact_info">
								<div class="footer_title">
									<h4>Contact Info</h4>
								</div>

								<ul>
									<li> Address: PO Box 859, La Corner St, Sanfransisco, CA 52698</li>
									<li><a href="tel:98941-84-604" class="tran3s">Phone: 98941-84-604</a></li>
									<li><a href="mailto:Support@Steelthemes.com" class="tran3s">Email: Support@Steelthemes.com</a></li>
									<li><a href="#" class="tran3s">Web: WWW.Realestate.com</a></li>
									<li>Monday - Sunday 9.00 - 18.00 <br>
										Saturday - Sunday Holiday</li>
								</ul>

							</div> <!-- End .contact_info -->
						</div>
					</div> <!-- End .row -->
				</div> <!-- End .container -->
			</div> <!-- End .main_footer -->

			<div class="bottom_footer">
				<div class="container">
					<div class="text">
						<p>Copyright &copy; 2015 Real Estate Theme Designed by | <a href="http://themeforest.net/user/steelthemes/portfolio" class="tran3s" target="_blank">SteelThemes</a> Developed by | <a href="http://themeforest.net/user/template_path/portfolio" class="tran3s" target="_blank">Template Path</a> </p>
					</div> <!-- End .text -->

					<div class="footer_nav">
						<ul>
							<li><a href="index-1.html" class="tran3s">Home</a></li>
							<li><a href="property-listing-without-sidebar.html" class="tran3s">Properties</a></li>
							<li><a href="agent-listing-without-sidebar.html" class="tran3s">Agents</a></li>
							<li><a href="#" class="tran3s">Buy This Theme</a></li>
						</ul>
					</div> <!-- End .footer_nav -->
				</div>
			</div> <!-- End .bottom_footer -->
		</footer>


		<!-- End Footer ______________________________________ -->



		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="js/jquery-2.1.4.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		<!-- Style-switcher  -->
		<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>

		<!-- Google map js -->
		<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
		<script src="js/gmap.js"></script>


		<!-- Tooltip -->
		<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>

		<!-- ui js -->
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>

		<!-- Fancybox js -->
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

		<!-- owl.carousel -->
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>		

		<!-- Language Switcher -->
		<script type="text/javascript" src="js/jquery.polyglot.language.switcher.js"></script>

		<!-- revolution -->
		<script src="js/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="js/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="js/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="js/revolution/revolution.extension.navigation.min.js"></script>

		<!-- Main js -->
		<script type="text/javascript" src="js/main.js"></script>

	</div> <!-- End .boxed_wrapper -->

	</body>

<!-- Mirrored from steelthemes.com/demo/html/real-estate/gallery-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2018 16:00:57 GMT -->
</html>