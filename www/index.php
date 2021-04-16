<?php 
	echo "Xin chào!";
	$mysqli = new mysqli("mysql_service","root","123","demo");

	if ($mysqli->connect_errno) {
		echo "Fail connect! " . $mysqli->connect_error;
		exit();
	}
?>