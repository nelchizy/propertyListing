<?php
	include 'inc/header.php';
	$country = new Country();
?>
		<!-- Inner Banner ________________________________ -->
		
		<section id="inner_banner">
			<div class="overlay">
				<div class="container">
					<div class="title">
						<h2>Listing Agent</h2>
						<ul>
							<li><a href="index">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
							<li>List Agent</li>
						</ul>
					</div> <!-- End .title -->
				</div> <!-- End .container -->
			</div> <!-- End .overlay -->
		</section> <!-- End .inner_banner -->
		<!-- End Inner Banner ___________________________ -->

		<!-- Contact Us page content ____________________ -->
		
		<section class="contact_us_content container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<!-- ___________________________ Send message ________________________ -->
					<div class="send_message">
						<!-- Main_title__________ -->
						<div class="main_title">
							<h2 style="margin-top:63px;">Listing Free Agent</h2>
						</div>
						<!-- End Main_title______ -->

						<form action="addFreeUser.php" method="post" class="form-validation">
							<div class="row">
							<h2>Corporate Account?</h2>
								<small>This is an optional section</small>
							<hr>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="text" placeholder="Company name" name="company-name" class="form-control">
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="text" placeholder="Office Address" name="company-address" class="form-control">
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="email" placeholder="Company Email" name="company-email" class="form-control">
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="number" placeholder="Company phone number" name="company-phone" class="form-control">
							</div>
						</div>
						<h3>Personal information</h3>
							<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="text" placeholder="First name" name="first-name" class="form-control">
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="text" placeholder="Last name" name="last-name" class="form-control">
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<input type="file" placeholder="First name" name="profile" class="form-control">
								<label class="form-control">Profile Picture</label>
							</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<input type="email" placeholder="personal@email.com" name="person-email" class="form-control">
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<input type="number" placeholder="Your number: e.g 0802" name="phone" class="form-control">
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<input type="password" placeholder="Your password" name="passKey" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" name="gender">
										<option>--Select gender--</option>
										<option value="1">Male</option>
                                        <option value="2">Female</option>
									</select>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" id="country" name="country_id">
										<option>Select Country</option>
                                            <?php
                                            $getAllCountry = $country->getAllCountry();
                                            if($getAllCountry){
                                              while ($rows = $getAllCountry->fetch_assoc()){?>
                                              <option value="<?php echo $rows['id'];?>"><?php echo $rows['name'];?></option>
                                              <?php } }?>
                                    </select>
                                        <label class="form-label">Select Country</label>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" id="allStateList" name="state_id">
                                	</select>
                                	<label class="form-label">Select State</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<select class="form-control" id="townList" name="city_id">
                                    </select>
                                        <label class="form-label">Select City</label>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6">
									<input type="text" class="form-control" name="useraddress" placeholder="124/127 ikota, your address here">
								</div>
							</div>
							<button type="submit" class="btn btn-success btn-lg pull-right" name="freeUser">Create Account</button>
						</form>


						<div class="alert_wrapper" id="alert_success">
							<div id="success">
								<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
								<div class="wrapper">
				                	<p>Your message was sent successfully!</p>
				                </div>
				            </div>
				        </div> <!-- End of .alert_wrapper -->
				        <div class="alert_wrapper" id="alert_error">
				            <div id="error">
				            	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				            	<div class="wrapper">
				                	<p>Something went wrong, try refreshing and submitting the form again.</p>
				                </div>
				            </div>
				        </div> <!-- End of .alert_wrapper -->
					</div>
					
				</div>  <!-- End of column -->
<!-- _______________________________________________ Sidebar ________________________________________________ -->
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar_style_two">
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

					</div> <!-- End .sidebar_style_two -->
				</div> <!-- End of column -->
			</div> <!-- End .row -->
		</section> <!-- End .contact_us_content -->

		<!-- End Contact Us page content ________________ -->

<script type="text/javascript">

    jQuery("#country").on("change",function(){
      var selectedId = $(this).val();

      jQuery("#allStateList").empty();
      
      if(selectedId == "Select Country")
      {
        alert("Please select a country");
        return;
      }

      getallCountryById(selectedId)
    });

    function getallCountryById(countryId)
    {
      console.log("getting country");
      
      var data = {"countryId":countryId}
          
      $.post("/eucrealtor/ajax/jsonCountry.php",data,function(response,status){
        if(status == "success")
        {
          jQuery("#allStateList").append("<option>Select State</option>");
          
          $.each(response,function(index,result){
            var id = result.id;
            var name = result.name;

            jQuery("#allStateList").append("<option value='" + id +"'>" + name + "</option>")
          });
        }
      });
    }

  </script>
 
  
  <script type="text/javascript">

    jQuery("#allStateList").on("change",function(){
      var selectedId = $(this).val();

      jQuery("#townList").empty();
      
      if(selectedId == "Select Town")
      {
        alert("Please select a LGA");
        return;
      }

      getallTownById(selectedId)
    });

    function getallTownById(stateId)
    {
      console.log("getting Town");
      
      var data = {"stateId":stateId}
          
      $.post("/eucrealtor/ajax/jsonCity.php",data,function(data,status){
        if(status == "success")
        {
          jQuery("#townList").append("<option>Select City</option>");
          
          $.each(data,function(index,result){
            var id = result.id;
            var name = result.name;

            jQuery("#townList").append("<option value='" + id +"'>" + name + "</option>")
          });
        }
      });
    }

  </script>

<?php
	include 'inc/footer.php';
?>