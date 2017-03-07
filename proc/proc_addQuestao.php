<?php
//require("../validaSessao.php");
//echo $_SESSION['sLogin'];

require("../db/questoes_db.php");
require("../db/conexao.php");
require("../db/estatistica_db.php");   
$materia = addslashes($_POST['NMateria']);		
$status = 1;
$coeficiente = addslashes($_POST['NCoef']);
$texto = addslashes($_POST['NTexto']);
$resposta = addslashes($_POST['NResp']);
$qtde_feitas = 1;
$qtde_acertos = 1;
$qtde_erros = 1;
date_default_timezone_set('America/Sao_Paulo');
$dt_ult_resp = date('Y-m-d H:i:s');

//echo "cheguei";

if(inserirQuestao($conn, $texto, $resposta, $materia, $coeficiente, $qtde_acertos, $qtde_erros, $status, $dt_ult_resp)){
//echo "inseriu"; 
        //atualizando estatisticas
        $dataR = date('Y-m-d');
        $estatistica = listarDia($conn, $dataR);
        if($estatistica){
                $num = $estatistica['num']+1;
                atualizarDias($conn, $dataR, $num);
        }else{
                inserirDias($conn, 1, 1, $dataR);
        }
        //retornando a pagina              
        header("Location: ../cadQuest.php");    	
}else{
        echo "Erro ao inserir";
}

//echo "sai";


?>		