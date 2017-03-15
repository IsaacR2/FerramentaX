<?php
        require("../validaSessao.php");
        require("../db/questao_has_topico.php");
        require("../db/conexao.php");

        $id = addslashes($_POST['Nid']);
        $questao = $_POST['NIdQuestao'];

        if (desativarQuestaoTopico($conn, $id)) {
                header("Location: ../removerQuestaoTopico.php?IdQuest=$questao&msg=sucess");   
        }else{
                echo "Erro ao remover";
        }
?>		