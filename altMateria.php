<?php
require("validaSessao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ferramenta X</title>
</head>
<body>

	<?php
		require("template.php");
		if (!isset($_GET["IdMat"])) {
			echo "<script type='text/javascript'>window.location.href = 'painelAdm.php'</script>";
		}
		$materia = listarMaterias($conn, $_GET["IdMat"]);
	?>

	<div class="container" align="center">
		<h2>Alteração de Materia</h2>
		<form name="form1" action="proc/proc_altMateria.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Materia:</label>
				<input type="text" class="form-control" id="IdEmail" name="NMateria" required placeholder="Digite seu a materia..." value="<?php echo $materia['nome_materia'] ?>" />
				<input type="hidden" name="IdMateria" value="<?php echo $materia['id'] ?>">
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">    
				<button type="submit" class="btn btn-primary" name="Enviar">Alterar</button>
				<button type="button" class="btn btn-default" name="Voltar" onclick="window.location.href='removerMateria.php'">Voltar</button>				
			</div>				
		</form>
	</div>
	<br />	

</body>
</html>