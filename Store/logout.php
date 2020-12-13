<?php
if (!isset($_SESSION)) {
    session_start();
}
unset($_SESSION['userId']);
header("Location:index.php");
exit;
?> 

