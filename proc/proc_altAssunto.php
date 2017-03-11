<?php
        require("../validaSessao.php");
        require("../db/assunto_db.php");
        require("../db/conexao.php");

        $nome = addslashes($_POST['NAssunto']);
        $topico = $_POST['NTopico'];
        $id = $_POST['IdAssunto'];

        if (alterarAssunto($conn, $topico, $nome, $id)) {
                header("Location: ../removerAssunto.php?msg=sucess");   
        }else{
                echo "Erro ao alterar";
        }

?>