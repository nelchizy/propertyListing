<?php 
    include 'inc/master.php';
    include 'DAO/Country.php';

    include 'DAO/PremiumUser.php';
    $db = new Database();
  $country = new Country();
  $user = new PremiumUser();

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addPreUser']) ) {
  $insertUser = $user->createPremiumUser($_POST, $_FILES);
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
    <div class="container col-sm-8 col-lg-8 col-md-8 center-block">
      <h2 class="pull-right">Premium Account registration</h2>
        <div class="row" style="padding: 133px; margin:30px; border: 2px solid;">
          <?php
            if(isset($insertUser)){
              echo $insertUser;
            }
          ?>
            <form action="" method="post" enctype="multipart/form-data">
                <?php
                  $sql = "SELECT * FROM package WHERE package_name = 'Premium' LIMIT 1";
                  $getResult = $db->select($sql)->fetch_assoc();
                  $id = $getResult['id'];
                  $price = $getResult['price'];
                ?>
                <input type="hidden" name="package_id" value="<?php echo $id;?>">
                <input type="hidden" name="price" value="<?php echo $price;?>">
                <h3>Corporate Account?</h3>
                <?php
                    if(isset($insertUser)){
                        echo $insertUser;
                    }
                ?>
                <fieldset>
                    <input type="checkbox" onclick="showMe('div1',this)" />
                    <label for="md_checkbox_21">Corporate Information? <small style="color: red;">Check for more details</small></label>
                </fieldset>
                <div id="div1" style="display:none">
                    <div class="form-group">
                        <label for="Company Name">Company Name</label>
                        <input type="text" name="companyName" class="form-control" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <label for="Company Address">Company Address</label>
                        <input type="text" name="companyAdd" class="form-control" placeholder="Company Address">
                    </div>
                    <div class="form-group">
                        <label for="Company Phone">Company Phone</label>
                        <input type="phone" name="companyNumber" class="form-control" placeholder="0808377383">
                    </div>
                    <div class="form-group">
                        <label for="Company Email">Company Email</label>
                        <input type="email" name="companyEmail" class="form-control" placeholder="hello@mail.com">
                    </div>
                </div><!--End of corporate section -->
                <h3>Personal information</h3>
                <fieldset>
                    <div class="form-group">
                        <label for="FirstName">First Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="John">
                    </div>
                    <div class="form-group">
                        <label for="LastName">Last Name</label>
                        <input type="text" name="lastName" class="form-control" placeholder="Doe">
                    </div>
                    <div class="form-group">
                        <label for="pictures">Profile Picture</label>
                        <input type="file" name="profile" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </fieldset><!-- End of fieldset -->
                <h3>More Personal Details</h3>
                <hr>
                <div class="form-group">
                    <label for="password">Gender</label>
                    <select class="form-control" name="gender">
                        <option>[Select gender]</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Country</label>
                    <select class="form-control" id="country" name="country_id">
                        <option>Select Country</option>
                        <?php
                            $getAllCountry = $country->getAllCountry();
                            if($getAllCountry){
                                while ($rows = $getAllCountry->fetch_assoc()){?>
                                <option value="<?php echo $rows['id'];?>"><?php echo $rows['name'];?></option>
                            <?php } }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="State">State</label>
                    <select class="form-control" id="allStateList" name="state_id">
                    </select>
                </div>
                <div class="form-group">
                    <label for="City">City</label>
                    <select class="form-control" id="townList" name="city_id">
                    </select>
                </div>
                <h2>More Details</h2>
                <fieldset>
                    <input type="checkbox" onclick="clickMe1('div3',this)" />
                    <label for="md_checkbox_21">Personal Information? <small style="color: red;">Check for more details</small></label>
                </fieldset>
                <div id="div3" style="display:none">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="PhoneNum">Phone Number</label>
                    <input type="number" name="personalPhone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="PhoneNum">Residential Address</label>
                    <input type="text" name="personalAddress" class="form-control">
                </div>
                <div class="form-group">
                    <label for="PhoneNum">Facebook Username</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="Instagram">Instagram Username</label>
                    <input type="text" name="instagram" class="form-control" placeholder="Username">
                </div>
              <div class="form-check">
                <input type="checkbox" name="checkMe" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1"><a href="">Accept Terms of Use</a></label>
              </div>
          </div>
              <button type="submit" name="addPreUser" class="btn btn-primary pull-right">Register</button>
        </form>
        </div>
    </div>
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