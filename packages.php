<?php
    include 'inc/master.php';
    include "DAO/BasicUser.php";
    include "DAO/PremiumUser.php";
    include "DAO/GoldUser.php";
    include "DAO/platinumUser.php";
    $package = new BasicUser();
    $premium = new PremiumUser();
    $gold    = new GoldUser();
    $platinum = new PlatinumUser();
?>
        <!-- Inner Banner ________________________________ -->
        <section id="inner_banner">
            <div class="overlay">
                <div class="container">
                    <div class="title">
                        <h2>Pricing Plans</h2>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li>Pricing Plans</li>
                        </ul>
                    </div> <!-- End .title -->
                </div> <!-- End .container -->
            </div> <!-- End .overlay -->
        </section> <!-- End .inner_banner -->
        <!-- End Inner Banner ____________________________ -->
        <!-- Pricing plans Table _________________________ -->
        <div class="pricing_plan_table container">
            <!-- Main_title__________ -->
                <div class="main_title">
                    <h2 style="margin-top:0;">Our Pricing Plans</h2>
                </div>
                <!-- End Main_title______ -->
                <p style="margin: 34px 0 33px 0;">Real Estate agents are Property consisting of land and the buildings on it, along with its seds naturals resources such seds as crops, minerals, or water; immovable property of this nature.Since this was a limited seds unit auction, we had approached by Developers to release incremental units to fulfill the demands at a stepped up cut-off price.Long fact that a reader will be undo ut distracted by the readable sed content of a page when looking und at its layouts.</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single_price_table">
                            <?php
                                $getPackage = $package->getFreePackageBasic();
                                if($getPackage){
                                while($row = $getPackage->fetch_assoc()){?>
                            <h3 class="tran3s"><?php echo $row['package_name'];?></h3>
                            <span class="tran3s"><sup>&#8358;</sup> <?php echo number_format($row['price']);?> <sub>/Month</sub></span>
                            <form action="" method="post">
                                <?php
                                    $token = md5(uniqid(rand(), TRUE));
                                    session::set("token",$token);
                                    session::set("token_time", time());
                                ?>
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                                <input type="hidden" name="<?php echo $row['id'];?>">
                            </form>
                            <?php } }?>
                            <ul>
                                <li>2 Properties</li>
                                <li>No Featured Properties</li>
                                <li>No Top Properties</li>
                                <li>No Agents Profile</li>
                                <li>Email  Support</li>
                            </ul>
                            <a href="basicPackage" class="tran3s">Get Started</a>
                        </div> <!-- End .single_price_table -->
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single_price_table">
                            <?php
                                $getPremium = $premium->getPremiumPackage();
                                if($getPremium){
                                while($rows = $getPremium->fetch_assoc()){?>
                            <h3 class="tran3s"><?php echo $rows['package_name'];?></h3>
                            <span class="tran3s"><sup>&#8358;</sup> <?php echo number_format($rows['price']);?> <sub>/Month</sub></span>
                            <form>
                                <input type="hidden" name="<?php echo $rows['id'];?>">
                            </form>
                            <?php } }?>
                            <ul>
                                <li>8 Properties</li>
                                <li>4 Featured Properties</li>
                                <li>6 Top Properties</li>
                                <li>6 Agents Profile</li>
                                <li>8 Agencies Profile</li>
                                <li>Unlimited Support</li>
                            </ul>
                            <a href="premiumPackage" class="tran3s">Get Started</a>
                        </div> <!-- End .single_price_table -->
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single_price_table">
                            <?php
                                $getGold = $gold->getGoldPackage();
                                if($getGold){
                                while($result = $getGold->fetch_assoc()){?>
                            <h3 class="tran3s"><?php echo $result['package_name'];?></h3>
                            <span class="tran3s"><sup>&#8358;</sup> <?php echo number_format($result['price']);?> <sub>/Month</sub></span>
                            <?php } }?>
                            <ul>
                                <li>16 Properties</li>
                                <li>8 Featured Properties</li>
                                <li>12 Top Properties</li>
                                <li>12 Agents Profile</li>
                                <li>16 Agencies Profile</li>
                                <li>Unlimited Support</li>
                            </ul>
                            <a href="goldPackage" class="tran3s">Get Started</a>
                        </div> <!-- End .single_price_table -->
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single_price_table">
                            <?php
                                $getPlatinum = $platinum->getPlatinumPackage();
                                if($getPlatinum){
                                    while($result = $getPlatinum->fetch_assoc()){?>
                            <h3 class="tran3s"><?php echo $result['package_name'];?></h3>
                            <span class="tran3s"><sup>&#8358;</sup> <?php echo number_format($result['price']);?> <sub>/3 Month</sub></span>
                            <?php } }?>
                            <ul>
                                <li>Unlimited Properties</li>
                                <li>16 Featured Properties</li>
                                <li>24 Top Properties</li>
                                <li>50 Agents Profile</li>
                                <li>50 Agencies Profile</li>
                                <li>Unlimited Support</li>
                            </ul>
                            <a href="platinumPackage" class="tran3s">Get Started</a>
                        </div> <!-- End .single_price_table -->
                    </div>
                </div> <!-- End .row -->
        </div> <!-- End .pricing_plan_table -->
        <!-- End Pricing plans Table ____________________ -->
<?php include "inc/masterFooter.php"; ?>