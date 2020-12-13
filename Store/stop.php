<?php
	require_once('db.php');
	
	if(!isset($_SESSION['id'])){
		header("Location: login.php")
		exit;
	}
?>