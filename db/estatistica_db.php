<?php

	function listarDia($conexao, $data){
		$sql_query = "SELECT `num_quest_resolv` as `num`, `id` FROM `estatisticas` WHERE `dt_estat` = '$data' limit 0,1;";
		$sql_exec  = mysqli_query($conexao, $sql_query);
		if ($sql_exec) {
			return mysqli_fetch_array($sql_exec);
		}else{
			return false;
		}		
	}	

	function atualizarDias($conexao, $data, $num){
		$sql_query = "UPDATE `estatisticas` SET `num_quest_resolv` = $num WHERE `dt_estat`='$data';";
		return mysqli_query($conexao, $sql_query);				
	}

	function inserirDias($conexao, $num, $status, $data){
		$sql_query = "INSERT INTO `estatisticas`(`dt_estat`, `num_quest_resolv`, `status`) VALUES ('$data','$num','$status')";
		return mysqli_query($conexao, $sql_query);				
	}

	function listarDias($conexao){
		$sql_query = "SELECT `dt_estat` as `data`, DAYNAME(`dt_estat`) as `dia`, `num_quest_resolv` as `num` FROM `estatisticas` WHERE `status` = 1 order by `dt_estat` desc limit 0,7;";
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

?>