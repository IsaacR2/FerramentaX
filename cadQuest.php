<?php
  require("validaSessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ferramenta X</title>
        <meta charset="UTF-8">
	<!-- função que atualiza a quantidade -->
	
	
    <style type="text/css">
    	img {
    		width: 100%;
    	}
    	.right {
		    position: relative;
		    right: 0px;

		}
    </style>
    <script src="ckeditor/ckeditor.js"></script>

</head>
<body>

<?php
	require("template.php");
	require("db/conexao.php");
	require("db/questoes_db.php");
	require_once("db/materia_db.php");

	if (!isset($_GET['alter'])) {
?>	
	<div class="container" align="center">
		<div id="cabecalho" align="left">
			<h3>Bem vindo</h3>
		</div>
		<div class="row">
	        <div id="comentario" align="left" class="col-xs-10 well">
	        <h3>Cadastrar Questão</h3><br />
		        <form name="formulario1" action="proc/proc_addQuestao.php" method="POST">
		        	<h4>Matéria</h4><br />
					<select name="NMateria" class="form-control">

					<?php
					$materias = listarTodasMaterias($conn);
				             foreach ($materias as $linha) {
				             	$id = $linha['id'];
				             	$mat = $linha['nome_materia'];
				             	echo "<option value='$id'>$mat</option>"; 
				             }
					?>					    
					</select> <br />
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
	<br />
<?php
	}else{
	$questao = listarQuestaoPorId($conn, $_GET['alter']);
?>
	<div class="container" align="center">
		<div id="cabecalho" align="left">
			<h3>Bem vindo</h3>
		</div>
		<div class="row">
	        <div id="comentario" align="left" class="col-xs-10 well">
	        <h3>Cadastrar Questão</h3><br />
		        <form name="formulario1" action="proc/proc_alterarQuestao.php" method="POST">
		        	<h4>Matéria</h4><br />
					<select name="NMateria" class="form-control">

					<?php
					$materias = listarTodasMaterias($conn);
				             foreach ($materias as $linha) {
				             	$id = $linha['id'];
				             	$mat = $linha['nome_materia'];
				             	echo "<option value='$id' ";
				             	if ($id == $questao['materia']) {
				             		echo "selected";
				             	}
				             	echo ">$mat</option>"; 
				             }
					?>					    
					</select> <br />
					<h4>Coeficiente</h4><br />						
					<input type="number" min="0.01" class="form-control" step="0.01" name="NCoef" placeholder="Digite a matéria para adiciaonar..." value="<?php echo $questao['coeficiente']; ?>" required /> <br />	
					<h4>Questão</h4><br />					
					<textarea name="NTexto" id="NTexto" style="resize:none" rows="10"><?php echo $questao['texto']; ?></textarea>
                                        <script>
                                          CKEDITOR.replace( 'NTexto' );
                                        </script>
                                        <br />
					<h4>Resposta</h4><br />	
					<textarea name="NResp" id="NResp" style="resize:none" rows="5"><?php echo $questao['resposta']; ?></textarea> 
                                        <script>
                                          CKEDITOR.replace( 'NResp' );
                                        </script>
                                        <br />
                                        <input type="hidden" name="Nid" value="<?php echo $questao['id']; ?>">
					<button class="btn btn-default pull-right" type="submit">Adicionar</button>
				</form>
			</div> 
		</div>
		  
	</div>
	<br />

<?php		
	}
?>


</body>
</html>			