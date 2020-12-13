 <?php
if (!isset($_SESSION)) {
    session_start();
}

require_once('db.php');
require_once('song.php');


if (isset($_POST['login']) && $_POST['login'] == "Login"){
	$query = "SELECT id FROM `user` WHERE username = :name AND password = :pass";
	$salt = 'phpdev20';
	$password = md5($salt . $_POST['password']);

	$args = [
		'name' => $_POST['username'],
		'pass' => $password,
	];  
	$statement = $conn->prepare($query);
	$statement->execute($args);
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	if (!empty($result)){
		$_SESSION['userId'] = $result['id'];
		header("Location:store.php");
	} else { echo "<h2>Wrong username or password</h2>";}
	
}





?>

<br></br>
<br></br>
<br></br>
<br></br>

<link rel="stylesheet" href="style/style.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1 id="asd" >Login</h1>
    <form class="form" action="login.php" method="post" >
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" />
      <input type="password" placeholder="Password" name="password"  />
      <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
    </form>
    Don't have an account? <a href="register.php">Register now!</a> 
  </div>
</div>


