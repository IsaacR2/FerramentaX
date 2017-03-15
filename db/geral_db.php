<?php

	function atualizarBanco($conexao){
		$sql_query = "DELETE FROM `questao_has_assunto` WHERE `status` = 0; DELETE FROM `questao_has_topico` WHERE `status` = 0; DELETE FROM `questao_has_materia` WHERE `status` = 0; DELETE FROM `assunto` WHERE `status` = 0; DELETE FROM `topico` WHERE `status` = 0; DELETE FROM `materia` WHERE `status` = 0;";
		return mysqli_query($conexao, $sql_query);
	}



?>