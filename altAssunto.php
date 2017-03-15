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
	require_once("db/topico_db.php");
	require_once("db/assunto_db.php");
	require_once("db/conexao.php");
	if (!isset($_GET["IdMat"])) {
		echo "<script type='text/javascript'>window.location.href = 'painelAdm.php'</script>";
	}
	$assunto = listarAssuntos($conn, $_GET["IdMat"]);
	?>

	<div class="container" align="center">
		<h2>Cadastro de Assunto</h2>
		<form name="form1" action="proc/proc_altAssunto.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Assunto:</label>
				<input type="text" class="form-control" id="IdEmail" value="<?php echo $assunto['nome_assunto']; ?>" name="NAssunto" required placeholder="Digite seu email..." />
				<input type="hidden" name="IdAssunto" value="<?php echo $assunto['id'] ?>">
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">
				<select name="NTopico" class="form-control">
					<?php
					$topicos = listarTodasTopicos($conn);
				             foreach ($topicos as $linha) {
				             	$id = $linha['id'];
				             	$mat = $linha['nome_topico'];
				             	echo "<option value='$id'";
				             	echo ($id == $assunto['topico']) ? "selected" : "" ;
				             	echo ">$mat</option>"; 
				             }
					?>					    
				</select> 
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">    
				<button type="submit" class="btn btn-primary" name="Enviar">Alterar</button>
				<button type="button" class="btn btn-default" name="Voltar" onclick="window.location.href='removerAssunto.php'">Voltar</button>				
			</div>				
		</form>
	</div>
	<br />	

</body>
</html>