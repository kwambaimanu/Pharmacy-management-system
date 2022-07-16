<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['description'];
		$licence = $_POST['max_vote'];
		$address = $_POST['address'];

		$sql = "UPDATE manufacturers SET mfname = '$name', licence = '$licence', address = '$address' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Manufacturer updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: positions.php');

?>