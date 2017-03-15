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
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		function teste() {
			var tempo = document.getElementById('numTemas').value;			
			window.location.href = 'cadQuest.php?qtdeTemas=' + tempo;
		}
	</script>
	<script type="text/javascript">
		$(function() {
		<?php
			$qtdeTemas = $_GET['qtdeTemas'];
			for ($i=1; $i <= $qtdeTemas; $i++):
		?>
			$("#NMateria<?php echo $i;?>").change(function(){
				var id = $(this).val();
				$.ajax({
					type: "POST",
					url: "proc/proc_exibeTopico.php?id="+id,
					dataType: "text",
					success: function(res){
						$("#NTopico<?php echo $i;?>").children(".topicos").remove();
						$("#NAssunto<?php echo $i;?>").children(".assuntos").remove();
						$("#NTopico<?php echo $i;?>").append(res);		
					},
					error: function(){
						alert("deu ruim");
					}
				});
			});
			$("#NTopico<?php echo $i;?>").change(function(){
				var id2 = $(this).val();
				$.ajax({
					type: "POST",
					url: "proc/proc_exibeAssunto.php?id="+id2,
					dataType: "text",
					success: function(res){
						$("#NAssunto<?php echo $i;?>").children(".assuntos").remove();
						$("#NAssunto<?php echo $i;?>").append(res);
					}
				});
			});
		<?php
			endfor;
		?>
		});
	</script>
</head>
<body>
	<?php
	if (!isset($_GET['qtdeTemas'])) {
		echo "<script type='text/javascript'> window.location.href = 'cadQuest.php?qtdeTemas=1' </script>";
	}
	require("template.php");
	require("db/conexao.php");
	require("db/questoes_db.php");
	require_once("db/materia_db.php");
	require_once("db/topico_db.php");
	require_once("db/assunto_db.php");
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
							<input type="number" name="NnumTemas" id="numTemas" class="form-control" value="<?php echo $_GET['qtdeTemas']; ?>" min="1" step="1" />
						</dir>
						<div class="form-group">
							<button type="button" id="altTemas" class="btn btn-default" onclick="teste();">Add</button>
						</div>
					</div>
					<br />		
					<div id="IdTemas">
						<?php							
							//$qtdeTemas = $_GET['qtdeTemas'];
							for ($i=1; $i <= $qtdeTemas; $i++) {
						?>						
						<div class="form-inline">
							<label>Matéria: </label>
							<div class="form-group">
								<select name="NMateria<?php echo $i;?>" class="form-control" id="NMateria<?php echo $i;?>" >
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
								<select name="NTopico<?php echo $i;?>" class="form-control" id="NTopico<?php echo $i;?>" >
									<option value="null">Nenhum...</option>			    
								</select> 
							</div>
							<label>Assunto: </label>
							<div class="form-group">
								<select name="NAssunto<?php echo $i;?>" class="form-control" id="NAssunto<?php echo $i;?>" >
									<option value="null">Nenhum...</option>  
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