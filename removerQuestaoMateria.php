<?php
  require("validaSessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Ferramenta X</title>   

</head>
<script type="text/javascript">
  function voltar() {
    var idQuestao = document.getElementById('IdQuestao').value;
    window.location.href = 'altQuest.php?IdQuest=' + idQuestao;
  }
</script>
<body>


  <?php
    require("template.php");
    require("db/conexao.php");
    require("db/questao_has_materia.php");
    require_once("db/materia_db.php");
    if (!isset($_GET["IdQuest"])) {
      echo "<script type='text/javascript'>window.location.href = 'todasQuestoes.php'</script>";
    }
    $id = intval($_GET["IdQuest"]);
    $materiaQuestao = listarTodasQuestaoHasMateriaPorQuestao($conn, $id);
  ?>

  
  <div class="container">
  <input type="hidden" name="NIdQuestao" id="IdQuestao" value="<?php echo $id;?>">  
  <button type="button" class="btn btn-default" name="Voltar" onclick="voltar()">Voltar</button>
  <div class="row">
    <?php
      $i=0;
      if($materiaQuestao != 0):
        foreach ($materiaQuestao as $linha):
        $i++;
    ?>

    

      <div class="well col-md-4">        
        <div id="texto">
          <label>Materia: </label>
          <?php
            $materia = listarMaterias($conn, $linha['materia']);
            echo $materia['nome_materia'];
          ?>
        </div>
        <br />
        <div id="resultado">
          <form name="form<?php echo $i; ?>";" action="proc/proc_removerQuestaoMateria.php" method="POST">            
            <input type="hidden" name="Nid" value="<?php echo $linha['id'];?>">
            <input type="hidden" name="NIdQuestao" value="<?php echo $id;?>">
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