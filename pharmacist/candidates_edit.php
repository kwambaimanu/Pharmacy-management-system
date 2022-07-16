<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$drugname = $_POST['drug'];
		$dose = $_POST['dose'];

		$sql = "UPDATE prescriptions1 SET age = '$age', sex = '$sex', drug_name = '$drugname', dose = '$dose' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Prescription updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>