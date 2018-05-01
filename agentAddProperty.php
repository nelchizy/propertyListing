<?php
	//include 'config/config.php';
	//include 'lib/Database.php';
    include "agentInc/agentTop.php";
    include "DAO/UserAddProperty.php";
        session::checkSession();
    $cat = new Category();
    $property = new UserAddProperty();
     $cat = new Category();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['finish']) ) {
      $insertProperty = $property->userAddProperty($_POST, $_FILES);
  }
?>
<script type="text/javascript">

        function showMe (it, box) {
          var vis = (box.checked) ? "block" : "none";
          document.getElementById(it).style.display = vis;
        }
        function clickMe(it, box) {
          var second = (box.checked) ? "block" : "none";
          document.getElementById(it).style.display = second;
        }
        function clickMe1(it, box) {
          var second1 = (box.checked) ? "block" : "none";
          document.getElementById(it).style.display = second1;
        }
</script>
<div class="admin-content">
    <div class="admin-content-inner">
      <?php include 'agentInc/header.php'; ?>
       <div class="admin-content-main">
            <div class="admin-content-main-inner">
                <h2 class="page-header">Add Property</h2>
                <div class="wizard-container">
        <div class="card wizard-card" data-color="green" style="padding: 10px; margin:10px;">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Basic Property Information</h3>
                <?php
                    if(isset($insertProperty)){
                        echo $insertProperty;
                    }
                ?>
                <div class="tab-content">
                        <div class="tab-pane active" id="about">
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <select class="form-control" name="catId" id="category_id">
                                        <option>--Property Type--</option>
                                        <?php
                                              $getProType = $cat->getAllType();
                                              if($getProType){
                                                while($row = $getProType->fetch_assoc()){
                                            ?>
                                            <option value="<?php echo $row['type_id'];?>"><?php echo $row['type_name'];?></option>
                                            <?php } }?>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <select class="form-control" name="subcatId" id="subCategoryList">
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Property Name <small>(required)</small></label>
                                    <input name="propertyName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Property Location</label>
                                    <input name="location" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Latitude</label>
                                    <input name="lat" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Longitude</label>
                                    <input name="long" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Year Built</label>
                                    <input name="yearbuilt" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Property Size</label>
                                    <input name="size" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Material Use</label>
                                    <input name="material" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Property Description</label>
                                    <textarea name="description" cols="30" rows="3" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        <h3>More Property Details</h3>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="picture-container">
                                <div class="picture">
                                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                <input type="file" id="wizard-picture" name="property_img1">
                                <h6>Choose Property Picture</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="picture">
                                <input type="file" id="" name="property_img2">
                                <h6>Choose Property Picture</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="picture">
                                <input type="file" id="" name="property_img3">
                                <h6>Choose Property Picture</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="picture">
                                <input type="file" id="" name="property_img4">
                                <h6>Choose Property Picture</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="picture">
                                <input type="file" id="" name="property_img5">
                                <h6>Choose Property Picture</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="material-icons">&#8358;</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Price from</label>
                                    <input name="price_from" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="material-icons">&#8358;</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Price</label>
                                    <input name="price" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="material-icons">Material</i>
                                </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">Cottage Structure</label>
                                    <input name="cottage" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    <div class="row">
                    </div>
                    <h3>Flooring/Walls Information</h3>
                    <div class="col-sm-4">
                        <label for="md_checkbox_22">Compulsory Section? <small style="color: red;">Check for more details</small></label>
                        <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" onclick="clickMe('div2',this)" />
                    </div>
                    <div id="div2" style="display:none">
                           <div class="col-sm-10 col-md-10 col-lg-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Flooring Type</label>
                                <input name="floor" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Walls Type</label>
                                <input name="walls" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Windows Type</label>
                                <input name="windows" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Number of Rooms</label>
                                <input name="rooms_no" type="number" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Number of Bathrooms</label>
                                <input name="bathrooms" type="number" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Number of Floors</label>
                                <input name="floor_num" type="number" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Number of Doors</label>
                                <input name="door_num" type="number" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Roofing Type</label>
                                <input name="roof" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Electrical Wiring Status</label>
                                <input name="electric" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                            <div class="form-group label-floating">
                                <label class="control-label">Number of Garage</label>
                                <input name="garage" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                    </div><!-- ./Row.. -->
                    <div class="row">
                    </div>
                    <h3>Facilities</h3>
                    <div class="col-sm-4">
                        <label for="md_checkbox_22">Compulsory Section? <small style="color: red;">Check for more details</small></label>
                        <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" onclick="clickMe1('div3',this)" />
                    </div>
                    <div id="div3" style="display:none">
                        <div class="tab-pane" id="address">
                            <div class="row">
                                <div class="col-sm-7 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                    <label class="control-label">International School</label>
                                    <input type="text" name="interSchool" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                    <label class="control-label">Super Market</label>
                                    <input type="text" name="superMarket" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Worship Place</label>
                                        <input type="text" name="worship" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Restaurant</label>
                                        <input type="text" name="restaurant" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Bust Stop</label>
                                        <input type="text" name="bus_stop" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Railway</label>
                                        <input type="text" name="railway" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Airport</label>
                                        <input type="text" name="airport" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Hospital</label>
                                        <input type="text" name="hospital" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">College/Secondary/Primary/Nursary School</label>
                                        <textarea name="collage" cols="30" rows="3" class="form-control no-resize"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of facility -->
                    <div class="row">
                    </div>
                    </div>
                    </div>
                </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="finish" value="Add Property">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <div class="row"></div>
            </form>
                        </div>
                    </div> <!-- wizard container -->
   </div><!-- /.admin-content-main-inner -->
</div><!-- /.container-fluid -->
<script type="text/javascript">
    jQuery("#category_id").on("change",function(){
      var selectedId = $(this).val();

      jQuery("#subCategoryList").empty();
      
      if(selectedId == "Select Propert Type")
      {
        alert("Please select property type");
        return;
      }

       getSubCategories(selectedId)
    });

    function getSubCategories(categoryId)
    {
      var data = {"categoryId":categoryId}

      $.post("/eucrealtor/ajax/json.php",data,function(response,status){
        if(status == "success")
        {
          jQuery("#subCategoryList").append("<option>Select Sub type</option>")
          
          $.each(response,function(index,result){
            var id = result.id;
            var name = result.name;

            jQuery("#subCategoryList").append("<option value='" + id +"'>" + name + "</option>")
          });
        }
      });
    }
  </script>
<?php
    include 'agentInc/footer.php';
?>