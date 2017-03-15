<?php
	require("../db/conexao.php");

<<<<<<< HEAD
	$topico = $_GET["id"];
	$sql_query = "SELECT * FROM `assunto` WHERE `topico`='$topico' ORDER BY `nome_assunto`";
=======
	echo "<!-- chegou 2 -->";

	$id = $_GET['id'];
	$sql_query = "SELECT * FROM assunto WHERE topico='$id' ORDER BY nome_assunto";
>>>>>>> v1.2
	$sql_exec = mysqli_query($conn, $sql_query);

	while ($row = mysqli_fetch_array($sql_exec)) {
		$nome = $row['nome_assunto'];
		$id = $row['id'];
		echo "<option value='$id' class='assuntos'>$nome</option>";		
	}


?>

