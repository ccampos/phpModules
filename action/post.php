<?php
	require_once './debug/ChromePhp.php';
	require_once './vars/db.php';

	$conn = new mysqli($host, $user, $pass, $db);

	if ($conn->connect_errno) {
	    ChromePhp::error("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
	} else {
		// get form
		$model = $_POST['model'];

		$model_length = count($model);

		for ($i = 0; $i < $model_length; $i += 1) {
			// set query
			$query = "INSERT INTO shoes (model) VALUES ('$model[$i]')";
			ChromePhp::log($model[$i]);

			// execute query
			$result = $conn->query($query);

			// error handler
			if(!$result) {
				ChromePhp::log('Query error:', $conn->error);
			} else {
				ChromePhp::log('Executed query');
			};
		};
	};
?>