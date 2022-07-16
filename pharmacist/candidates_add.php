<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$customerId = $_POST['customer'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$drugname = $_POST['drug'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$dose = $_POST['dose'];
		$quantity = $_POST['quantity'];
		$cost = $_POST['cost'];
		$totalcost = $quantity * $cost;
		$set = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$invoiceid = substr(str_shuffle($set), 0, 10);
		$set2 = '123456789';
		$prescriptionid = substr(str_shuffle($set2), 0, 10);
		date_default_timezone_set('Africa/Nairobi');

		$date=date('m/d/Y h:i:s:a', time());
		$sql = "INSERT INTO prescriptions1 ( presc_id,invoice_id, cust_id, age, sex, drug_name, dose,phone,post_address,date,quantity,cost,totalcost) VALUES ('$prescriptionid', '$invoiceid', '$customerId', '$age', '$sex', '$drugname', '$dose','$phone','$address','$date','$quantity','$cost','$totalcost')";


		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Prescription added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>