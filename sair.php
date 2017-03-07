<?php
	session_start();

	unset($_SESSION['sLogin']); //limpando sessão

	header("location: login.php");

?>