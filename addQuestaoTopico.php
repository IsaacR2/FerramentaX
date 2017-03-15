<?php
require("validaSessao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ferramenta X</title>
</head>
<script type="text/javascript">
	function voltar() {
		var idQuestao = document.getElementById('IdQuestao').value;
		window.location.href = 'altQuest.php?IdQuest=' + idQuestao;
	}
</script>
<body>

	<?php
	require("template.php");
	require_once("db/topico_db.php");
	if (!isset($_GET["IdQuest"])) {
	      echo "<script type='text/javascript'>window.location.href = 'todasQuestoes.php'</script>";
	}
	$id = intval($_GET["IdQuest"]);
	$topico = listarTodasTopicos($conn);
	?>

	<div class="container" align="center">
		<h2>Cadastro de Topico da Questão</h2>
		<form name="form1" action="proc/proc_addQuestaoTopico.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">Topico:</label>
				<select name="NTopico" class="form-control">
					<?php foreach ($topico as $linha): ?>
						<option value="<?php echo $linha['id'] ?>"><?php echo $linha['nome_topico'] ?></option>	
					<?php endforeach; ?>
				</select>
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">
				<input type="hidden" id="IdQuestao" name="NIdQuestao" value="<?php echo $id; ?>">    
				<button type="submit" class="btn btn-primary" name="Enviar">Adicionar</button>
				<button type="button" class="btn btn-default" name="Voltar" onclick="voltar()">Voltar</button>				
			</div>				
		</form>
	</div>
	<br />	

</body>
</html>