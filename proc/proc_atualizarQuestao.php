<?php

//echo $_SESSION['sLogin'];
require("../validaSessao.php");
require("../db/questoes_db.php");
require("../db/conexao.php");  
require("../db/estatistica_db.php");     
$id = addslashes($_POST['Nid']);
$qtde_acertos = $_POST['NAcertos'];
$qtde_erros = $_POST['NErros'];
$pag = $_POST['NPag'];
date_default_timezone_set('America/Sao_Paulo');
$dt_ult_resp = date('Y-m-d H:i:s');

if ($_POST['NResultado'] == 'A'){
    $qtde_acertos++;
}else{
    $qtde_erros++;
}

//echo "cheguei";

if(atualizarQuestao($conn, $id, $qtde_acertos, $qtde_erros, $dt_ult_resp)){
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
    if($pag != ""){
        header("Location: ../default.php?mat=$pag");
    }else{
        header("Location: ../default.php");
    }        	    	
}else{
    echo "Erro ao atualizar";
}

//echo "sai";


?>					