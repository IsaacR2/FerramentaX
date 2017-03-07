<?php
	session_start();	
	
	if (!isset($_SESSION['sLogin'])) {
	   header("location: ../login.php");
	   exit;
	}
?>