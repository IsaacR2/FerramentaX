<?php
        require("../validaSessao.php");
        require("../db/questao_has_materia.php");
        require("../db/conexao.php");

        $id = addslashes($_POST['Nid']);
        $questao = $_POST['NIdQuestao'];

        if (desativarQuestaoMateria($conn, $id)) {
                header("Location: ../removerQuestaoMateria.php?IdQuest=$questao&msg=sucess");   
        }else{
                echo "Erro ao remover";
        }
?>		