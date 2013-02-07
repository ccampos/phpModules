<?php
	require_once '../ChromePhp/ChromePhp.php';
	require_once '../vars/db.php';

	$conn = new mysqli($host, $user, $pass, $db);

	if ($mysqli->connect_errno) {
	    ChromePhp::error("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
	} else {
		// get array variables from form
		$model = $_POST['model'];
		$model_length = count($model);

		ChromePhp::log('$model', $model);
		ChromePhp::log('$model length', count($model));
		ChromePhp::log("\n");

		for ($i = 0; $i < $model_length; $i += 1) {
			// set query
			$query = "INSERT INTO shoes (model) VALUES ('$model[$i]')";
			ChromePhp::log($model[$i]);

			// execute query
			$result = $mysqli->query($query);

			// error handler
			if(!$result) {
				ChromePhp::log('Query error:', $mysqli->error);
			} else {
				ChromePhp::log('Executed query');
			};
			ChromePhp::log("\n");
		};
	};
?>