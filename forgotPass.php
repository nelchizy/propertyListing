<?php
	include 'inc/master.php';
	
	$filepath = realpath(dirname('_FILE_'));
	require_once ($filepath.'/vendor/autoload.php');
	require_once($filepath.'/mailsMessage/AgentMessages.php');
	$db = new Database();
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['forgotBtn'])){
		$email = mysqli_real_escape_string($db->link, $_POST['email']);
		if(empty($email)){
			echo "<div class='alert alert-danger'>Field Must not be empty!</div>";
			exit();
		}else{
			$query = "SELECT * FROM affiliate WHERE email = '$email' AND status= 'ACTIVE' LIMIT 1";
			$result = $db->select($query);
			if($result != false){
				$value = $result->fetch_assoc();
				Session::set("agentEmail", $value['email']);
				//Send mail to Customer for Change of pasword
				$msg = new AgentMessages();
				$msg->sendActivationLinkToCustomerEmail($email);
				echo "<div class='alert alert-success'>An email has been sent to you, click the link to change the the password</div>";
				echo '<script>window.location="index.php";</script>';
				//header("Location:index.php");
				exit();
			}else{
				echo "<div class='alert alert-danger'>Email Not registered with RealtorMonster";
				//echo '<script>window.location="forgot.php";</script>';
				exit();
			}
		}
	}
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newPassBtn'])){
		$sessionEmail = Session::get("agentEmail");
		$pass1 = mysqli_real_escape_string($db->link,md5( $_POST['pass1']));
		$pass2 = mysqli_real_escape_string($db->link,md5( $_POST['pass2']));
		if(empty($pass1) || empty($pass2)){
			echo "<div class='alert alert-danger'>All field must not be empty</div>";
			exit();
		}else if($pass1 != $pass2){
			echo "<div class='alert alert-danger'>Password do not match!.</div>";
			exit();
		}else{
			$sql = "UPDATE affiliate SET password = '$pass1' WHERE email = '$sessionEmail' LIMIT 1";
			$res_sql = $db->update($sql);
			if($res_sql != false){
				echo "<div class='alert alert-success'>Your Password has be changed Successfully.";
				echo '<script>window.location="agentLogin.php";</script>';
				//send mail to user
				$chngMsg = new AgentMessages();
				$chngMsg->changePasswordSuccessMsg($sessionEmail);
				exit();
			}else{
				echo "<div class='alert alert-danger'>Password not change, try agian.";
				exit();
			}
		}
		
	}
?>