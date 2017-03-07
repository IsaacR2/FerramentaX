<?php

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
?>