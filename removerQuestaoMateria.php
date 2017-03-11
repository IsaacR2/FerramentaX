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
    require("db/questao_has_materia.php");
    if (!isset($_GET["IdQuest"])) {
      echo "<script type='text/javascript'>window.location.href = 'todasQuestoes.php'</script>";
    }
    $id = intval($_GET["IdQuest"]);
    $materia = listarTodasMateriaPorQuestao($conn, $id);
  ?>

  
  <div class="container">
  <div class="row">
    <?php
      $i=0;
      //var_dump ($materia);
      if($materia != 0):
        foreach ($materia as $linha):
        $i++;
    ?>

    

      <div class="well col-md-4">        
        <div id="texto">
          <label>Materia: </label>
          <?php
            echo $linha['nome_materia'];
          ?>
        </div>
        <br />
        <div id="resultado">
          <form name="form<?php echo $i; ?>";" action="proc/proc_removerQuestaoMateria.php" method="POST">            
            <input type="hidden" name="Nid" value="<?php echo $linha['id'];?>">
            <button type='submit' class='btn btn-danger col-md-offset-9' align='right'>Remover</button>
          </form>            
        </div>
      </div>
      
    

    <?php
          endforeach;
        endif;
    ?>
</div>
  </div>

</body>
</html>