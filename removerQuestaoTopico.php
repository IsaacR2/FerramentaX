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
    require_once("db/conexao.php");
    require_once("db/questao_has_topico.php");
    require_once("db/topico_db.php");
    if (!isset($_GET["IdQuest"])) {
      echo "<script type='text/javascript'>window.location.href = 'todasQuestoes.php'</script>";
    }
    $id = intval($_GET["IdQuest"]);
    $topicoQuestao = listarTodasQuestaoHasTopicoPorQuestao($conn, $id);
  ?>

  
  <div class="container">
  <input type="hidden" name="NIdQuestao" id="IdQuestao" value="<?php echo $id;?>">  
  <button type="button" class="btn btn-default" name="Voltar" onclick="voltar()">Voltar</button>
  <div class="row">
    <?php
      $i=0;
      if($topicoQuestao != 0):
        foreach ($topicoQuestao as $linha):
        $i++;
    ?>

    

      <div class="well col-md-4">        
        <div id="texto">
          <label>Topico: </label>
          <?php
            $topico = listarTopicos($conn, $linha['topico']);
            echo $topico['nome_topico'];
          ?>
        </div>
        <br />
        <div id="resultado">
          <form name="form<?php echo $i; ?>";" action="proc/proc_removerQuestaoTopico.php" method="POST">            
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