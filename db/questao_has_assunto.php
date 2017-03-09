<?php
	//Inserções	

	function inserirQuestaoAssunto($conexao, $questao, $assunto, $status){
		$sql_query = "INSERT INTO `questao_has_assunto`(`questao`, `assunto`, `status`) 
			VALUES ($questao, $assunto, $status)";
		return mysqli_query($conexao, $sql_query);
	}

	//Listagens

		//Listagem por matéria
		function listarTodasQuestoesAssunto($conexao, $assunto){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_assunto` WHERE `assunto` = $assunto) AND `status` = 1;";
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

		//Listar questão por assunto e por regra
		function listarQuestaoAssunto($conexao, $assunto){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_assunto` WHERE `assunto` = $assunto) AND `status` = 1 ORDER BY (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(MINUTE, `dt_ult_resp`, NOW()))) ASC LIMIT 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
		//Listar questões não feitas por regra e por assunto
		function listarQuestaoNaoFeitaPorRegraPorAssunto($conexao,$assunto,$max){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_assunto` WHERE `assunto` = $assunto) AND `status` = 1 AND `qtde_acertos`=$max ORDER BY (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(MINUTE, `dt_ult_resp`, NOW()))) ASC LIMIT 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
		//Listagem com foco nas matérias
		function NumVincPorQuestaoAssunto($conexao, $id){
			$sql_query = "SELECT COUNT(*) FROM `questao_has_assunto` WHERE `questao` = $id";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}

		function listarTodasAssuntoPorQuestao($conexao, $id){
			$sql_query = "SELECT * FROM `assunto` WHERE `id` IN (SELECT `assunto` FROM `questao_has_assunto` WHERE `questao` = $id)";
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
	
	//Remoções

	function removerQuestaoAssunto($conexao, $id){
		$sql_query = "DELETE FROM `questao_has_assunto` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarQuestaoAssunto($conexao, $id){
		$sql_query = "UPDATE `questao_has_assunto` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterações
	
?>