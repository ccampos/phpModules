<?php
	require_once '../ChromePhp/ChromePhp.php';
	require_once '../vars/db.php';

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