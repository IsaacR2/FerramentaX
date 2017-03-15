<?php
  require("validaSessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Ferramenta X</title>   

</head>
<body>


  <?php
    require("template.php");
    require("db/conexao.php");
    require("db/questao_has_assunto.php");
    $assunto = listarTudo($conn);
  ?>


  <div class="container">
    <?php
      $i=0;
      foreach ($assunto as $linha) {
      $i++;
    ?>

    <div class="row">

      <div class="well col-md-4 col-md-offset-4">
        <div id="texto">
        <label>Id da Questão</label>
          <?php
            echo $linha['questao'];
          ?>
        </div>
        <br />
        <div id="texto">
        <label>Id do Assunto</label>
          <?php
            echo $linha['assunto'];
          ?>
        </div>

        <br />

        <div id="resultado">
          <form name="form<?php echo $i; ?>";" action="proc/proc_removerQuestaoAssunto.php" method="POST">            
            <input type="hidden" name="Nid" value="<?php echo $linha['id'];?>">
            <button type='submit' class='btn btn-danger col-md-offset-9' align='right'>Remover</button>
          </form>            
        </div>      

      </div>
      
    </div>

    <?php
        }
    ?>

  </div>

</body>
</html>