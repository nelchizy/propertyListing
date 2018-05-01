<?php 
	include 'inc/master.php';
?>
	
		<div class="row">
			<div class="col-sm-4" style="margin:48px 14px 10px 0px;padding:22px 10px 10px 60px;">
				<div class="panel panel-default">
				<div class="panel-heading">Forgot Password</div>
				<div class="panel-body">
					<form action="forgotPass.php" method="Post">
						<div class="form-group">
    						<label for="email">Email address:</label>
    						<input type="email" class="form-control" id="email" name="email">
  						</div>
  						 <button type="submit" class="btn btn-default" name="forgotBtn">Submit</button>
					</form>
				</div>
			</div>
			</div>
		</div>

<?php 
	include 'inc/masterFooter.php';
?>