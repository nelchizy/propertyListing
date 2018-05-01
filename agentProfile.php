<?php
    include "agentInc/agentTop.php";
    include "DAO/ContactAgent.php";
    //session::checkSession();
    $agent = new ContactAgent();
    $user_id = session::get("userId");
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['custUpdate'])){
        $updateAgentProfile = $cust->getAllCustomerData($_POST, $user_id);
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
                <div class="col-sm-8 col-sm-offset-2">
                    <?php
                        
                    ?>
                    <!--      Wizard container        -->
    <div class="wizard-container">
        <div class="card wizard-card" data-color="green" id="wizardProfile">
            <?php
                $getAgent = $agent->getAgentProfileById($user_id);
                if($getAgent){
                    while($row = $getAgent->fetch_assoc()){
            ?>
            <form action="" method="POST" novalidate="novalidate">
                <div class="wizard-header">
                    <h3 class="wizard-title">Your Profile</h3>
                </div>
                <div class="wizard-navigation">
                    <ul class="nav nav-pills">
                        <li class="active" style="width: 33.3333%;"><a href="#about" data-toggle="tab" aria-expanded="true">My Profile</a></li>
                    </ul>
                <div class="moving-tab" style="width: 250px; transform: translate3d(-8px, 0px, 0px); transition: transform 0s;">Personal Profile</div></div>
                <div class="tab-content">
                        <div class="tab-pane active" id="about">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="<?php echo $row['affiliate_passport'];?>" class="picture-src" id="wizardPicturePreview" title="">
                                            <input type="file" id="wizard-picture">
                                        </div>
                                        <h6>My Profile Picture</h6>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">face</i>
                                     </span>
                                        <div class="form-group label-floating is-empty">
                                            <input name="firstname" type="text" value="<?php echo $row['first_name'];?>" class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">record_voice_over</i>
                                        </span>
                                    <div class="form-group label-floating is-empty">
                                        <input name="lastname" type="text" value="<?php echo $row['last_name'];?>" class="form-control">
                                        <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                    <div class="form-group label-floating is-empty">
                                        <input name="email" type="email" value="<?php echo $row['email'];?>" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                    <div class="form-group label-floating is-empty">
                                        <input name="email" type="email" value="<?php echo $row['phone_number'];?>" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">addres</i>
                                        </span>
                                    <div class="form-group label-floating is-empty">
                                        <input name="email" type="email" value="<?php echo $row['residential_address'];?>" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                    <div class="input-group">
                                        <label>Facebook handles</label>
                                    <div class="form-group label-floating is-empty">
                                        <input name="email" type="email" value="<?php echo $row['facebook'];?>" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                    <div class="input-group">
                                        <label>Instagram handles</label>
                                    <div class="form-group label-floating is-empty">
                                        <input name="email" type="email" value="<?php echo $row['instagram'];?>" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="finish" value="UPDATE PROFILE">
                        </div>
                    <div class="clearfix"></div>
                    </div>
            </form>
        <?php } } ?>
                        </div>
                    </div> <!-- wizard container -->
                </div>
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