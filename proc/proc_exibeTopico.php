<?php
<<<<<<< HEAD
	require("../db/conexao.php");

	$materia = $_GET["id"];
	$sql_query = "SELECT * FROM `topico` WHERE `materia`='$materia' ORDER BY `nome_topico`";
=======
	//header('Content-type: application/json');

	require("../db/conexao.php");

	$id = $_GET['id'];
	$sql_query = "SELECT * FROM topico WHERE materia='$id' ORDER BY nome_topico";
>>>>>>> v1.2
	$sql_exec = mysqli_query($conn, $sql_query);

	while ($row = mysqli_fetch_array($sql_exec)) {
		$nome = $row['nome_topico'];
		$id = $row['id'];
<<<<<<< HEAD
		echo '<option value="' . $id . '" class="topicos">' . $nome . '</option>';		
	}

	echo "<!-- fui no proc -->";

=======
		echo "<option value='$id' class='topicos'>$nome</option>";		
	}

>>>>>>> v1.2

?>

