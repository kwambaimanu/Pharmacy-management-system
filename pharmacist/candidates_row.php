<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		 $sql = "SELECT *, prescriptions1.id AS canid FROM prescriptions1 LEFT JOIN customer ON customer.id=prescriptions1.cust_id LEFT JOIN stocks ON stocks.id=prescriptions1.drug_name";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>