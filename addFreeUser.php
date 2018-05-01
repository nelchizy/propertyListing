<?php
	include 'inc/header.php';
	
	$filepath = realpath(dirname('_FILE_'));
	//require_once ($filepath.'/vendor/autoload.php');
	//require_once '/efarmagro/vendor/autoload.php';
	$db = new Database();

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['freeUser']))
	{
		$company_name = mysqli_real_escape_string($db->link, $_POST['company-name']);
		$company_address = mysqli_real_escape_string($db->link, $_POST['company-address']);
		$company_email = mysqli_real_escape_string($db->link, $_POST['company-email']);
		$company_phone = mysqli_real_escape_string($db->link, $_POST['company-phone']);

		$first_name = mysqli_real_escape_string($db->link, $_POST['first-name']);
		$last_name 	= mysqli_real_escape_string($db->link, $_POST['last-name']);
		$person_email = mysqli_real_escape_string($db->link, $_POST['person-email']);
		$phone = mysqli_real_escape_string($db->link, $_POST['phone']);
		$passKey = mysqli_real_escape_string($db->link, md5($_POST['passKey']));
		$gender = mysqli_real_escape_string($db->link, $_POST['gender']);
		$country_id = !isset($data['country_id']) ? "" : mysqli_real_escape_string($this->db->link, $_POST['country_id']);
		$state_id = !isset($data['state_id']) ? "" : mysqli_real_escape_string($this->db->link, $_POST['state_id']);
		$city_id = !isset($data['city_id']) ? "" : mysqli_real_escape_string($this->db->link, $_POST['city_id']);
		$useraddress = mysqli_real_escape_string($db->link, $_POST['useraddress']);

			$permited 		= array('jpg', 'jpeg', 'png', 'gif');
			$file_name 		= $file['profile']['name'];
			$file_size 		= $file['profile']['size'];
			$file_temp 		= $file['profile']['tmp_name'];

			$div 			= explode('.', $file_name);
			$file_ext 		= strtolower(end($div));
			$unique_image 	= substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "profile/".$unique_image;


		$mailQuery = "SELECT * FROM affiliate WHERE email = '$person_email' LIMIT 1";
		$mailCheck = $this->db->select($mailQuery);
		if(empty($first_name) || empty($last_name) || empty($person_email) || empty($phone) || empty($passKey) || empty($gender) || empty($country_id) || empty($state_id) || empty($city_id) || empty($useraddress)){
			$error = "<div class='alert alert-danger'>Basic personal information must not be empty..</div>";
			return $error;
		}elseif ($file_size > 1048567){
				$error = "<div class='alert alert-danger'>Picture size must not be more than 500kb max.</div>";
				return $error;
			}elseif(in_array($file_ext, $permited) === false) {
				$error = "<div class='alert alert-danger'>Picture format is not supported!</div>";
				return $error;
			}elseif($mailCheck != false){
				$error = "<div class='alert alert-danger'>Email address already exit in the system</div>";
				return $error;

			}else{
				$subscription = 'Free'; //this is for admin create
				$postLimit = '1';
				move_uploaded_file($file_temp, $uploaded_image);

				//Insert user into database
				$insertFreeUser = "INSERT INTO affiliate(company_name,company_address,official_phone,	company_email,password,first_name,last_name,sex,email,phone_number,	affiliate_passport,residential_address,user_role,country_id,state_id,city_id,subscription_status,post_count,	post_limit) VALUES('$company_name','$company_address','$company_email','$passKey', '$company_phone','$first_name','$last_name', '$gender', '$person_email','$phone', '$file_name','$useraddress', '3', '$country_id', '$state_id', '$city_id', '$subscription','0','$postLimit')";
				$inserted = $db->insert($insertFreeUser);
				if($insertFreeUser){
					//Send success msg to user
					$msg = '<div class="alert alert-success">Agent Free account created successfully</div>';
					echo '<script>window.location="login.php"</script>';
					return $msg;
				}
			}

	}
?>