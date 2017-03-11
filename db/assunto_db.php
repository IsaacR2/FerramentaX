<?php
	//Listagem
	function listarTodasAssuntos($conexao){
		$sql_query = "SELECT * FROM `assunto` WHERE `status` = 1 order by `nome_assunto`;";
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

	function listarAssuntos($conexao, $id){
		$sql_query = "SELECT * FROM `assunto` WHERE `status` = 1 AND `id` = $id";
		$sql_exec = mysqli_query($conexao, $sql_query);
		return mysqli_fetch_array($sql_exec);
	}
	//Inserção
	function inserirAssunto($conexao, $topico,$nome, $status){
		$sql_query = "INSERT INTO `assunto`(`topico`, `nome_assunto`, `status`) VALUES ($topico, '$nome', $status)";
		return mysqli_query($conexao, $sql_query);
	}

	//Remoção
	function removerAssunto($conexao, $id){
		$sql_query = "DELETE FROM `assunto` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarAssunto($conexao, $id){
		$sql_query = "UPDATE `assunto` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterção

	function alterarAssunto($conexao, $topico, $nome, $id){
		$sql_query = "UPDATE `assunto` SET `topico` = $topico, `nome_assunto`=$nome WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}
?>