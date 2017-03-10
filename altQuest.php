<?php
require("validaSessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ferramenta X</title>
	<meta charset="UTF-8">
	<style type="text/css">
		img {
			width: 100%;
		}
		.right {
			position: relative;
			right: 0px;

		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<!-- <script>
		$(document).ready(function(){
			$("#altTemas").click(function(){			    
			    //$(location).attr('href', 'cadQuest.php?qtdeTemas=' + $("#numTemas").value());
			    window.location.href = "http://seusite.com"+$("#numTemas").value();
			});
		});				
	</script> -->
	<script type="text/javascript">
		function teste() {
			var tempo = document.getElementById('numTemas').value;			
			window.location.href = 'cadQuest.php?qtdeTemas=' + tempo;
		}
	</script>

</head>
<body>
	<?php
	require("template.php");
	require("db/conexao.php");
	require("db/questoes_db2.php");
	require_once("db/materia_db.php");
	require_once("db/topico_db.php");
	require_once("db/assunto_db.php");
	require_once("db/questao_has_assunto.php");
	require_once("db/questao_has_materia.php");
	require_once("db/questao_has_topico.php");
	if (!isset($_GET["IdQuest"])) {
		echo "<script type='text/javascript'>window.location.href = 'todasQuestoes.php'</script>";
	}
	
	/*

	$numMat = NumVincPorQuestaoAssunto($conn, $_GET["IdQuest"]);
	$numTop = NumVincPorQuestaoMateria($conn, $_GET["IdQuest"]);
	$numAssu = NumVincPorQuestaoTopico($conn, $_GET["IdQuest"]);
	$maior = max($numMat,$numTop,$numAssu);
	$id = $_GET["IdQuest"];

	if (!isset($_GET["qtdeTemas"])) {	
		echo "<script type='text/javascript'>window.location.href = 'cadQuest.php?qtdeTemas=$maior&IdQuest=$id'</script>"
	}

	$assuntos = listarTodasAssuntoPorQuestao($conn, $id);
	$materias = listarTodasMateriaPorQuestao($conn, $id);
	$topicos = listarTodasTopicoPorQuestao($conn, $id);
	$tabela = array();
	$i=-1;	
	foreach ($materias as $linha) {
		$j=0;
		$i++;
		$tabela[$i][$j] = $linha
		foreach ($topicos as $linha2) {
			if ($linha2['materia'] == $linha['id']) {
				$j++;
				$tabela[$i][$j] = $linha2;
				foreach ($assunto as $linha3) {
					if ($linha3['topico'] == $linha2) {
						# code...
					}
				}
			}
		}
	}

	*/

	?>	
	<div class="container" align="center">
		<div id="cabecalho" align="left">
			<h3>Bem vindo</h3>
		</div>
		<div class="row">
			<div id="comentario" align="left" class="well">
				<h3>Cadastrar Questão</h3><br />				
				<form name="formulario1" action="proc/proc_addQuestao.php" method="POST">
				<h4>Temas</h4><br />				
									
					<br />
					<h4>Coeficiente</h4><br />						
					<input type="number" min="0.01" class="form-control" step="0.01" name="NCoef" placeholder="Digite a matéria para adiciaonar..." required /> <br />	
					<h4>Questão</h4><br />					
					<textarea name="NTexto" id="NTexto" style="resize:none" rows="10"></textarea>
					<script>
						CKEDITOR.replace( 'NTexto' );
					</script>
					<br />
					<h4>Resposta</h4><br />	
					<textarea name="NResp" id="NResp" style="resize:none" rows="5"></textarea> 
					<script>
						CKEDITOR.replace( 'NResp' );
					</script>
					<br />
					<button class="btn btn-default pull-right" type="submit">Adicionar</button>
				</form>
			</div> 
		</div>
	</div>
</body>
</html>			