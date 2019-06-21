<?php
	$conn = mysqli_connect("mira.cirnfgihqidi.eu-west-3.rds.amazonaws.com", "mira", "miramira", "mira");
	$result = mysqli_query($conn, "SELECT * FROM carrefour");

	$data = array();
	while ($row = mysqli_fetch_object($result))
	{
	    array_push($data, $row);
	}

	echo json_encode($data);
	exit();
?>