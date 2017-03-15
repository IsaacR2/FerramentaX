<?php
        require("../validaSessao.php");
        require("../db/questao_has_assunto.php");
        require("../db/conexao.php");

        $assunto = addslashes($_POST['NAssunto']);
        $questao = $_POST['NIdQuestao'];
        $status = 1;

        if (inserirQuestaoAssunto($conn, $questao, $assunto, $status)) {
                header("Location: ../addQuestaoAssunto.php?IdQuest=$questao&msg=sucess");   
        }else{
                echo "Erro ao inserir";
        }

?>		