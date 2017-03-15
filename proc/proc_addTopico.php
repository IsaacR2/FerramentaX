<?php
        require("../validaSessao.php");
        require("../db/topico_db.php");
        require("../db/conexao.php");
               
        $nome = addslashes($_POST['NTopico']);	
        $materia = $_POST['NMateria'];  	
        $status = 1;

        if (inserirTopico($conn, $materia, $nome, $status)) {
                header("Location: ../cadTopico.php?msg=sucess");   
        }else{
                echo "Erro ao inserir";
        }

?>		