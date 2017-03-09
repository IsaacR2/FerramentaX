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
	?>

	<div class="container" align="center">
		<h2>Cadastro de Materia</h2>
		<form name="form1" action="proc/proc_addMateria.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Materia:</label>
				<input type="text" class="form-control" id="IdEmail" name="NMateria" required placeholder="Digite seu a materia..." />
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">    
				<button type="submit" class="btn btn-primary" name="Enviar">Cadastrar</button>				
			</div>				
		</form>
	</div>
	<br />	

</body>
</html>