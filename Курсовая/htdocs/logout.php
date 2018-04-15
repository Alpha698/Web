<?php 
session_start();
unset($_SESSION['session_username']);
session_destroy();
header("location:login.php");
?>
<link href="assets/css/main.css" media="screen" rel="stylesheet">