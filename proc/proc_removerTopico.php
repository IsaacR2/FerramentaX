<?php
        require("../validaSessao.php");
        require("../db/topico_db.php");
        require("../db/conexao.php");

        $topico = $_POST['NIdTopico'];

        if (desativarTopico($conn, $topico)) {
                header("Location: ../removerTopico.php?msg=sucess");   
        }else{
                echo "Erro ao remover";
        }
?>