<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['manager']) || trim($_SESSION['manager']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM candidates WHERE id = '".$_SESSION['manager']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>