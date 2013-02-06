<?php
	include 'ChromePhp/ChromePhp.php';

	// declare db variables
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'panda';

	$conn = new mysqli($host, $user, $pass, $db);

	if (!$conn->connect_errno) {
		ChromePhp::log('conn open');
	} else {
		ChromePhp::error('Connection failed:', $conn->connect_error);	
	}

	if ($conn->close()) {
		ChromePhp::log('conn close');
	};
?>