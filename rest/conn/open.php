<?php
	$conn = new mysqli($host, $user, $pass, $db);

	if (!$conn->connect_errno) {
		ChromePhp::log('conn open');
	} else {
		ChromePhp::error('Connection failed:', $conn->connect_error);	
	}
?>