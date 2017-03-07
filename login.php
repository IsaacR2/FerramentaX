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
		<h2>Login</h2>
		<p>Realize o login para acessar a plataforma</p><br>
		<form name="form1" action="proc/proc_login.php" method="POST" id="IdForm1">
			<div class="col-md-4 col-md-offset-4">
				<label for="usr">E-mail:</label>
				<input type="text" class="form-control" id="IdEmail" name="NEmail" required placeholder="Digite seu email..." />
			</div>		  
			<br><br><br><br>			  
			<div class="col-md-4 col-md-offset-4">
				<label for="pwd">Senha:</label>
				<input type="password" class="form-control" id="IdSenha" name="NSenha" required placeholder="Sua senha..." />
			</div>
			<br><br><br><br>
			<div class="col-md-4 col-md-offset-4">    
				<button type="submit" class="btn btn-primary" name="Enviar">Login</button>				
			</div>				
		</form>
	</div>
	<br />	

</body>
</html>