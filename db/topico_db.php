<?php
	//Listagem
	function listarTodasTopicos($conexao){
		$sql_query = "SELECT * FROM `topico` WHERE `status` = 1 order by `nome_topico`;";
		$sql_exec  = mysqli_query($conexao, $sql_query);
		$tabela = array();
		
		if ($sql_exec) {
			while ($linha = mysqli_fetch_array($sql_exec)) {
				array_push($tabela, $linha);
			}
			return $tabela;		
		}else{
			return 0;
		}
	}

	function listarTopicos($conexao, $id){
		$sql_query = "SELECT * FROM `topico` WHERE `status` = 1 AND `id` = $id";
		$sql_exec = mysqli_query($conexao, $sql_query);
		return mysqli_fetch_array($sql_exec);
	}
	//Inserção
	function inserirTopico($conexao, $materia,$nome, $status){
		$sql_query = "INSERT INTO `topico`(`materia`, `nome_topico`, `status`) VALUES ($materia, '$nome', $status)";
		return mysqli_query($conexao, $sql_query);
	}

	//Remoção
	function removerTopico($conexao, $id){
		$sql_query = "DELETE FROM `topico` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarTopico($conexao, $id){
		$sql_query = "UPDATE `topico` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterção

	function alterarTopico($conexao, $materia, $nome, $id){
		$sql_query = "UPDATE `topico` SET `materia` = $materia, `nome_topico`=$nome WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}
?>