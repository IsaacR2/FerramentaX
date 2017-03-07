<?php
	function inserirQuestao($conexao, $texto, $resposta, $materia, $coeficiente, $qtde_acertos, $qtde_erros, $status, $dt_ult_resp){
		$sql_query = "INSERT INTO `questoes`(`texto`,`resposta`, `materia`, `coeficiente`, `qtde_acertos`, `qtde_erros`, `status`, `dt_ult_resp`) 
		VALUES ('$texto', '$resposta', '$materia', '$coeficiente', '$qtde_acertos', '$qtde_erros', '$status', '$dt_ult_resp');";

		return mysqli_query($conexao, $sql_query);
	}
/*

	function listarQuestaoPorRegra($conexao){
		$sql_query = "SELECT * FROM `questoes` WHERE `status` = 1 order by (`qtde_acertos` - `qtde_erros`) / (`coeficiente` * TIMESTAMPDIFF(SECOND, `dt_ult_resp`, NOW()) ) asc limit 0,1;";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}

*/

        	function listarQuestaoPorRegra($conexao){
		$sql_query = "SELECT * FROM `questoes` WHERE `status` = 1 order by (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(SECOND, `dt_ult_resp`, NOW()))) asc limit 0,1;";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}

	function listarQuestaoPorId($conexao, $id){
		$sql_query = "SELECT * FROM `questoes` WHERE `id` ='$id'";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}

	function atualizarQuestao($conexao, $id, $qtde_acertos, $qtde_erros, $dt_ult_resp){
		$sql_query = "UPDATE `questoes` SET `qtde_acertos`= '$qtde_acertos',`qtde_erros`= '$qtde_erros',`dt_ult_resp`= '$dt_ult_resp' WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}



        	function listarTodasQuestoesPorRegra($conexao){
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

        	function desativarQuestao($conexao, $id){
		$sql_query = "UPDATE `questoes` SET `status`= 0 WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}
        
        	function listarQuestaoPorRegraPorMateria($conexao,$materia){
		$sql_query = "SELECT * FROM `questoes` WHERE `materia`='$materia' and `status`=1 order by (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(SECOND, `dt_ult_resp`, NOW()))) limit 0,1;";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}

        	function listarQuestaoNaoFeitaPorRegraPorMateria($conexao,$materia,$max){
		$sql_query = "SELECT * FROM `questoes` WHERE `materia`='$materia' and `status`=1 and `qtde_acertos`=$max order by (`qtde_acertos`/(`qtde_erros` * `coeficiente` * TIMESTAMPDIFF(SECOND, `dt_ult_resp`, NOW()))) limit 0,1;";
		$sql_exec  = mysqli_query($conexao, $sql_query);		
		return mysqli_fetch_array($sql_exec);
	}	

	function NumQuestPorMateria($conexao){
		$sql_query = "SELECT `m`.`nome_materia` as `materia`, COUNT(`q`.`id`) as `qtde` from `materia` as `m`, `questoes` as `q` where `q`.`materia` = `m`.`id` group by `m`.`nome_materia`;";
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

	function ResolvidasPorDia($conexao){
		$sql_query = "SELECT DATE_FORMAT(`dt_ult_resp`,'%Y-%m-%d') as `data`, DAYNAME(`dt_ult_resp`) as `dia`, COUNT(`id`) as `qtde` FROM `questoes` GROUP BY `data` order by `data` desc limit 7;";
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

	function alterarQuestao($conexao, $id, $texto, $resposta, $materia, $coeficiente){
		$sql_query = "UPDATE `questoes` SET `texto`='$texto',`resposta`='$resposta',`materia`='$materia',`coeficiente`='$coeficiente' WHERE `id` = '$id';";
		return mysqli_query($conexao, $sql_query);
	}

?>		