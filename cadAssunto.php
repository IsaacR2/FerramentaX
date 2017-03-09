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
	require("db/topico_db.php");
	require ("db/conexao.php");
	?>

	<div class="container" align="center">
		<h2>Cadastro de Assunto</h2>
		<form name="form1" action="proc/proc_addAssunto.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Topico:</label>
				<input type="text" class="form-control" id="IdEmail" name="NAssunto" required placeholder="Digite seu email..." />
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">
				<select name="NTopico" class="form-control">
					<?php
					$topicos = listarTodasTopicos($conn);
				            foreach ($topicos as $linha) {
				            	$id = $linha['id'];
				            	$top = $linha['nome_topico'];
				            	echo "<option value='$id'>$top</option>"; 
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