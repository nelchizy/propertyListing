<?php
	//include_once 'lib/Session.php';
	//include 'inc/check_user_login_access.php';
    include "agentInc/agentTop.php";
    //session::checkSession();
    $agent_id = Session::get("userId");

?>
        <div class="admin-content">
            <div class="admin-content-inner">
                <?php include 'agentInc/header.php'; ?>
                <div class="admin-content-main">
                    <div class="admin-content-main-inner">
                        <div class="container-fluid">
         <div class="admin-content-main col-sm-12 col-md-12 col-lg-12">
            <div class="admin-content-main-inner">
                <div class="container-fluid">
                    <h1 class="page-header">Properties</h1>

    <table class="table table-simple">
        <thead>
            <tr>
                <th class="min-width nowrap"></th>
                <th class="min-width nowrap">ID</th>
                <th class="min-width nowrap">Photo</th>
                <th>Title</th>
                <th>Price</th>
                <th>Property Type</th>
                <th>Property Category</th>
                <th>Year Built</th>
                <th class="min-width nowrap"></th>
            </tr>
        </thead>
        <tbody>
    <?php
    
                    $max = 10;
                    # Maximum Numbers Per Page  
                    $maxNum = 7;
                    
                    # Number of Total Results in our Table
                    $sql = "SELECT property_listing.*,  sub_type.sub_type_name FROM property_listing INNER JOIN sub_type
                            ON property_listing.sub_type_id = sub_type.sub_id WHERE affiliate_id = '$agent_id' ORDER BY property_listing.listing_id DESC";
                    
                    
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
            <tr>
                <td class="min-width nowrap"><input type="checkbox"></td>
                <td class="semi-bold"><?php echo $result->propert_id;?></td>
                <td>
                    <img src="<?php echo $result->property_img1;?>" width="40" alt="">
                </td>
                <td>
                    <a href="viewDetail.php?id=<?php echo $result->listing_id;?>"><?php echo $result->property_name;?></a>
                </td>
                <td>&#8358; <?php echo number_format($result->actual_price);?></td>
                <td>
                    <?php
                    $id = $result->type_id;
                    $sql = "SELECT * FROM product_type WHERE type_id = $id AND is_enabled = '1'";
                    $res_sql = $db->select($sql)->fetch_assoc();
                    $name = $res_sql['type_name'];
                    echo $name;
                    ?>
                </td>
                <td>
                    <?php
                        $id = $result->sub_type_id;
                        $sql = "SELECT * FROM sub_type WHERE sub_id = $id AND is_enabled = '1'";
                        $res_sql = $db->select($sql)->fetch_assoc();
                        $name = $res_sql['sub_type_name'];
                        echo $name;
                    ?>
                </td>
                <td><?php echo $result->year_built;?></td>
                <td class="min-width nowrap"><a href="editList.php?list_id=<?php echo $result->listing_id;?>" class="btn-standard">Edit</a> <a href="?delList=<?php echo $result->listing_id;?>" class="btn-alert">Delete</a></td>
            </tr>
    <?php }?>
    </tbody>
    </table>

    <div class="center">
    <ul class="pagination">
        <li><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="active"><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
    </ul>
</div><!-- /.center -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.admin-content-main-inner -->
                </div><!-- /.container-fluid -->


                        </div><!-- /.container-fluid -->
                    </div><!-- /.admin-content-main-inner -->
</div><!-- /.container-fluid -->

<?php
    include 'agentInc/footer.php';
?>