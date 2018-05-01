<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from steelthemes.com/demo/html/real-estate/agency-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2018 15:51:04 GMT -->
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
	<body class="agency_listing">

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
						<h2>Agency Listing</h2>
						<ul>
							<li><a href="index-1.html">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
							<li>Agency Listing</li>
						</ul>
					</div> <!-- End .title -->
				</div> <!-- End .container -->
			</div> <!-- End .overlay -->
		</section> <!-- End .inner_banner -->

		<!-- End Inner Banner ____________________________ -->



<!-- ____________________________________ sale or Rent Search __________________________________ -->

		<div class="properties_search inner_page_properties_search container">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#rent">For Rent</a></li>
			  <li><a data-toggle="tab" href="#sale">For Sale</a></li>
			</ul>

			<div class="search_category">
				<div class="tab-content">
					<div id="rent" class="search_form tab-pane fade in active">
						<form action="#">
							<div class="selectmenu_type_1 space_fix single_form">
								<input type="text" placeholder="Search By  City / Town...">
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">Property Type</option>
									<option>Aparment</option>
									<option>House</option>
									<option>Office</option>
									<option>Villa</option>
									<option>Resort</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">No.Of Rooms</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">Price List</option>
									<option>20,000$</option>
									<option>25,000$</option>
									<option>50,000$</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="single_form selectmenu_type_3">
								<button class="tran3s"><i class="fa fa-search"></i></button>
							</div> <!-- End .single_form -->
						</form>
					</div> <!-- End #rent -->

					<div id="sale" class="search_form tab-pane fade">
						<form action="#">
							<div class="selectmenu_type_1 space_fix single_form">
								<input type="text" placeholder="Search By  City / Town...">
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">Property Type</option>
									<option>Aparment</option>
									<option>House</option>
									<option>Office</option>
									<option>Villa</option>
									<option>Resort</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">No.Of Rooms</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">Price List</option>
									<option>20,000$</option>
									<option>25,000$</option>
									<option>50,000$</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="single_form selectmenu_type_3">
								<button class="tran3s"><i class="fa fa-search"></i></button>
							</div> <!-- End .single_form -->
						</form>
					</div> <!-- End #sale -->
				</div> <!-- End .tab-content -->
			</div> <!-- End .search_category -->
		</div> <!-- End .properties_search -->
<!-- ____________________________________ End sale or Rent Search _______________________________ -->



		<!-- Agency listing page content ____________________ -->

		<div class="agency_listin_page_content container">
			<div class="row">
				
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<!-- Main_title__________ -->
						<div class="main_title">
							<h2 style="margin-top:0">Our Best Agencies</h2>
						</div>
						<!-- End Main_title______ -->
						<p style="margin-top:34px; margin-bottom:30px;">Thank you for your Choosing Real Estate. Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approached Developers to release incremental units to fulfill the demands at a stepped up cut-off price. Shortlisteed bidders will be called for unit allocation on First Come First Serve Basis. There are many variations of passages slightly believable.</p>


						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/2.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>My House Interior Design</h6>
								<span><a href="agency-details.html">6 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approched.</p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> My House Interior Design, 11/8-1 Red Cross st, California, United States-90021</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->

						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/3.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>Reality Business Property</h6>
								<span><a href="agency-details.html">3 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Natural resources such as crops, minerals, or water; immovable sedsproperty of this nature.Since this was a limited unit seds auction, we had approached Developers to release incremental units to fulfill the demands cut-off price. </p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Reality Business Property, 248 Church Road, Newyork City, United States-122</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->

						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/4.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>builders Construction Company</h6>
								<span><a href="agency-details.html">4 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approched.</p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Builders, 248 Church Road, Newyork City, United States-10022</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->


						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/5.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>Sweet Home</h6>
								<span><a href="agency-details.html">6 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Natural resources such as crops, minerals, or water; immovable sedsproperty of this nature.Since this was a limited unit seds auction, we had approached Developers to release incremental units to fulfill the demands cut-off price. </p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Sweet Home, 11/8-1 Red Cross st, California, United States-90021</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->


						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/6.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>Fapax Construction Company</h6>
								<span><a href="agency-details.html">6 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approched.</p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Fapax Construction Com, 248 Church Road, Newyork City, United States-122</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->

						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/7.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>Frihet Builders</h6>
								<span><a href="agency-details.html">3 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Natural resources such as crops, minerals, or water; immovable sedsproperty of this nature.Since this was a limited unit seds auction, we had approached Developers to release incremental units to fulfill the demands cut-off price. </p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> My House Interior Design, 11/8-1 Red Cross st, California, United States-90021</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->


						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/8.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>Scandinavia Business property</h6>
								<span><a href="agency-details.html">4 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approched.</p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Scandinavia Property, 248 Church Road, Newyork City, United States-10022</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->


						<!-- Single agency -->
						<div class="single_agency">
							<div class="icon_holder">
								<img src="images/img/9.png" alt="icon">
							</div> <!-- End .icon_holder -->

							<div class="info">
								<h6>Intelligent Home Solution</h6>
								<span><a href="agency-details.html">4 Listing</a></span>
								<div class="clear_fix"></div>
								<p>Natural resources such as crops, minerals, or water; immovable sedsproperty of this nature.Since this was a limited unit seds auction, we had approached Developers to release incremental units to fulfill the demands cut-off price.</p>
								<ul>
									<li><a href="#"><i class="fa fa-envelope"></i> Myhouse@example.com</a></li>
									<li><a href="#"><i class="fa fa-globe"></i> http://example.com</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +321-742-963</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> My House Interior Design, 11/8-1 Red Cross st, California, United States-90021</a></li>
								</ul>
							</div> <!-- End .info -->
							<div class="clear_fix"></div>
						</div> <!-- End .single_agency -->

						<div class="page_indicator">
							<ul>
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div> <!-- End .page_indicator -->
				</div> <!-- End of column -->

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
										<a href="property-details.html">
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
										<a href="property-details.html">
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
										<a href="property-details.html">
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
								<div id="myCarousel99" class="carousel slide" data-ride="carousel">
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
								  <a class="left carousel-control" href="#myCarousel99" role="button" data-slide="prev">
								    <i class="fa fa-angle-left"></i>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel99" role="button" data-slide="next">
								    <i class="fa fa-angle-right"></i>
								    <span class="sr-only">Next</span>
								  </a>
							</div> <!-- End .slider_box -->
						</div> <!-- End .sidebar_properties -->

					</div> <!-- End .sidebar_style_two -->
				</div> <!-- End of column -->
			</div> <!-- End .row -->
		</div> <!-- End .agency_listin_page_content -->

		<!-- End Agency listing page content ________________ -->




		<!-- Footer __________________________________________ -->
		<footer>

			<div class="main_footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="about_estate">
								<a href="index-1.html"><img src="images/skin/f-logo.png" alt="logo" id="fLogo"></a>
								<p>As a property developers every project  we offer quality Properties and Services for our trustable customers. <span></span>
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

	</div> <!-- End boxed.wrapper -->
	</body>

<!-- Mirrored from steelthemes.com/demo/html/real-estate/agency-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2018 15:51:10 GMT -->
</html>