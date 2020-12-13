<?php

require_once('db.php');
require_once('login.php');
require_once('song.php');
if (!empty($result)){
		$_SESSION['userId'] = $result['id'];
		header("Location:store.php");
	} 
