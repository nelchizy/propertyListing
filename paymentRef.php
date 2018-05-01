<?php
	include_once 'config/config.php';
	include_once 'lib/Database.php';
	include_once 'lib/Session.php';
	//include_once 'SupplierStatus.php';
	//include_once 'CustomerStatus.php';
	
	$db = new Database();
	$transactionId = $_GET['transaction_id'];
	$custId = $_GET['custId'];
	
	$paystactTranx = $_GET['paystactTranx'];
	$getTransPk = "SELECT trans_id FROM transactions WHERE transaction_id = '$transactionId'";
	$resultTrans = $db->select($getTransPk)->fetch_assoc();
	$pk = $resultTrans['trans_id'];
	
	$result = array();
	//The parameter after verify/ is the transaction reference to be verified
	$url = "https://api.paystack.co/transaction/verify/$paystactTranx";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt(
  	$ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer sk_test_b866f1254d89589fa4de597e35ef6bac8724b3a1']
	);
	$request = curl_exec($ch);
	curl_close($ch);
	if ($request) {
  		$result = json_decode($request, true);
	}
	$status = "SUCCESSFUL";
	$query = "UPDATE transactions SET payment_status = '$status' WHERE transaction_id = '$transactionId'";
//Use the $result array
	if($result == true){
		$status = "ACTIVE";
		$query = "UPDATE affiliate SET status = '$status' WHERE aff_id = '$custId'";
		//echo $query;
		$value1 = $db->update($query);
		$payStatus = "SUCCESSFUL";
		$TransTable = "UPDATE transactions SET payment_status = '$payStatus',date_of_modification = NOW() WHERE agent_id = '$custId' AND trans_id = '$pk'";
		//echo $queryCust;
		$value2 = $db->update($TransTable);
		if($value1 == true && $value2 == true){
			header("Location: agentLogin.php");
			//mail to Agent for successfull Payment and registration
		}else {
			//Send Mail to User of error 
			echo "Error Occure";
		}
	}else{
		$query = "UPDATE transactions SET payment_status = 'FAILED' WHERE transaction_id = '$transactionId'";
		$val = $db->update($query);
		return $val;
	}
?>