<?php
        require("../validaSessao.php");
        require("../db/assunto_db.php");
        require("../db/conexao.php");

        $assunto = $_POST['NIdAssunto'];

        if (desativarAssunto($conn, $assunto)) {
                header("Location: ../removerAssunto.php?msg=sucess");   
        }else{
                echo "Erro ao remover";
        }
?>		