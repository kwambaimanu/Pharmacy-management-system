<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$quantity = $_POST['quantity'];
		$cost = $_POST['cost'];
		$totalcost = $quantity * $cost;

              
       // $sql = "SELECT *, invoice.id AS canid FROM invoice LEFT JOIN stocks ON stocks.id=invoice.name LEFT JOIN customer ON customer.id=invoice.last_name";

		$sql = "SELECT * FROM prescription ";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$invoiceid = $row['invoice_id'];
		$customerid = $row['cust_id'];
		$presc_id = $row['presc_id'];
		$name = $row['last_name'];
		$drugname = $row['name'];
		
		$sql = "INSERT INTO invoice (invoice_id, cust_id, presc_id, last_name, name, quantity, cost, totalcost) VALUES ('$invoiceid', '$customerid', '$presc_id', '$name', '$drugname', '$quantity', '$cost','$totalcost')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Invoice added successfully';
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