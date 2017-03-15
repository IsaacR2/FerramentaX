<?php
	session_start();
	$email = addslashes($_POST['NEmail']);
	$senha = md5(addslashes($_POST['NSenha']));

	require("../db/conexao.php");

	$sql = "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha` = '$senha'";

	$sql_exec = mysqli_query($conn, $sql);	

	//$id = $resultado['idUsuario'];

	//echo $id;

	//

	if(mysqli_num_rows($sql_exec) == 1){
		$resultado = mysqli_fetch_array($sql_exec);
		$id = $resultado['id'];
		$_SESSION['sLogin'] = $id;
		
		header("location: ../default.php");
	}else{
		header("Location: ../login.php?erro=1");
	}
?>