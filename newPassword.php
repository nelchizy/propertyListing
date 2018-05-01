<?php 
	include 'inc/master.php';
?>
	
		<div class="row">
			<div class="col-sm-4" style="margin:48px 14px 10px 0px;padding:22px 10px 10px 60px;">
				<div class="panel panel-default">
				<div class="panel-heading">Enter Your New Password</div>
				<div class="panel-body">
					<form action="forgotPass.php" method="Post">
						<div class="form-group">
    						<label for="password1">New Password</label>
    						<input type="password" class="form-control" id="email" name="pass1">
  						</div>
  						<div class="form-group">
    						<label for="password2">Confirm New Password</label>
    						<input type="password" class="form-control" id="email" name="pass2">
  						</div>
  						 <button type="submit" class="btn btn-default" name="newPassBtn">Submit</button>
					</form>
				</div>
			</div>
			</div>
		</div>

<?php 
	include 'inc/masterFooter.php';
?>