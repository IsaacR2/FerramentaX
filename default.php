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
  
  <script type="text/javascript">
    function mostrarResposta(){
      document.getElementById('resposta').style.display='block'; 
      document.getElementById('bResposta').style.display='none';      
    }
  </script>

</head>
<body>


  <?php
    require("template.php");
    require("db/conexao.php");
    require("db/questoes_db.php");
    
    $materia="";
    if (isset($_GET['mat'])) {
      $materia = $_GET['mat'];      
      if(isset($_GET['Nf'])){
        $questao = listarQuestaoNaoFeitaPorRegraPorMateria($conn,$materia,$_GET['Nf']);
      }else{
        $questao = listarQuestaoPorRegraPorMateria($conn,$materia);
      }
    }else{
      $questao = listarQuestaoPorRegra($conn);
    }
  ?>


  <div class="container">

    <div class="row">

      <div class="well">
        <div id="texto">
          <?php
            echo $questao['texto'];
          ?>
        </div>

        <br />

        <div align="left">
          <button type='button' id="bResposta" class='btn btn-primary' onclick="javascript:mostrarResposta();" align='center'>Mostra Resposta</button>
        </div>

        <div id="resposta" style="display:none;">
          <?php
            echo $questao['resposta'];
          ?>
        </div>

        <br />

        <div id="resultado">
          <form name="formulario1" action="proc/proc_atualizarQuestao.php" method="POST">
            <label><input type="radio" name="NResultado" checked value="A"> Acertei</label> <br />
            <label><input type="radio" name="NResultado" value="E"> Errei</label> <br /> <br />
            <input type="hidden" name="Nid" value="<?php echo $questao['id'];?>">
            <input type="hidden" name="NAcertos" value="<?php echo $questao['qtde_acertos'];?>">
            <input type="hidden" name="NErros" value="<?php echo $questao['qtde_erros'];?>">
            <input type="hidden" name="NPag" value="<?php echo $materia;?>">
            <button type='submit' class='btn btn-default col-md-offset-11' align='right'>Próxima</button>
          </form>
        </div>

      </div>
      
    </div>
  </div>

</body>
</html>


						