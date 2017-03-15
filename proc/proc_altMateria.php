<?php
        require("../validaSessao.php");
        require("../db/materia_db.php");
        require("../db/conexao.php");

        $nome = addslashes($_POST['NMateria']);
        $id = $_POST['IdMateria'];

        if (alterarMateria($conn, $nome, $id)) {
                header("Location: ../removerMateria.php?msg=sucess");   
        }else{
                echo "Erro ao alterar";
        }

?>		