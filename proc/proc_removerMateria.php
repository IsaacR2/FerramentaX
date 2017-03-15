<?php
        require("../validaSessao.php");
        require("../db/materia_db.php");
        require("../db/conexao.php");

        $materia = $_POST['NIdMateria'];

        if (desativarMateria($conn, $materia)) {
                header("Location: ../removerMateria.php?msg=sucess");   
        }else{
                echo "Erro ao remover";
        }
?>		