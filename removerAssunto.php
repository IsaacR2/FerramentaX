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
    require_once("db/assunto_db.php");
    $assuntos = listarTodasAssuntos($conn);
  ?>


  <div class="container">
    <div class="row">
    <label><h4>Painel Administrativo</h4></label>
    <button type="button" class="btn btn-default" name="Voltar" onclick="window.location.href='painelAdm.php'">Voltar</button>
      <div class="well">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Assunto</th>
              <th>Remover</th>
                  <th>Alterar</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=0; foreach ($assuntos as $linha): $i++?>
              <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome_assunto']; ?></td>
                <td>
                          <form name="form<?php echo $i; ?>" method="POST" action="proc/proc_removerAssunto.php" >
                            <input type="hidden" name="NIdAssunto" value="<?php echo $linha['id']; ?>">
                            <button type="submit" class="btn btn-danger">Remover</button>
                          </form>
                        </td>
                        <td>
                          <button type="submit" class="btn btn-primary" onclick="window.location.href='altAssunto.php?IdMat=<?php echo $linha['id']; ?>'">Alterar</button>
                        </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div>

      </div>      
    </div>
  </div>

</body>
</html>