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
    require_once("db/conexao.php");
    $pag = "";
    //Filtrar por Matéria
    if (isset($_GET['mat'])) {
      require_once("db/questao_has_materia.php");
      $materia = $_GET['mat'];
      $pag = "mat=$materia";
      if(isset($_GET['Nf'])){
        $Nf = $_GET['Nf'];
        $questao = listarQuestaoNaoFeitaPorRegraPorMateria($conn,$materia,$Nf);
        $pag = "mat=$materia&Nf=$Nf";
      }else{
        $questao = listarQuestaoMateria($conn,$materia);
      }
    //Filtrar por Topico
    }else if(isset($_GET['top'])){
      require_once("db/questao_has_topico.php");
      $topico = $_GET['top'];
      $pag = "top=$topico";
      if(isset($_GET['Nf'])){
        $Nf = $_GET['Nf'];
        $questao = listarQuestaoNaoFeitaPorRegraPorTopico($conn,$topico,$Nf);
        $pag = "top=$materia&Nf=$Nf";
      }else{
        $questao = listarQuestaoTopico($conn,$topico);
      }
    //Filtrar por Assunto
    }else if(isset($_GET['assu'])){
      require_once("db/questao_has_assunto.php");
      $assunto = $_GET['assu'];
      $pag = "assu=$assunto";
      if(isset($_GET['Nf'])){
        $Nf = $_GET['Nf'];
        $questao = listarQuestaoNaoFeitaPorRegraPorAssunto($conn,$assunto,$Nf);
        $pag = "assu=$assunto&Nf=$Nf";
      }else{
        $questao = listarQuestaoAssunto($conn,$assunto);
      }
    //Sem Filtro, escolhe dentre todas
    }else{
      require_once("db/questoes_db2.php");    
      if(isset($_GET['Nf'])){
        $Nf = $_GET['Nf'];
        $questao = listarQuestaoNaoFeitaPorRegra($conn,$Nf);
        $pag = "Nf=$Nf";
      }else{
        $questao = listarQuestaoPorRegra($conn);
      }

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
            <input type="hidden" name="NPag" value="<?php echo $pag;?>">
            <button type='submit' class='btn btn-default col-md-offset-11' align='right'>Próxima</button>
          </form>
        </div>

      </div>
      
    </div>
  </div>

</body>
</html>


						