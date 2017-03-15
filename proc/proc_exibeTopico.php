<?php
	require("../db/conexao.php");

	$materia = $_GET["id"];
	$sql_query = "SELECT * FROM `topico` WHERE `materia`='$materia' ORDER BY `nome_topico`";
	$sql_exec = mysqli_query($conn, $sql_query);

	while ($row = mysqli_fetch_array($sql_exec)) {
		$nome = $row['nome_topico'];
		$id = $row['id'];
		echo '<option value="' . $id . '" class="topicos">' . $nome . '</option>';		
	}

	echo "<!-- fui no proc -->";


?>

