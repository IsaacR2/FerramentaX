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
	require_once("db/materia_db.php");
	require_once("db/topico_db.php");
	require_once("db/conexao.php");
	if (!isset($_GET["IdMat"])) {
		echo "<script type='text/javascript'>window.location.href = 'painelAdm.php'</script>";
	}
	$topico = listarTopicos($conn, $_GET["IdMat"]);
	?>

	<div class="container" align="center">
		<h2>Cadastro de Topico</h2>
		<form name="form1" action="proc/proc_altTopico.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Topico:</label>
				<input type="text" class="form-control" id="IdEmail" value="<?php echo $topico['nome_topico']; ?>" name="NTopico" required placeholder="Digite seu email..." />
				<input type="hidden" name="IdTopico" value="<?php echo $topico['id'] ?>">
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">
				<select name="NMateria" class="form-control">
					<?php
					$materias = listarTodasMaterias($conn);
				             foreach ($materias as $linha) {
				             	$id = $linha['id'];
				             	$mat = $linha['nome_materia'];
				             	echo "<option value='$id'";
				             	echo ($id == $topico['materia']) ? "selected" : "" ;
				             	echo ">$mat</option>"; 
				             }
					?>					    
				</select> 
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">    
				<button type="submit" class="btn btn-primary" name="Enviar">Alterar</button>
				<button type="button" class="btn btn-default" name="Voltar" onclick="window.location.href='removerTopico.php'">Voltar</button>				
			</div>				
		</form>
	</div>
	<br />	

</body>
</html>