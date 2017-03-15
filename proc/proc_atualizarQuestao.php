<?php
    require("../validaSessao.php");
    require("../db/questoes_db2.php");
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

    if(atualizarQuestao($conn, $id, $qtde_acertos, $qtde_erros, $dt_ult_resp)){
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
            header("Location: ../default.php?$pag");
        }else{
            header("Location: ../default.php");
        }        	    	
    }else{
        echo "Erro ao atualizar";
    }
?>					