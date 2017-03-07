<?php
$local_server = "127.0.0.1";
$usuario_serve = "u200113541_isaac";
$senha_server = "Fanboiak1";
$banco_de_dados = "u200113541_fx";

$conn = mysqli_connect($local_server, $usuario_serve, $senha_server) or die("O servidor não responde!");

$db = mysqli_select_db($conn, $banco_de_dados) or die("Erro ao selecionar o BD");

mysqli_query($conn, 'set character set utf8');


?>