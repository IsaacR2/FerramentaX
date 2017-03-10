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
	require("db/materia_db.php");
	require ("db/conexao.php");
	?>

	<div class="container" align="center">
		<h2>Cadastro de Topico</h2>
		<form name="form1" action="proc/proc_addTopico.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Topico:</label>
				<input type="text" class="form-control" id="IdEmail" name="NTopico" required placeholder="Digite seu email..." />
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">
				<select name="NMateria" class="form-control">
					<?php
					$materias = listarTodasMaterias($conn);
				             foreach ($materias as $linha) {
				             	$id = $linha['id'];
				             	$mat = $linha['nome_materia'];
				             	echo "<option value='$id'>$mat</option>"; 
				             }
					?>					    
				</select> 
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