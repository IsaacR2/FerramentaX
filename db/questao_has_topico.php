<?php
	//Inserções	

	function inserirQuestaoTopico($conexao, $questao, $topico, $status){
		$sql_query = "INSERT INTO `questao_has_topico`(`questao`, `topico`, `status`) 
			VALUES ($questao, $topico, $status)";
		return mysqli_query($conexao, $sql_query);
	}

	//Listagens

		//Listagem por matéria
		function listarTodasQuestoesTopico($conexao, $topico){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_topico` WHERE `topico` = $topico) AND `status` = 1;";
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

		//Listar questão por topico e por regra
		function listarQuestaoTopico($conexao, $topico){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_topico` WHERE `topico` = $topico) AND `status` = 1 ORDER BY (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(MINUTE, `dt_ult_resp`, NOW()))) ASC LIMIT 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
		//Listar questões não feitas por regra e por topico
		function listarQuestaoNaoFeitaPorRegraPorTopico($conexao,$topico,$max){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_topico` WHERE `topico` = $topico) AND `status` = 1 AND `qtde_acertos`=$max ORDER BY (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(MINUTE, `dt_ult_resp`, NOW()))) ASC LIMIT 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
		//Listagem com foco nas matérias
		function NumVincPorQuestaoTopico($conexao, $id){
			$sql_query = "SELECT COUNT(*) FROM `questao_has_topico` WHERE `questao` = $id";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}

		function listarTodasTopicoPorQuestao($conexao, $id){
			$sql_query = "SELECT * FROM `topico` WHERE `id` IN (SELECT `topico` FROM `questao_has_topico` WHERE `questao` = $id)";
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

	function removerQuestaoTopico($conexao, $id){
		$sql_query = "DELETE FROM `questao_has_topico` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarQuestaoTopico($conexao, $id){
		$sql_query = "UPDATE `questao_has_topico` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterações
	
?>