<?php
	include "inc/master.php";
	$db = new Database();

?>
		
		<section id="inner_banner">
			<div class="overlay">
				<div class="container">
					<div class="title">
						<h2>Agents listing</h2>
						<ul>
							<li><a href="index">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
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
									<option>30,000$</option>
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
									<option>30,000$</option>
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

		<!-- Agent listing page ____________________________ -->
		<div class="agent_listing_sidebar_page container popular_agent popular_agent_two">
				<div class="agent_listing_sidebar_page_content">
					<!-- Main_title__________ -->
						<div class="main_title">
							<h2 style="margin-top:0">Our Best Agents </h2>
						</div>
						<!-- End Main_title______ -->
						<p style="margin-top:34px; margin-bottom:-8px;">Real Estate agents are Property consisting of land and the buildings on it, along with its seds naturals resources such seds as crops, minerals, or water; immovable property of this nature.Since this was a limited seds unit auction, we had approached by Developers to release incremental units to fulfill the demands at a stepped up cut-off price. Shortlisteed bidders will be called for unit allocation on First Come First Serve Basis. There are many variations of passages slightly believable.</p>
					<div class="row agent_people">
						<?php
    
                    $max = 10;
                    # Maximum Numbers Per Page  
                    $maxNum = 7;
                    
                    # Number of Total Results in our Table
                    $sql = "SELECT * FROM affiliate ORDER BY aff_id ASC";
                    
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
                    {?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 single_agent">
							<div class="agent_image">
								<div class="img_holder">
									<img src="<?php echo $result->affiliate_passport;?>" alt="<?php echo $result->first_name;?>" class="img-responsive">
								</div> <!-- End .img_holder -->
								<div class="agent_name">
									<div class="name_holder">
										<h4>
											<?php
												$fn = $result->first_name;
												$ln = $result->last_name;
												$name = $fn.' '.$ln;
												echo $name;
											?>
										</h4>
										<i>RealtorMonster Estate Agent</i>
									</div> <!-- End .name_holder -->
									<div class="button">
										<a href="agent-details.php?agent_id=<?php echo $result->aff_id;?>" class="tran3s"><i class="fa fa-building"></i></a>
										<span class="tran3s"><i>My Listing</i> <i class="fa fa-caret-down"><?php
											$postCount = $result->post_count;
											$numb -= $postCount;
											echo $numb; 
										?>
											
										</i></span>
									</div> <!-- End .button -->
									<div class="clear_fix"></div>
								</div> <!-- End .agent_name -->
							</div> <!-- End .agent_image -->
							<div class="agent_contact">
								<a href="tel:<?php echo $result->phone_number;?>"><i class="fa fa-phone" style="padding-right:10px;"></i> <?php echo $result->phone_number;?></a>
								<a href="mailto:<?php echo $result->email;?>"><i class="fa fa-envelope-o" style="padding-right:7px;"></i> <?php echo $result->email;?></a>
								<ul>
									<li class="tran3s tooltip" title="Facebook"><a href="https://www.facebook.com/<?php echo $result->facebook;?>"><i class="fa fa-facebook"></i></a></li>
									<li class="tran3s tooltip" title="Instagram"><a href="https://www.instagram.com/<?php echo $result->instagram;?>"><i class="fa fa-instagram"></i></a></li>
									<li class="tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="tran3s tooltip" title="Whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
								</ul>
							</div> <!-- End .agent_contact -->
						</div> <!-- End .single_agent -->
						<?php } ?>
					</div> <!-- End .agent_people -->
				</div> <!-- End .agent_listing_sidebar_page_content -->
		</div> <!-- End .agent_listing_sidebar_page -->
		<!-- End Agent listing page _________________________ -->
		<!-- Footer __________________________________________ -->
<?php
	include "inc/masterFooter.php";
?>