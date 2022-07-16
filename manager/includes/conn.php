<?php
	$conn = new mysqli('localhost', 'root', '', 'pharma');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>