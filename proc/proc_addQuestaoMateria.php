<?php
        require("../validaSessao.php");
        require("../db/questao_has_materia.php");
        require("../db/conexao.php");

        $materia = addslashes($_POST['NMateria']);
        $questao = $_POST['NIdQuestao'];
        $status = 1;

        if (inserirQuestaoMateria($conn, $questao, $materia, $status)) {
                header("Location: ../addQuestaoMateria.php?IdQuest=$questao&msg=sucess");   
        }else{
                echo "Erro ao inserir";
        }

?>		