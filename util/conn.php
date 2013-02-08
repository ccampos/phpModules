<?php

	/**
	* Starts db connection
	* $method close
	* $param {Object} conn
	**/
	function open($conn) {
		if (!$conn->connect_errno) {
			ChromePhp::log('conn open');
		} else {
			ChromePhp::error('Connection failed:', $conn->connect_error);	
		};
	};


	/**
	* Terminates db connection
	* $method close
	* $param {Object} conn
	**/
	function close($conn) {
		if ($conn->close()) {
			ChromePhp::log('conn close');
		};
	};
?>