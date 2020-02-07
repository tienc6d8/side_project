<?php
require_once('config.php');

function execute($query) {
	//MO KET NOI
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($con, 'utf8');

	//TAO QUERY INSERT/UPDATE/DELETE
	mysqli_query($con, $query);

	//DONG KET NOI
	mysqli_close($con);
}

function executeResult($query) {
	//MO KET NOI
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($con, 'utf8');

	//TAO QUERY SELECT
	$data = [];
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result, 1)) {
		$data[] = $row;
	}
	//DONG KET NOI
	mysqli_close($con);

	return $data;
}