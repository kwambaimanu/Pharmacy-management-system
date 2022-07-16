<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['pharmacy']) || trim($_SESSION['pharmacy']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM candidates WHERE id = '".$_SESSION['pharmacy']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>