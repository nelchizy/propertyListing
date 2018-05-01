<?php
	include "inc/master.php";
	include "inc/slider.php";
	include "DAO/ListingProperty.php";
?>
		<!-- Find Home Table _____________________________ -->
		<section class="container">
			<div class="find_home">
				<div class="table_content">
					<h3 class="table_title">
						<i class="fa fa-home"></i>
						Find Your Dream Home
					</h3>
					<form action="#">
						<div class="form-control">
							<input type="text" name="search" class="col-md-12 col-xs-12 col-lg-12" placeholder="    Search property by location, Price, Plot size etc">
						</div> <!-- End .single_form -->
						<div class="single_form" style="vertical-align:top;">
							<button class="search">Search</button>
						</div> <!-- End .single_form -->

					</form>
				</div> <!-- End .table_content -->
			</div> <!-- End .find_home -->
		</section>
		<!-- End Find Home Table _________________________ -->
		<!-- Start Reat Estate____________________________ -->

		<section class="real_estate">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 text">
						<h2>Start a Peacefull Life With</h2>
						<h1>Real Estate</h1>
						<p>Long established fact that a reader will be undo ut distracted by the readable sed content of a page when looking und at its layouts The sed point of using Lorem  Ipsum is that it has a more-or-less than normal distribution of letters as james opposed to using content here content here will be making it look like readable property developers.
							<br> <br>
						Variations of passages of Lorem Ipsum sed will sedavailable, but the majority have suffered alteration in some form, by the labour are injected humour, or randomised words which don't look even slightly believable.</p>
						<a href="#" class="theme-btn tran3s">Know More</a>
					</div> <!-- End .text -->

					<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
						<div class="image_gallery">
							<div class="img_holder space_fix">
								<img src="images/home/1.jpg" alt="images" class="img-responsive tran3s">
								<h4 style="bottom: 3px; left:20px;" class="tooltip" title="Start Your Search From Anywhere">Start Your Search From Anywhere</h4>
							</div>
							
							<div class="img_holder space_fix">
								<img src="images/home/2.jpg" alt="images" class="img-responsive tran3s">
								<h4 style="bottom: 3px; left:20px;" class="tooltip" title="Friendly Agents">Friendly Agents</h4>
							</div>
							<div class="img_holder upper_sapce_fix">
								<img src="images/home/2.1.jpg" alt="images" class="img-responsive tran3s">
								<h4 style="bottom: 3px; right:18px;" class="tooltip" title="Get Your Deram Home">Get Your Deram Home</h4>
							</div>
							<div class="clear_fix"></div>
						</div> <!-- End .image_gallery -->
					</div> 
				</div> <!-- End .row -->
			</div> <!-- End .container -->
		</section>	<!-- End .real_estate -->		
 
		<!-- End Start Reat Estate________________________ -->


		<!-- Featured Properties _________________________ -->

		<section class="featured_properties container">
			<!-- Main_title__________ -->
			<div class="main_title">
				<h2>Featured Properties</h2>
			</div>
			<!-- End Main_title______ -->
			<div class="properties_item row">
				<?php
							$list = new ListingProperty();
							$getList = $list->getFeaturedProperty();
							if($getList){
								while($row = $getList->fetch_assoc()){?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single_properties">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						    	<div class="img_holder">
									<a href="property-details.php?pro_id=<?php echo $row['listing_id'];?>" class="fancybox">
										<img src="<?php echo $row['property_img1'];?>" alt="images" class="img-responsive">
										<span class="properties_img"><i class="fa fa-camera"></i> 1/5</span>
									</a>
								</div> <!-- End .img_holder -->
							</div>
							<div class="item">
						    	<div class="img_holder">
									<a href="property-details.php?pro_id=<?php echo $row['listing_id'];?>" class="fancybox">
										<img src="<?php echo $row['property_img2'];?>" alt="images" class="img-responsive">
										<span class="properties_img"><i class="fa fa-camera"></i> 2/5</span>
									</a>
								</div> <!-- End .img_holder -->
							</div>
							<div class="item">
						    	<div class="img_holder">
									<a href="property-details.php?pro_id=<?php echo $row['listing_id'];?>" class="fancybox">
										<img src="<?php echo $row['property_img3'];?>" alt="images" class="img-responsive">
										<span class="properties_img"><i class="fa fa-camera"></i> 3/5</span>
									</a>
								</div> <!-- End .img_holder -->
							</div>
							<div class="item">
						    	<div class="img_holder">
									<a href="property-details.php?pro_id=<?php echo $row['listing_id'];?>" class="fancybox">
										<img src="<?php echo $row['property_img4'];?>" alt="images" class="img-responsive">
										<span class="properties_img"><i class="fa fa-camera"></i> 4/5</span>
									</a>
								</div> <!-- End .img_holder -->
							</div>
							<div class="item">
						    	<div class="img_holder">
									<a href="property-details.php?pro_id=<?php echo $row['listing_id'];?>" class="fancybox">
										<img src="<?php echo $row['property_img5'];?>" alt="images" class="img-responsive">
										<span class="properties_img"><i class="fa fa-camera"></i> 5/5</span>
									</a>
								</div> <!-- End .img_holder -->
							</div>
							<span class="price tooltip" title="&#8358; <?php echo number_format($row['actual_price']);?>">&#8358; <?php echo $row['actual_price'];?></span>
							<span class="property_tag">Featured</span>
						  </div> <!-- End .carousel-inner -->

						  
					</div> <!-- End .carousel slide -->
					
					<div class="text">
						<div class="properties_name">
							<div class="title">
								<a href="property-details.php?pro_id=<?php echo $row['listing_id'];?>">
									<h6><?php echo $row['property_name']?></h6>
									<span><i class="fa fa-map-marker"></i> <?php echo $row['location']?></span>
								</a>
							</div> <!-- End .title -->
							<?php
								$db = new Database();
								$id = $row['affiliate_id'];
								$sql = "SELECT * FROM affiliate WHERE aff_id = '$id'";
								$res_sql = $db->select($sql)->fetch_assoc();
							?>
							<div class="author_img border_round">
								<img src="<?php echo $res_sql['affiliate_passport'];?>" alt="<?php echo $res_sql['first_name'];?>" class="border_round">
							</div> <!-- End .author_img -->
						<?php?>
							<div class="clear_fix"></div>
						</div> <!-- End .properties_name -->
						<ul class="properties_history">
							<li><i class="fa fa-compress" style="padding-right:8px"></i> Price: &nbsp;<span>&nbsp;&#8358;<?php echo number_format($row['actual_price']);?></span></li>
							<li><i class="fa fa-bed" style="padding-right:4px"></i> Bedroom <span class="tooltip" title="2 Bedrooms"><?php echo $row['rooms'];?> Bedrooms:&nbsp;&nbsp;</span><?php echo $row['rooms'];?></li>
							<li><i class="fa fa-wheelchair" style="padding-right:7px"></i> Bathroom <span class="tooltip" title="<?php echo $row['bathrooms'];?>"> Bathroom<?php echo $row['bathrooms'];?> Bathrooms</span><?php echo $row['bathrooms'];?></li>
							<li><i class="fa fa-compress" style="padding-right:8px"></i> Property Size <span><?php echo $row['property_size'];?> SQM</span><?php echo $row['property_size'];?> SQM</li>
							<!--
							<hr>
							<h3>Land Marks</h3>
							<li><i class="fa fa-house" style="padding-right:8px"></i><strong style="color: red;">Worship Place: &nbsp;</strong>  <?php //echo $row['worship'];?></li>
							<li><i class="fa fa-house" style="padding-right:8px"></i> <strong style="color: red;">Restaurant: &nbsp;</strong>  <?php //echo $row['restaurant'];?></li>
							<li><i class="fa fa-house" style="padding-right:8px"></i> <strong style="color: red;">Hospital: &nbsp;</strong>  <?php //echo $row['hospital'];?></li>
							<li><i class="fa fa-school" style="padding-right:8px"></i> <strong style="color: red;">School: &nbsp;</strong>  <?php //echo $row['international_school'];?></li>
							<li><i class="fa fa-market" style="padding-right:8px"></i> <strong style="color: red;">Super Market: &nbsp;</strong>  <?php //echo $row['super_market'];?></li>
							<hr>
							<h3>Structure</h3>
							<li><i class="fa fa-house" style="padding-right:8px"></i> <strong style="color: red;">Material Use: &nbsp;</strong>  <?php //echo $row['material'];?></li>
							<li><i class="fa fa-house" style="padding-right:8px"></i> <strong style="color: red;">Flooring Type: &nbsp;</strong>  <?php //echo $row['flooring'];?></li>
							<li><i class="fa fa-house" style="padding-right:8px"></i> <strong style="color: red;">Electrical Work: &nbsp;</strong>  <?php //echo $row['electrical_work'];?></li>
						-->
						</ul>
					</div> <!-- End .text -->
				</div> <!-- End .single_properties -->
				<?php } } ?>
			</div> <!-- End .properties_item -->
		</section> <!-- End .featured_properties -->
		<!-- End Featured Properties _____________________ -->
		<!-- Recent Properties ___________________________ -->
		<section class="recent_properties container">
			<!-- Main_title__________ -->
			<div class="main_title">
				<h2>Recent Properties</h2>
			</div>
			<!-- End Main_title______ -->
			<div class="row">
				<div class="properties_item owl-carousel owl-theme" id="properties-slider">
					<?php
						$list = new ListingProperty();
						$getLatest = $list->getRecentProperty();
						if($getLatest){
							while($latest = $getLatest->fetch_assoc()){?>
					<div class="item single_properties">
						<div class="img_holder">
							<a href="<?php echo $latest['property_img1'];?>" class="fancybox">
								<img src="<?php echo $latest['property_img1'];?>" alt="images" class="img-responsive">
								<span class="price tooltip" title="&#8358; <?php echo number_format($latest['actual_price']);?>">&#8358; <?php echo number_format($latest['actual_price']);?></span>
								
							</a>
						</div> <!-- End .img_holder -->
						<div class="recent_properties_history">
							<h6><?php echo $latest['property_name'];?></h6>
							<ul>
								<li class="tooltip" title="East"><i class="fa fa-trello"></i><?php echo $latest['location'];?></li>
								<li class="tooltip" title="<?php echo $latest['rooms'];?> Bedroom"><i class="fa fa-bed"></i><?php echo $latest['rooms'];?> Br</li>
								<li class="tooltip" title="<?php echo $latest['bathrooms'];?> Bathroom"><i class="fa fa-wheelchair"></i><?php echo $latest['bathrooms'];?> Ba</li>
								<li class="tooltip" title="<?php echo $latest['property_size'];?> Sqm"><i class="fa fa-compress"></i><?php echo $latest['property_size'];?> Sqm</li>
							</ul>
							<a href="property-details.php?pro_id=<?php echo $latest['listing_id'];?>" class="tran3s">View This Property</a>
						</div> <!-- End .recent_properties_history -->
					</div> <!-- End .single_properties -->
				<?php } }?>
				</div> <!-- End #properties-slider -->
				<div class="customNavigation">
				  3/6
				</div>
			</div>
		</section> <!-- End .recent_properties -->
		<!-- End Recent Properties _______________________ -->

		<!-- Testimonial _________________________________ -->
		<div class="testimonial">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 slider">

						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="images/home/12.jpg" alt="images" class="img-responsive">
						    </div>

						    <div class="item">
						      <img src="images/home/12.jpg" alt="images" class="img-responsive">
						    </div>

						    <div class="item">
						      <img src="images/home/12.jpg" alt="images" class="img-responsive">
						    </div>
						  </div>
						</div> <!-- End #myCarousel -->

					</div> <!-- End .slider -->

					<div class="col-lg-9 col-lg-9 col-sm-12 col-xs-12">
						<div class="client_speach">
							<div id="client-slider" class="owl-carousel owl-theme">
								<div class="item">
									<p>Who do not know how to pursue pleasure rationally encounter labour consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
									<a href="#" class="tran3s">Mr.Kennedy & Family</a>
									<span>Real Estate Customer From 25 Dec 2014, ask suggestion <br>@kennedy_lifesource </span>
									<div class="clear_fix"></div>
								</div> <!-- End .item -->

								<div class="item">
									<p>Who do not know how to pursue pleasure rationally encounter labour consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
									<a href="#" class="tran3s">Mr.Kennedy & Family</a>
									<span>Real Estate Customer From 25 Dec 2014, ask suggestion <br>@kennedy_lifesource </span>
									<div class="clear_fix"></div>
								</div> <!-- End .item -->

								<div class="item">
									<p>Who do not know how to pursue pleasure rationally encounter labour consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
									<a href="#" class="tran3s">Mr.Kennedy & Family</a>
									<span>Real Estate Customer From 25 Dec 2014, ask suggestion <br>@kennedy_lifesource </span>
									<div class="clear_fix"></div>
								</div> <!-- End .item -->

							</div> <!-- End #client-slider -->
						</div> <!-- End .client_speach -->
					</div>
				</div> <!-- End .row -->
			</div> <!-- End .container -->
		</div> <!-- End .testimonial -->
		<!-- End Testimonial _____________________________ -->
		<!-- Popular Agents ______________________________ -->
		<section class="popular_agent container">
			<!-- Main_title__________ -->
			<div class="main_title">
				<h2>Our Popular Agents</h2>
			</div>
			<!-- End Main_title______ -->
			<div class="row agent_people">

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single_agent">

					<div class="agent_image">
						<div class="img_holder">
							<img src="images/home/13.jpg" alt="agent" class="img-responsive">
						</div> <!-- End .img_holder -->
						<div class="agent_name">
							<div class="name_holder">
								<h4>David Vigo Michel</h4>
								<i>Real Estate Agent</i>
							</div> <!-- End .name_holder -->
							<div class="button">
								<a href="agent-details.html" class="tran3s">My Listing</a>
							</div> <!-- End .button -->
							<div class="clear_fix"></div>
						</div> <!-- End .agent_name -->
					</div> <!-- End .agent_image -->

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

				</div> <!-- End .single_agent -->

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single_agent">

					<div class="agent_image">
						<div class="img_holder">
							<img src="images/home/14.jpg" alt="agent" class="img-responsive">
						</div> <!-- End .img_holder -->
						<div class="agent_name">
							<div class="name_holder">
								<h4>Jem Stone Lawrence</h4>
								<i>Real Estate Agent</i>
							</div> <!-- End .name_holder -->
							<div class="button">
								<a href="agent-details.html" class="tran3s">My Listing</a>
							</div> <!-- End .button -->
							<div class="clear_fix"></div>
						</div> <!-- End .agent_name -->
					</div> <!-- End .agent_image -->

					<div class="agent_contact">
						<a href="tel:86952-56-951"><i class="fa fa-phone" style="padding-right:10px;"></i> 86952-56-951</a>
						<a href="mailto:Jemstone@domain.com"><i class="fa fa-envelope-o" style="padding-right:7px;"></i> Jemstone@domain.com</a>
						<ul>
							<li class="tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="tran3s tooltip" title="Whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
						</ul>
					</div> <!-- End .agent_contact -->

				</div> <!-- End .single_agent -->


				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single_agent">

					<div class="agent_image">
						<div class="img_holder">
							<img src="images/home/15.jpg" alt="agent" class="img-responsive">
						</div> <!-- End .img_holder -->
						<div class="agent_name">
							<div class="name_holder">
								<h4>Mercy Van Desosa</h4>
								<i>Real Estate Agent</i>
							</div> <!-- End .name_holder -->
							<div class="button">
								<a href="agent-details.html" class="tran3s">My Listing</a>
							</div> <!-- End .button -->
							<div class="clear_fix"></div>
						</div> <!-- End .agent_name -->
					</div> <!-- End .agent_image -->

					<div class="agent_contact">
						<a href="tel:86952-56-951"><i class="fa fa-phone" style="padding-right:10px;"></i> 86952-56-951</a>
						<a href="mailto:Mercydesosa@domain.com"><i class="fa fa-envelope-o" style="padding-right:7px;"></i> Mercydesosa@domain.com</a>
						<ul>
							<li class="tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="tran3s tooltip" title="Whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
						</ul>
					</div> <!-- End .agent_contact -->

				</div> <!-- End .single_agent -->

			</div> <!-- End .agent_people -->

		</section> <!-- End .popular_agent -->


		<!-- End Popular Agents __________________________ -->


		<!-- Popular Areas _______________________________ -->
		<section class="popular_areas">
			<div class="container">

				<div class="main-title-center">
					<h2>Our Popular Areas</h2>
				</div> <!-- End .main-title-center -->
			</div> <!-- End .container -->

				<div class="area_gallery">
					<div>
						<div class="content img_large">
							<div class="img_holder">
								<img src="images/home/16.jpg" alt="images" class="img-responsive">
								<div class="overlay tran3s">
									<div class="text">
										<h2>36 Peacefull Rest Funeral Home</h2>
										<h4>California City, United States</h4>
										<a href="property-details.html" class="theme-btn">About Area</a>
									</div>
								</div> <!-- End .overlay -->
							</div>
						</div>
						<div class="content img_small">
							<div class="img_holder">
								<img src="images/home/17.jpg" alt="images" class="img-responsive">
								<div class="overlay tran3s">
									<div class="text">
										<h2>36 Peacefull Rest Funeral Home</h2>
										<h4>California City, United States</h4>
										<a href="property-details.html" class="theme-btn">About Area</a>
									</div>
								</div> <!-- End .overlay -->
							</div>
						</div>

						<div class="content img_small">
							<div class="img_holder">
								<img src="images/home/18.jpg" alt="images" class="img-responsive">
								<div class="overlay tran3s">
									<div class="text">
										<h2>36 Peacefull Rest Funeral Home</h2>
										<h4>California City, United States</h4>
										<a href="property-details.html" class="theme-btn">About Area</a>
									</div>
								</div> <!-- End .overlay -->
							</div>
						</div>


						<div class="content img_small space_fix_bottom">
							<div class="img_holder">
								<img src="images/home/19.jpg" alt="images" class="img-responsive">
								<div class="overlay tran3s">
									<div class="text">
										<h2>36 Peacefull Rest Funeral Home</h2>
										<h4>California City, United States</h4>
										<a href="property-details.html" class="theme-btn">About Area</a>
									</div>
								</div> <!-- End .overlay -->
							</div>
						</div>

						<div class="content img_small space_fix_bottom">
							<div class="img_holder">
								<img src="images/home/20.jpg" alt="images" class="img-responsive">
								<div class="overlay tran3s">
									<div class="text">
										<h2>36 Peacefull Rest Funeral Home</h2>
										<h4>California City, United States</h4>
										<a href="property-details.html" class="theme-btn">About Area</a>
									</div>
								</div> <!-- End .overlay -->
							</div>
						</div>

						<div class="clear_fix"></div>
					</div>
				</div> <!-- End .area_gallery -->
		</section> <!-- End .popular_areas -->

		<!-- End Popular Areas _______________________________ -->



		<!-- Featured Partners ____________________________ -->

		<section class="featured_partners container">
			<div class="main-title-center">
				<h2>Our Featured Partners</h2>
			</div> <!-- End .main-title-center -->
			<div class="partner_images">
				<ul class="uper_iamges">
					<li class="tran3s"><img src="images/home/p1.jpg" alt="images"></li>
					<li class="tran3s"><img src="images/home/p2.jpg" alt="images"></li>
					<li class="tran3s"><img src="images/home/p3.jpg" alt="images"></li>
					<li class="tran3s"><img src="images/home/p4.jpg" alt="images"></li>
				</ul>
				<div class="clear_fix"></div>
				<ul class="lower_iamges">
					<li class="tran3s"><img src="images/home/p5.jpg" alt="images"></li>
					<li class="tran3s"><img src="images/home/p6.jpg" alt="images"></li>
					<li class="tran3s"><img src="images/home/p7.jpg" alt="images"></li>
					<li class="tran3s"><img src="images/home/p8.jpg" alt="images"></li>
				</ul>
			</div>
		</section> <!-- End .featured_partners -->
		<!-- End Featured Partners ___________________________ -->
		<!-- Our Newsletter __________________________________ -->
		<section class="newsletter">
			<div class="overlay">
				<div class="container">
					<h2>Subscribe to Our Newsletter</h2>
					<p>Subscribe to Our Newsletter to Get Our Latest News About Real Estate, New <br>Projects, Properties, Agents and ect...</p>
					<form action="#">
						<div class="input_group">
							<input type="text" placeholder="Your Name">
							<input type="email" placeholder="Your Email">
							<button>Subscribe</button>
						</div> <!-- End .input_group -->
					</form>
				</div> <!-- End .container -->
			</div> <!-- End .overlay -->
		</section> <!-- End .newsletter -->

		<!-- End Our Newsletter ______________________________ -->
<?php include 'inc/masterFooter.php';?>