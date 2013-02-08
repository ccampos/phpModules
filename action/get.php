<?php
	require_once '../debug/ChromePhp.php';
	require_once '../vars/db.php';

	$conn = new mysqli($host, $user, $pass, $db);

	if ($mysqli->connect_errno) {
	    ChromePhp::error("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
	} else {
		// set query
		$query = 'SELECT * FROM shoes';

		// execute fetch query
		if ($result = $mysqli->query($query)) {
			// ChromePhp::log('Number of rows returned:', $result->num_rows);

			// fetch object array
			while($row = $result->fetch_row()) {
				// this row length
				ChromePhp::log('this row length', count($row));

				// display this row, each column
				for ($i = 0; $i <= count($row); $i+=1) {
					ChromePhp::log($row[$i]);
				}
			};
			// close database connection
			$mysqli->close();
		} else {
			ChromePhp::log('Query unsuccess');
		};
	};
?>