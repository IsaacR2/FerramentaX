<?php
	//Listagem
	function listarTodasMaterias($conexao){
		$sql_query = "SELECT * FROM `materia` WHERE `status` = 1 order by `nome_materia`;";
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

	function listarMaterias($conexao, $id){
		$sql_query = "SELECT * FROM `materia` WHERE `status` = 1 AND `id` = $id";
		$sql_exec = mysqli_query($conexao, $sql_query);
		return mysqli_fetch_array($sql_exec);
	}
	//Inserção
	function inserirMateria($conexao, $nome, $status){
		$sql_query = "INSERT INTO `materia`(`nome_materia`, `status`) VALUES ('$nome', $status)";
		return mysqli_query($conexao, $sql_query);
	}

	//Remoção
	function removerMateria($conexao, $id){
		$sql_query = "DELETE FROM `materia` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarMateria($conexao, $id){
		$sql_query = "UPDATE `materia` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterção

	function alterarMateria($conexao, $nome, $id){
		$sql_query = "UPDATE `materia` SET `nome_materia`='$nome' WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}
?>