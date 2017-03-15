<?php
	require("../db/conexao.php");

	$topico = $_GET["id"];
	$sql_query = "SELECT * FROM `assunto` WHERE `topico`='$topico' ORDER BY `nome_assunto`";
	$sql_exec = mysqli_query($conn, $sql_query);

	while ($row = mysqli_fetch_array($sql_exec)) {
		$nome = $row['nome_assunto'];
		$id = $row['id'];
		echo "<option value='$id' class='assuntos'>$nome</option>";		
	}


?>

