<?php
        require("../validaSessao.php");
        require("../db/questao_has_assunto.php");
        require("../db/conexao.php");

        $id = addslashes($_POST['Nid']);
        $questao = $_POST['NIdQuestao'];

        if (desativarQuestaoAssunto($conn, $id)) {
                header("Location: ../removerQuestaoAssunto.php?IdQuest=$questao&msg=sucess");   
        }else{
                echo "Erro ao remover";
        }
?>		