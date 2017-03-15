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
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="esq">
          <li><a href="default.php">Home</a></li>
          <li><a href="painelAdm.php">Painel de Controle</a></li>
          <li><a href="cadQuest.php">Add Questão</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" >Temas <span class="caret"></span></a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <?php
              require_once("db/conexao.php");
              require_once("db/materia_db.php");
              require_once("db/topico_db.php");
              require_once("db/assunto_db.php");

              $materias = listarTodasMaterias($conn);              
              foreach ($materias as $linha):
            ?>
                <li class="dropdown-submenu">
                  <a class="test" tabindex="-1" href="default.php?mat=<?php echo $linha['id'];?>"><?php echo $linha['nome_materia'];?></a>
                  <ul class="dropdown-menu">

                    <?php
                      $topico = listarTopicosPorMateria($conn, $linha['id']);
                      foreach ($topico as $linha2): 
                    ?>
                        <li class="dropdown-submenu">
                          <a class="test" tabindex="-1" href="default.php?top=<?php echo $linha2['id'];?>"><?php echo $linha2['nome_topico'];?></a>
                          <ul class="dropdown-menu">
                            <?php
                              $assunto = listarAssuntosPorTopico($conn, $linha2['id']);
                              foreach ($assunto as $linha3):
                            ?>
                              <li><a tabindex="-1" href="default.php?assu=<?php echo $linha3['id'];?>"><?php echo $linha3['nome_assunto'];?></a></li>
                            <?php
                              endforeach;
                            ?>
                          </ul>
                        </li>
                    <?php
                      endforeach;
                    ?>
                  </ul>
                </li>
              <?php
              endforeach;         
              ?>
            </ul>
          </li>
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
</body>
</html>	