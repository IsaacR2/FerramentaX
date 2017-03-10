<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/template.css">
</head>
<body>
  

  <!-- <div class="jumbotron">
    <div class="container text-center">
      <h1 id="top">Clube de Astronomia</h1>
      <p>Produtos, Variedades & Pre&ccedil;o Baixo</p>
    </div>
  </div> -->

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <!--<span class="icon-bar"></span>
          <span class="icon-bar"></span> -->
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="esq">
          <li><a href="default.php">Home</a></li>
          
            <?php           
            if (isset($_SESSION['sLogin'])) {
              require("db/materia_db.php");
              require("db/conexao.php");
              $materias = listarTodasMaterias($conn);
              foreach ($materias as $linha) {
                $id = $linha['id'];
                $mat = $linha['nome_materia'];
                echo "<li><a href='default.php?mat=$id'>$mat</a></li>"; 
              }            
            ?>

          <li><a href="cadQuest.php">Add Questão</a></li>
          <li><a href="todasQuestoes.php">Todas Questoes</a></li>
          <li><a href="estatisticas.php">Estatisticas</a></li>

            <?php
            }
            ?>
        </ul>
        <ul class="nav navbar-nav navbar-right" id="dir">

          <?php           
            if (!isset($_SESSION['sLogin'])) {
              echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }else{              
              echo "<li><a href='sair.php'><span class='glyphicon glyphicon-log-out'></span> Sair</a></li>";
            } 
          ?>
          
        </ul>
      </div>
    </div>
  </nav>


  <script>
    /* 

    $(document).ready(function(){
        $(".nav a").click(function(){
            $(this).tab('show');
        });
    });

    */

    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });

    $(document).ready(function(){
      $('.dropdown-menu a.test').on("onmouseover", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });


  </script>  

</body>
</html>	