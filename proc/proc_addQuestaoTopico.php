<?php
        require("../validaSessao.php");
        require("../db/questao_has_topico.php");
        require("../db/conexao.php");

        $topico = addslashes($_POST['NTopico']);
        $questao = $_POST['NIdQuestao'];
        $status = 1;

        if (inserirQuestaoTopico($conn, $questao, $topico, $status)) {
                header("Location: ../addQuestaoTopico.php?IdQuest=$questao&msg=sucess");   
        }else{
                echo "Erro ao inserir";
        }

?>		