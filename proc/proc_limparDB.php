<?php 
	require("../db/geral_db.php");
	require("../db/conexao.php");

	if(atualizarBanco($conn)){
		header("Location: ../painelAdm.php?msg=sucess");
	}else{
		echo "ERRO";
	}



 ?>