<?php
	require("../db/questoes_db.php");
	require("../db/conexao.php");        
        $id = addslashes($_POST['Nid']);


        if(desativarQuestao($conn, $id)){
        	//echo "inseriu";
                echo "<script type='text/javascript'>window.location.href = '../todasQuestoes.php'</script>";
        	//header("Location: ../default.php");    	
        }else{
        	echo "Erro ao desativar";
        }

        //echo "sai";
	

?>