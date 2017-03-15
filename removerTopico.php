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
    require_once("db/topico_db.php");
    require_once("db/materia_db.php");
    $topicos = listarTodasTopicos($conn);
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
              <th>Tópico</th>
              <th>Materia</th>
              <th>Remover</th>
                  <th>Alterar</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=0; foreach ($topicos as $linha): $i++?>
              <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome_topico']; ?></td>
                <td>
                  <?php
                    $materia = listarMaterias($conn, $linha['materia']);
                    echo $materia['nome_materia'];
                  ?>
                </td>
                <td>
                          <form name="form<?php echo $i; ?>" method="POST" action="proc/proc_removerTopico.php" >
                            <input type="hidden" name="NIdTopico" value="<?php echo $linha['id']; ?>">
                            <button type="submit" class="btn btn-danger">Remover</button>
                          </form>
                        </td>
                        <td>
                          <button type="submit" class="btn btn-primary" onclick="window.location.href='altTopico.php?IdMat=<?php echo $linha['id']; ?>'">Alterar</button>
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