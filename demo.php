<?php
	Session_start();
	if(isset($_SESSION['views'])){
		$_SESSION['views'] = $_SESSION['views'] +1;
	}else{
		$_SESSION['views'] = 1;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Demo</title>
</head>
<body>
	<div class="content">
			<p>PageViews: <?php echo $_SESSION['views']?></p>
		
	</div>
</body>
</html>