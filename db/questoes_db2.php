<?php
	// questões por matéria

	//Inseres

	function inserirQuestao($conexao, $texto, $resposta, $coeficiente, $qtde_acertos, $qtde_erros, $status, $dt_ult_resp){
		$sql_query = "INSERT INTO `questoes`(`texto`, `resposta`, `coeficiente`, `qtde_acertos`, `qtde_erros`, `dt_ult_resp`, `status`)  
		VALUES ('$texto', '$resposta', '$coeficiente', '$qtde_acertos', '$qtde_erros', '$dt_ult_resp', '$status');";

		return mysqli_query($conexao, $sql_query);
	}


	//Listágens

	function listarQuestao($conexao, $id){
		$sql_query = "SELECT * FROM `questoes` WHERE `id` = $id";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}

	function listarTextoRespostaQuestao($conexao, $id){
		$sql_query = "SELECT `texto`, `resposta` FROM `questoes` WHERE `id` = 61";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}

	function listarTodasQuestoes($conexao){
		$sql_query = "SELECT * FROM `questoes` WHERE `status` = 1 order by `texto`;";
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
		//Listar dentre todas as questões pela regra
		function listarQuestaoPorRegra($conexao){
			$sql_query = "SELECT * FROM `questoes` WHERE `status` = 1 order by (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(SECOND, `dt_ult_resp`, NOW()))) asc limit 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
		//Listar destre todas as não feitas pela regra
		function listarQuestaoNaoFeitaPorRegra($conexao,$max){
			$sql_query = "SELECT * FROM `questoes` WHERE `status` = 1 AND `qtde_acertos`=$max order by (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(SECOND, `dt_ult_resp`, NOW()))) asc limit 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}

	//Remoções

	function removerQuestao($conexao, $id){
		$sql_query = "DELETE FROM `questoes` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarQuestao($conexao, $id){
		$sql_query = "UPDATE `questoes` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterações

	function alterarQuestao($conexao, $id, $texto, $resposta, $coeficiente){
		$sql_query = "UPDATE `questoes` SET `texto`='$texto',`resposta`='$resposta',`coeficiente`='$coeficiente' WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function atualizarQuestao($conexao, $id, $qtde_acertos, $qtde_erros, $dt_ult_resp){
		$sql_query = "UPDATE `questoes` SET `qtde_acertos`= '$qtde_acertos',`qtde_erros`= '$qtde_erros',`dt_ult_resp`= '$dt_ult_resp' WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

?>