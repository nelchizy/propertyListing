<?php
	include "inc/agentHeader.php";
	include "inc/agentSide.php";
?>
<div class="container" style="padding: 45px; margin: 40px;">
	<div class="row">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<div class="form-group">
<legend>Product Request</legend>

  <label class="col-md-4 control-label" for="product">Product</label>
  <div class="col-md-6">
    <select id="cproduct" name="product" class="form-control">
            				<option value="startup">streamdrill: Startup</option>
                			<option value="business">streamdrill: Business</option>
                			<option value="enterprise">streamdrill: Enterprise</option>
                			<option value="ultimate">streamdrill: Ultimate</option>
</select>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Max Muster" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Address</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="max@muster.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company">Company</label>  
  <div class="col-md-6">
  <input id="company" name="company" type="text" placeholder="Muster Inc." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="street">Street Adress</label>  
  <div class="col-md-6">
  <input id="street" name="street" type="text" placeholder="123 Main Street" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post">Post/ZIP Code</label>  
  <div class="col-md-6">
  <input id="post" name="post" type="text" placeholder="123456" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-6">
  <input id="city" name="city" type="text" placeholder="Springfield" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>
  <div class="col-md-6">
    <select id="country" name="country" class="form-control" required="">
        					<option value=""></option>
    						<option value="AR">Nigeria</option>
                            </select>
  </div>
  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Send Request</button>
  </div>
</div>

</fieldset>
</form>
	</div>
</div>
