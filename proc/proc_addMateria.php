<?php
        require("../validaSessao.php");
        require("../db/materia_db.php");
        require("../db/conexao.php");

        $nome = addslashes($_POST['NMateria']);		
        $status = 1;

        if (inserirMateria($conn, $nome, $status)) {
                header("Location: ../cadMateria.php?msg=sucess");   
        }else{
                echo "Erro ao inserir";
        }

?>		