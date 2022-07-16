<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];

		$sql = "SELECT * FROM customer WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();



		$sql = "UPDATE customer SET first_name = '$firstname', last_name = '$lastname', address = '$address' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: customer.php');

?>