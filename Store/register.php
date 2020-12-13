<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('songRegg.php');
require_once('db.php');

if (!empty($_POST['register'])) {

	if (strlen($_POST['username']) < 6) {
		echo '<h3>Username too short! </h3>';
	} elseif (empty($_POST['password'])) {
		echo '<h3>Enter password! </h3>';
	} elseif ($_POST['password'] !== $_POST['confirmPassword']) {
		echo '<h3>Passwords didn\'t match! </h3>';
	} else {
		$salt = 'phpdev20';
		$password = md5($salt . $_POST['password']);
		$query = "INSERT INTO `user` (`username`, `password`, `salt`) 
VALUES (:username, :password, :salt)";
		$statement = $conn->prepare($query);
		$data = [
			'username' => $_POST['username'],
			'password' => $password, 
			'salt' => $salt,
		];
		$statement->execute($data);

		if ($statement->errorInfo()[2]) {
			var_dump($statement->errorInfo());
		} else {
			echo '<h3 class="asdfg">Account created, please <a id="changecolor" href="login.php">log in</a></h3>'; 
					
		}
	}

}
?>
<br></br>
<br></br>
<br></br>
<br></br>

<div class="body-content">
  <div class="module">
    <h1 id="asd">Create an account</h1>
<form class="form" action="register.php" method="POST">
	
	<input type="text" name="username" placeholder="Username" /> 
 	<input type="password" name="password" placeholder="Password" /> 
	<input type="password" name="confirmPassword" placeholder="Confirm Password" /> 
	<input type="submit" name="register" value="Register" class="btn btn-block btn-primary" />
</form>
  </div>
</div>
<link rel="stylesheet" href="style/style.css" type="text/css">

