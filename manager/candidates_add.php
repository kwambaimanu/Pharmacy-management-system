<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$unit = $_POST['unit'];
		$batchno = $_POST['batchno'];
		$manufacturer = $_POST['manufacturer'];
		$mfgdate = $_POST['mf_date'];
		$expdate = $_POST['exp_date'];
		$supplier =$_POST['supplier'];
		$sql = "INSERT INTO stocks (name, unit, batch_no, manufacturer, mf_date, exp_date, supplier) VALUES ('$name', '$unit', '$batchno', '$manufacturer', '$mfgdate', '$expdate', '$supplier')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Drug added successfully';
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