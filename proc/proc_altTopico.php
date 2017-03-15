<?php
        require("../validaSessao.php");
        require("../db/topico_db.php");
        require("../db/conexao.php");

        $nome = addslashes($_POST['NTopico']);
        $materia = $_POST['NMateria'];
        $id = $_POST['IdTopico'];

        if (alterarTopico($conn, $materia, $nome, $id)) {
                header("Location: ../removerTopico.php?msg=sucess");   
        }else{
                echo "Erro ao alterar";
        }

?>		