<?php
	include "inc/master.php";
	//include ("config.php");
    //include ("Database.php");
    include "DAO/PlanLogin.php";
    //include 'mailsMessage/AdminLoginNotification.php';
    $user = new PlanLogin();
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['planLogin'])){
        $login = $user->planLogin($_POST);
    }
?>
		<!-- Login / Register ___________________________ -->
		<div class="register_page container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 register_form">
					<!-- Main_title__________ -->
					<div class="main_title">
						<h2 style="margin-top:0;">Join With Realtor-monster</h2>
						<?php if(isset($login)){ echo $login; }  ?>
					</div>
					<!-- End Main_title______ -->
					<p style="margin: 34px 0 33px 0;">Login to choose your desired Plan</p>

					<!-- Login form -->
					<div class="login">
						<form action="" method="post">
							<h6>Login to choose your plan </h6>
							<div class="single_form space_fix">
								<label>Email</label>
								<input type="email" name="userEmail" placeholder="realtor@me.com">
							</div> <!-- End .single_form -->

							<div class="single_form">
								<label>Password</label>
								<input type="password" name="planPass">
							</div> <!-- End .single_form -->

							<button type="submit" name="planLogin" class="tran3s">Login Now</button>
						</form>
						<div class="single_checkbox">
							<input type="checkbox" id="remember">
							<label for="remember">Remember me</label>
						</div> <!-- End .single_checkbox -->
						<a href="#">Forgot Password?</a>
						<div class="clear_fix"></div>
					</div> <!-- End .login -->
					
				</div> <!-- End .register_form -->


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
					</div> <!-- End .sidebar_style_two -->
				</div>
			</div> <!-- End .row -->
		</div> <!-- End .register_page -->
<?php include 'inc/masterFooter.php'; ?>

