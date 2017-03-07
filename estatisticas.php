<?php
require("validaSessao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>Ferramenta X</title>

        <style type="text/css">
                img{
                        max-width: 100%;
                }
        </style>

</head>
<body>
        <?php
        require("template.php");
        require("db/conexao.php");
        require("db/questoes_db.php");
        require("db/estatistica_db.php");     
        ?>


        <div class="container">

                <div class="row">

                        <div class="well"> 
                                Número de questões por matéria: <br><br>
                                <?php
                                $dados = NumQuestPorMateria($conn);
                                foreach ($dados as $linha) {
                                        echo $linha['materia'] . ": " . $linha['qtde'] . "<br>";
                                }
                                echo "<br> Questões Resolvidas Por dia: <br><br>";
                                $dados = listarDias($conn);
                                foreach ($dados as $linha) {
                                        echo $linha['data'] . ", " . $linha['dia'] . ": " . $linha['num'] . "<br>";
                                }
                                $sql_query = "SELECT (sum(`qtde_acertos`)-sum(`qtde_erros`))*100/(sum(`qtde_acertos`-1)+sum(`qtde_erros`-1)) as 'Porcentagem' FROM `questoes` WHERE `status`=1 and `materia`=6;";
                                $sql_exec  = mysqli_query($conn, $sql_query);
                                echo "<br />Procentagem de acertos: ";
                                $auxx = mysqli_fetch_array($sql_exec);
                                echo $auxx[Porcentagem] . "%";
                                ?>
                        </div>
                </div>
        </div>
</body>
</html> 	