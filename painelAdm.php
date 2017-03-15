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
  ?>

    <div class="container">
      <div class="row">
      <label><h4>Painel Administrativo</h4></label>
        <div class="well">
          <label><h5>Temas</h5></label>
          <div class="well" id="Temas">
            <table class="table">
              <tr>
                <td><label>Materias: </label></td>
                <td><button type="button" class="btn btn-primary" onclick="window.location.href='cadMateria.php'">Adicionar</button></td>
                <td><button type="button" class="btn btn-danger" onclick="window.location.href='removerMateria.php'">Remover / Alterar</button></td>
              </tr>          
              <tr>
                <td><label>Tópico: </label></td>
                <td><button type="button" class="btn btn-primary" onclick="window.location.href='cadTopico.php'">Adicionar</button></td>
                <td><button type="button" class="btn btn-danger" onclick="window.location.href='removerTopico.php'">Remover / Alterar</button></td>
              </tr>
              <tr>
                <td><label>Assunto: </label></td>
                <td><button type="button" class="btn btn-primary" onclick="window.location.href='cadAssunto.php'">Adicionar</button></td>
                <td><button type="button" class="btn btn-danger" onclick="window.location.href='removerAssunto.php'">Remover / Alterar</button></td>
              </tr>
            </table>            
        </div>
        <label><h5>Questões</h5></label> 
        <div class="well">
          <button type="button" class="btn btn-danger" onclick="window.location.href='todasQuestoes.php'">Remover / Alterar</button>
        </div>
        <label><h5>Estatísticas</h5></label> 
        <div class="well">
          <button type="button" class="btn btn-primary" onclick="window.location.href='estatisticas.php'">Estatísticas</button>
        </div>
        <label><h5>Banco de Dados</h5></label> 
        <div class="well">
          <button type="button" class="btn btn-danger" onclick="window.location.href='proc/proc_limparDB.php'">Limpar o Banco</button>
        </div>   
      </div>
    </div>

</body>
</html>


						