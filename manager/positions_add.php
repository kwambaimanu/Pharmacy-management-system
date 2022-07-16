<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$licence= $_POST['licence'];
		$address= $_POST['address'];
		
		$sql = "INSERT INTO manufacturers (mfname, licence, address) VALUES ('$name', '$licence', '$address')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Manufacturer added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: positions.php');
?>