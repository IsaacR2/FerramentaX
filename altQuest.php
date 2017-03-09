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
	require("db/questoes_db.php");
	require_once("db/materia_db.php");
	require_once("db/topico_db.php");
	require_once("db/assunto_db.php");
	require_once("db/questao_has_assunto.php");
	require_once("db/questao_has_materia.php");
	require_once("db/questao_has_topico.php");
	if (!isset($_GET["IdQuest"])) {
		echo "<script type='text/javascript'>window.location.href = 'todasQuestoes.php'</script>";
	}
	if (!isset($_GET["qtdeTemas"])) {
		$numMat = NumVincPorQuestaoAssunto($conn, $_GET["IdQuest"]);
		$numTop = NumVincPorQuestaoMateria($conn, $_GET["IdQuest"]);
		$numAssu = NumVincPorQuestaoTopico($conn, $_GET["IdQuest"]);
		$maior = max($numMat,$numTop,$numAssu);
		$id = $_GET["IdQuest"];

		echo "<script type='text/javascript'>window.location.href = 'cadQuest.php?qtdeTemas=$maior&IdQuest=$id'</script>"
	}


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
					<div class="form-inline">					
						<dir class="form-group">
							<input type="number" name="NnumTemas" id="numTemas" class="form-control" value="<?php echo (isset($_GET['qtdeTemas'])) ? $_GET['qtdeTemas'] : 1;?>" min="1" step="1" />
						</dir>
						<div class="form-group">
							<button type="button" id="altTemas" class="btn btn-default" onclick="teste();">Add</button>
						</div>
					</div>
					<br />		
					<div id="IdTemas">
						<?php
							if (isset($_GET['qtdeTemas'])) {
								$qtdeTemas = $_GET['qtdeTemas'];
								//echo "<input type='hidden' name='NumTemas' value='" . $qtdeTemas . "'>";
								for ($i=1; $i <= $qtdeTemas; $i++) {	
						?>						
						<div class="form-inline">
							<label>Matéria: </label>
							<div class="form-group">
								<select name="NMateria<?php echo $i;?>" class="form-control">
									<option value="null">Nenhum...</option>
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
							<label>Topico: </label>
							<div class="form-group">
								<select name="NTopico<?php echo $i;?>" class="form-control">
									<option value="null">Nenhum...</option>
									<?php
									$topico = listarTodasTopicos($conn);
									foreach ($topico as $linha) {
										$id = $linha['id'];
										$top = $linha['nome_topico'];
										echo "<option value='$id'>$top</option>"; 
									}
									?>					    
								</select> 
							</div>
							<label>Assunto: </label>
							<div class="form-group">
								<select name="NAssunto<?php echo $i;?>" class="form-control">
									<option value="null">Nenhum...</option>
									<?php
									$assunto = listarTodasAssuntos($conn);
									foreach ($assunto as $linha) {
										$id = $linha['id'];
										$assu = $linha['nome_assunto'];
										echo "<option value='$id'>$assu</option>"; 
									}
									?>					    
								</select> 
							</div>						
						</div>
						<?php
								}
							}else{
						?>
						<!-- <input type='hidden' name='NumTemas' value='1'> -->
						<div class="form-inline">
							<label>Matéria: </label>
							<div class="form-group">
								<select name="NMateria<?php echo $i;?>" class="form-control">
									<option value="null">Nenhum...</option>
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
							<label>Topico: </label>
							<div class="form-group">
								<select name="NTopico<?php echo $i;?>" class="form-control">
									<option value="null">Nenhum...</option>
									<?php
									$topico = listarTodasTopicos($conn);
									foreach ($topico as $linha) {
										$id = $linha['id'];
										$top = $linha['nome_topico'];
										echo "<option value='$id'>$top</option>"; 
									}
									?>					    
								</select> 
							</div>
							<label>Assunto: </label>
							<div class="form-group">
								<select name="NAssunto<?php echo $i;?>" class="form-control">
									<option value="null">Nenhum...</option>
									<?php
									$assunto = listarTodasAssuntos($conn);
									foreach ($assunto as $linha) {
										$id = $linha['id'];
										$assu = $linha['nome_assunto'];
										echo "<option value='$id'>$assu</option>"; 
									}
									?>					    
								</select> 
							</div>						
						</div>
						<?php
							}
						?>

					</div>					
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