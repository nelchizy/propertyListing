<?php
	include "inc/master.php";
	include 'DAO/ContactAgent.php';
	$db = new Database();
	if (!isset($_GET['agent_id']) || $_GET['agent_id'] == NULL) {
		echo "<script>window.location = '404.php'; </script>";
	}else{
		$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['agent_id']);
	}

	$contact = new ContactAgent();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agentMsg'])){
		$insertContact = $contact->addAgentConatct($_POST);
	}
?>
		<!-- Inner Banner ________________________________ -->
		
		<section id="inner_banner">
			<div class="overlay">
				<div class="container">
					<div class="title">
						<h2>
							<?php
								$sql = "SELECT * FROM affiliate WHERE aff_id = $id";
								$result1 = $db->select($sql)->fetch_assoc();
								$fn = $result1['first_name'];
								$ln = $result1['last_name'];
								$name = $fn.' '.$ln;
								echo $name;
							?>
						</h2>
						<ul>
							<li><a href="index">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
							<li>Agent Detail</li>
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
									<option>5</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">Price List</option>
									<option>20,000$</option>
									<option>25,000$</option>
									<option>30,000$</option>
									<option>35,000$</option>
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
									<option>5</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form"> 
								<select class="selectmenu">
									<option selected="selected">Price List</option>
									<option>20,000$</option>
									<option>25,000$</option>
									<option>30,000$</option>
									<option>35,000$</option>
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



		<!-- Agent details _________________________________ -->

		<div class="agent_details_page container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
					
					<!-- Agnecy details -->
					<div class="agent_and_agency_details">
						<div class="img_holder">
							<img src="<?php echo $result1["affiliate_passport"];?>" alt="<?php echo $result1["first_name"];?>" class="img-responsive">
						</div>
						<div class="info">
							<!-- Main_title2__________ -->
							<div class="main_title2">
								<h3><?php echo $name; ?></h3>
							</div>
							<!-- End Main_title2______ -->
							<p>
								<?php
									$postCount = $result1['post_count'];
									$numb = $postCount - 1;
									echo $numb;
								?> 
							properties for Sale</p>
							<span><b>Dealing In:</b> Independent House/Villa, Residential Apartment & Commericial Space</span>
							<span><b>Locality:</b> Nigeria</span>

							<ul>
								<li><a href="#"><i class="fa fa-phone" style="margin-right: 10px;"></i> 
									<?php
										$status = $result1['subscription_status'];
										if($status != 'FREE'){
											$number = $result1['phone_number'];
											echo $number;
										}
										if($status == "FREE"){
											echo "FREE USER";
										}
									?></a></li>
								<li><a href="#"><i class="fa fa-envelope-o" style="margin-right: 8px;"></i>
									<?php
										$status = $result1['subscription_status'];
										if($status != 'FREE'){
											$email = $result1['email'];
											echo $email;
										}
										if($status == "FREE"){
											echo "FREE USER";
										}
									?>
								</a></li>
								<li>
									<?php
										$status = $result1['subscription_status'];
										if($status != 'FREE'){
											$facebook = $result1['facebook'];
											echo "<a href='https://facebook.com/$facebook'><i class='fa fa-facebook' style='margin-right: 13px;'></i> facebook.com/$facebook</a>";
										}
										if($status == "FREE"){
											echo "<i class='fa fa-facebook' style='margin-right: 13px;'>&nbsp;&nbsp;&nbsp;FREE USER</i>";
										}
									?>
							</li>
							</ul>

							<ul class="space_fix">
								<li>
									<?php
										$status = $result1['subscription_status'];
										if($status != 'FREE'){
											$instagram = $result1['instagram'];
											echo "<a href='https://instagram.com/$instagram'><i class='fa fa-facebook' style='margin-right: 13px;'></i> instagram.com/$instagram</a>";
										}
										if($status == "FREE"){
											echo "<i class='fa fa-instagram' style='margin-right: 13px;'>&nbsp;&nbsp;&nbsp;FREE USER</i>";
										}
									?>
								</li>
								<li>
									<?php
										$status = $result1['subscription_status'];
										if($status != 'FREE'){
											$address = $result1['residential_address'];
											echo '<i class="fa fa-map-marker" style="margin-right: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;</i>';
											echo $address;
										}
										if($status == "FREE"){
											echo '<i class="fa fa-map-marker" style="margin-right: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;FREE USER</i>';
										}
									?>
								</li>
							</ul>
						</div> <!-- End .info -->
						<div class="clear_fix"></div>
					</div> <!-- End .agent_and_agency_details -->

					<!-- ___________________________ Map location _________________________ -->
					<div class="map_location">
						<!-- Main_title__________ -->
						<div class="main_title">
							<h2 style="margin-top:0">My Profile</h2>
						</div>
						<!-- End Main_title______ -->
						<p style="margin-top:34px;"><?php echo $result1['profile'];?></p>
					</div> <!-- End .map_location -->
					<!-- Recent Properties 2 ___________________________ -->
		
					<section class="recent_properties_two">
							<div class="title_sapce_fix">
								<!-- Main_title__________ -->
								<div class="main_title">
									<h2>My Listing</h2>
								</div>
								<!-- End Main_title______ -->
							</div>

						<div class="row properties_item_two">
							<?php
    
                    $max = 10;
                    # Maximum Numbers Per Page  
                    $maxNum = 7;
                    
                    # Number of Total Results in our Table
                    $sql = "SELECT property_listing.*,  sub_type.sub_type_name FROM property_listing INNER JOIN sub_type
                            ON property_listing.sub_type_id = sub_type.sub_id WHERE affiliate_id = '$id' ORDER BY property_listing.listing_id DESC";
                    
                    
                    $numQuery = $db->getLink()->query($sql) or die( mysqli_error() );
                    $total = mysqli_num_rows($numQuery);
                    
                    # We Need to know for pagination, our Maximum per page, our Total per page, our Maximum numbers to show (false to disable), and an optional Parameter
                    
                    $page = 1;
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }
                    
                    $nav = new Pagination($max, $total, $page, $maxNum);
                    
                    $modQuery = $sql." LIMIT ".$nav->start().",".$max;
                    
                    # Here we run the Query and Limit our Results based on the pagination
                    $query = $db->getLink()->query($modQuery) or die( mysqli_error() );
                    
                    $index = 1;
                    while($result = mysqli_fetch_object($query))
                    {
                        ?>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="single_properties">
									<span class="sale">SALE</span>
									<a href="property-details.php?"><h4><?php echo $result->location;?> - <?php echo $result->latitude;?></h4></a>
									<div id="myCarousel1" class="carousel slide" data-ride="carousel">
										  <!-- Wrapper for slides -->
										  <div class="carousel-inner" role="listbox">
										    <div class="item active">
										    	<div class="img_holder">
													<a href="<?php echo $result->property_img1;?>" class="fancybox">
														<img src="<?php echo $result->property_img1;?>" alt="<?php echo $result->property_name;?>" class="img-responsive">
													</a>
												</div> <!-- End .img_holder -->
											</div>

										    <div class="item">
										    	<div class="img_holder">
													<a href="<?php echo $result->property_img2;?>" class="fancybox">
														<img src="<?php echo $result->property_img2;?>" alt="<?php echo $result->property_name;?>" class="img-responsive">
													</a>
												</div> <!-- End .img_holder -->
											</div>

										    <div class="item">
										    	<div class="img_holder">
													<a href="<?php echo $result->property_img3;?>" class="fancybox">
														<img src="<?php echo $result->property_img3;?>" alt="<?php echo $result->property_name;?>" class="img-responsive">
													</a>
												</div> <!-- End .img_holder -->
											</div>
										  </div> <!-- End .carousel-inner -->

										  <!-- Left and right controls -->
										  <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
										    <i class="fa fa-angle-left"></i>
										    <span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
										    <i class="fa fa-angle-right"></i>
										    <span class="sr-only">Next</span>
										  </a>
									</div> <!-- End .carousel slide -->
									<div class="property_details">
										<h4>&#8358; <?php echo number_format($result->actual_price);?></h4>
										<span><?php echo $result->property_name;?></span>
									</div>
									<ul>
										<li class="tooltip" title="East"><i class="fa fa-trello"></i><?php echo $result->location;?></li>
										<li class="tooltip" title="<?php echo $result->rooms;?> Bedroom"><i class="fa fa-bed"></i><?php echo $result->rooms;?> Br</li>
										<li class="tooltip" title="<?php echo $result->bathrooms;?>  Bathrooms"><i class="fa fa-wheelchair"></i><?php echo $result->bathrooms;?> Ba</li>
										<li class="tooltip" title="<?php echo $result->property_size;?> Sqm"><i class="fa fa-compress"></i><?php echo $result->property_size;?> Sqm</li>
									</ul>
								</div> <!-- End .single_properties -->
							</div>
					<?php }?>
						</div> <!-- End .properties_item_two -->
					</section> <!-- End .recent_properties_two -->
					<!-- End  Recent Properties 2 ________________________ -->


					<!-- _____________________________ Send Message Us ________________________ -->

					<div class="leave_reply send_message">
						<!-- Main_title__________ -->
						<div class="main_title">
							<h2>Send Me Message</h2>
						</div>
						<!-- End Main_title______ -->

						<form action="" method="post">
								<input type="hidden" name="agent_id" value="<?php echo $id;?>">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="full_name" placeholder="Your Name">
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="sEmail" placeholder="Your Email Address">
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<input type="text" name="sPhone" placeholder="Phone">
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea name="sMsg" placeholder="Message Here..."></textarea>
									</div>
								</div>
								<button class="tran3s" type="submit" name="agentMsg">Send Message</button>
							</form>
					</div> <!-- /leave_reply -->

				</div> <!-- End of colmun -->

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
		</div>  <!-- End .agent_details_page -->


		<!-- End Agency details _________________________ -->



		<!-- Footer __________________________________________ -->
<?php include 'inc/masterFooter.php';?>