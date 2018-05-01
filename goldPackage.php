<?php
    include 'inc/master.php';
    //include "DAO/BasicUser.php";
    //include "DAO/PremiumUser.php";
    include "DAO/PlanSubscription.php";
    include "DAO/GoldUser.php";
   // $package = new BasicUser();
    $premium = new GoldUser();
   $premiumPackage = new PlanSubscription();

   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['getPlan']) ) {
        $insert = $premiumPackage->subscribeGold($_POST);
  }
?>
        <!-- Inner Banner ________________________________ -->
        <section id="inner_banner">
            <div class="overlay">
                <div class="container">
                    <div class="title">
                        <h2>Prefared Plan</h2>
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
                <p style="margin: 34px 0 33px 0;">Your Prefared Package</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single_price_table">
                            <?php
                                $getGold = $premium->getGoldPackage();
                                if($getGold){
                                while($rows = $getGold->fetch_assoc()){?>
                            <h3 class="tran3s"><?php echo $rows['package_name'];?></h3>
                            <span class="tran3s"><sup>&#8358;</sup> <?php echo number_format($rows['price']);?> <sub>/Month</sub></span>
                            <form action="" method="post">
                                <?php
                                    ;
                                ?>
                                <input type="hidden" name="name" value="<?php echo $rows['package_name'];?>">
                                <input type="hidden" name="total" value="<?php echo $rows['price'] ?>">
                                <input type="hidden" name="<?php echo $id = session::get("aff_id");?>">
                                <input type="hidden" name="package_id" value="<?php echo $rows['id'];?>">
                                <button type="submit" name="getPlan" class="btn btn-primary pull-right">Buy Plan</button>
                            </form>
                            <?php } }?>
                            
                        </div> <!-- End .single_price_table -->
                    </div>

                </div> <!-- End .row -->
        </div> <!-- End .pricing_plan_table -->
        <!-- End Pricing plans Table ____________________ -->
<?php include "inc/masterFooter.php"; ?>