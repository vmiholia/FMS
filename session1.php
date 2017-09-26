<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['username']) || ($_SESSION['password'] == '')) {
	header("location:index.php");
	exit();
	
}

?>
