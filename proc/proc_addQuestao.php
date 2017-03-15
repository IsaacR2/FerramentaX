<?php
require("../validaSessao.php");
require_once("../db/questoes_db2.php");
require_once("../db/conexao.php");
require_once("../db/estatistica_db.php");	
require_once("../db/questao_has_materia.php");
require_once("../db/questao_has_topico.php");
require_once("../db/questao_has_assunto.php");
$status = 1;
$coeficiente = addslashes($_POST['NCoef']);
$texto = addslashes($_POST['NTexto']);
$resposta = addslashes($_POST['NResp']);
$qtde_feitas = 1;
$qtde_acertos = 1;
$qtde_erros = 1;
date_default_timezone_set('America/Sao_Paulo');
$dt_ult_resp = date('Y-m-d H:i:s');
$numTemas = intval($_POST['NnumTemas']);

//Iniciando a transação
mysqli_begin_transaction($conn, MYSQLI_TRANS_START_READ_WRITE);

if (inserirQuestao($conn, $texto, $resposta, $coeficiente, $qtde_acertos, $qtde_erros, $status, $dt_ult_resp)) {
        //Inserindo cada um dos dasdos das tabelas associativas
        $IdQuest = mysqli_insert_id($conn);
        for ($i=1; $i<= $numTemas; $i++) {

               if ($_POST["NMateria$i"] != "null") {
                        $idMat = $_POST["NMateria$i"];
                        echo "1E";
                        if (!inserirQuestaoMateria($conn, $IdQuest, $idMat, $status)) {
                                mysqli_rollback($conn);
                                header("Location: ../cadQuest.php?msg=error1.1");
                        }
                }

                if ($_POST["NTopico$i"] != "null") {
                        $idTop = $_POST["NTopico$i"];
                        echo "2E";
                        if (!inserirQuestaoTopico($conn, $IdQuest, $idTop, $status)) {
                                mysqli_rollback($conn);
                                header("Location: ../cadQuest.php?msg=error1.2");
                        }
                }

                if ($_POST["NAssunto$i"] != "null") {
                        $idAssu = $_POST["NAssunto$i"];
                        echo "3";
                        if (!inserirQuestaoAssunto($conn, $IdQuest, $idAssu, $status)) {
                                mysqli_rollback($conn);
                                header("Location: ../cadQuest.php?msg=error1.3");
                        }
                }

        }
        //Atualizando as estatísticas
        $dataR = date('Y-m-d');
        $estatistica = listarDia($conn, $dataR);
        if($estatistica){
                $num = $estatistica['num']+1;
                if(!atualizarDias($conn, $dataR, $num)){
                        mysqli_rollback($conn);
                        header("Location: ../cadQuest.php?msg=error2");
                }
        }else{
                if(!inserirDias($conn, 1, 1, $dataR)){
                        mysqli_rollback($conn);
                        header("Location: ../cadQuest.php?msg=error3");
                }
        }
        //Dando commit nas alterações bem sucedidas
        mysqli_commit($conn);
        //Voltando a página
        header("Location: ../cadQuest.php?msg=sucess");    
}else{
        mysqli_rollback($conn);
        header("Location: ../cadQuest.php?msg=error4");
}

?>		