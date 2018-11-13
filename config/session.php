<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location:index.php");
	exit();
}else if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // request 30 minates ago
    session_destroy();
    session_unset();
}
$_SESSION['LAST_ACTIVITY'] = time();
?>