<?php
  require("validaSessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Ferramenta X</title>   

</head>
<body onload="desativarAjax()">


  <?php
    require("template.php");
    require("db/conexao.php");
    require("db/questoes_db.php");
    $questao = listarTodasQuestoesPorRegra($conn);
  ?>


  <div class="container">
    <?php
      $i=0;
      foreach ($questao as $linha) {
      $i++;
    ?>

    <div class="row">

      <div class="well">
        <div id="texto">
          <?php
            echo $linha['texto'];
          ?>
        </div>

        <br />       

        <div id="resposta">
          <?php
            echo $linha['resposta'];
          ?>
        </div>

        <br />

        <div id="resultado">
          <form name="form<?php echo $i; ?>";" action="proc/proc_removerQuestao.php" method="POST">            
            <input type="hidden" name="Nid" value="<?php echo $linha['id'];?>">
            <button type='submit' class='btn btn-danger col-md-offset-11' align='right'>Remover</button>
          </form>
            <a href="cadQuest.php?alter=<?php echo $linha['id'];?>;">Alterar Questao</a>
        </div>      

      </div>
      
    </div>

    <?php
        }
    ?>

  </div>

</body>
</html>