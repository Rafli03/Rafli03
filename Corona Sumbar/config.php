<?php
	$databaseHost='localhost';
	$databaseName='CoronaSumbar';
	$databaseUsername='root';
	$databasePassword='';

	$con=new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName);
	if ($con -> connect_errno) {
		echo die("Gagal menghubungkan ke database".$con->connect_errno);
	}
?>