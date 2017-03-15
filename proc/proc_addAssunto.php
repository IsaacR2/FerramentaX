<?php
        require("../validaSessao.php");
        require("../db/assunto_db.php");
        require("../db/conexao.php");
               
        $nome = addslashes($_POST['NAssunto']);	
        $topico = $_POST['NTopico'];  	
        $status = 1;

        if (inserirAssunto($conn, $topico, $nome, $status)) {
                header("Location: ../cadAssunto.php?msg=sucess");   
        }else{
                echo "Erro ao inserir";
        }

?>		