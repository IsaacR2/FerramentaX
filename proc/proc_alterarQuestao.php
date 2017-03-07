<?php
//require("../validaSessao.php");
//echo $_SESSION['sLogin'];

require("../db/questoes_db.php");
require("../db/conexao.php");
require("../db/estatistica_db.php"); 
$id = $_POST['Nid'];
$materia = addslashes($_POST['NMateria']);		
$status = 1;
$coeficiente = addslashes($_POST['NCoef']);
$texto = addslashes($_POST['NTexto']);
$resposta = addslashes($_POST['NResp']);
//echo "cheguei";

if(alterarQuestao($conn, $id, $texto, $resposta, $materia, $coeficiente)){        
        //retornando a pagina              
        header("Location: ../todasQuestoes.php");    	
}else{
        echo "Erro ao inserir";
}

//echo "sai";


?>		