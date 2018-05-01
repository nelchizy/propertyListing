<?php 
	include "inc/master.php";

	$db = new Database();
	$email = session::get('email');
	$id = session::get('aff_id');
	$transactionId = session::get('transactionID');
	//$total = "10000";
	$total = session::get("amount");
	//$total = session::get('total');
	//$total = "10000";
?>
		<!-- Login / Register ___________________________ -->

		<div class="register_page container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 register_form">
					<!-- Main_title__________ -->
					<div class="main_title">
						<h2 style="margin-top:0;">Online Payment Gateway</h2>
					</div>
					<!-- End Main_title______ -->
					<p style="margin: 34px 0 33px 0;">This is a secure payment page, Power by Paystack</p>
					<!-- Register form -->
					<div class="register">
						<!--Put the code here -->
						<script src="https://js.paystack.co/v1/inline.js"></script>
						<div id="paystackEmbedContainer"></div>
						<script>
			  				PaystackPop.setup({
			   				key: 'pk_test_5637cdbae49c02c6bf4a3787a442f6234771571a',
			  				email: '<?php echo $email; ?>',
			   				amount: '<?php echo $total *100; ?>',
			   				reference: '<?php echo $transactionId; ?>',
			   				container: 'paystackEmbedContainer',
			   				callback: function(response){
			   	   			window.location = "paymentRef.php?paystactTranx="+response.reference+"&transaction_id=<?php echo $transactionId; ?>"+"&custId=<?php echo $id; ?>";
			   	   				//console.log(response)
			        		//alert('successfully subscribed. transaction ref is ' + response.reference);
			    			},
			  			});
					</script>
						<div class="clear_fix"></div>
					</div> <!-- End .register -->
					
				</div> <!-- End .register_form -->

<!-- _______________________________________________ Sidebar ________________________________________________ -->
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar_style_two">
						<!-- _______________________Property Search option________________________ -->
						<div class="preperty_search">
							<h4>Property Search</h4>
							<form action="#" method="get">

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
		<!-- End Login / Register _______________________ -->
<?php include "inc/masterFooter.php";?>