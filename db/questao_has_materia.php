<?php
	//Inserções	

	function inserirQuestaoMateria($conexao, $questao, $materia, $status){
		$sql_query = "INSERT INTO `questao_has_materia`(`questao`, `materia`, `status`) 
			VALUES ($questao, $materia, $status)";
		return mysqli_query($conexao, $sql_query);
	}

	//Listagens

		//Listagem por matéria
		function listarTodasQuestoesMateria($conexao, $materia){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_materia` WHERE `materia` = $materia) AND `status` = 1;";
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

		//Listar questão por materia e por regra
		function listarQuestaoMateria($conexao, $materia){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_materia` WHERE `materia` = $materia) AND `status` = 1 ORDER BY (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(MINUTE, `dt_ult_resp`, NOW()))) ASC LIMIT 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
		//Listar questões não feitas por regra e por materia
		function listarQuestaoNaoFeitaPorRegraPorMateria($conexao,$materia,$max){
			$sql_query = "SELECT * FROM `questoes` WHERE `id` IN (SELECT `questao` FROM `questao_has_materia` WHERE `materia` = $materia) AND `status` = 1 AND `qtde_acertos`=$max ORDER BY (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(MINUTE, `dt_ult_resp`, NOW()))) ASC LIMIT 0,1;";
			$sql_exec  = mysqli_query($conexao, $sql_query);		
			return mysqli_fetch_array($sql_exec);
		}
	
	//Remoções

	function removerQuestaoMateria($conexao, $id){
		$sql_query = "DELETE FROM `questao_has_materia` WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	function desativarQuestaoMateria($conexao, $id){
		$sql_query = "UPDATE `questao_has_materia` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

	//Alterações
	
?>