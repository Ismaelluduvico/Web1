
<?php 
	include_once("/BD/BD.php");
	
	$nome = ($_GET["nome"]);
	$senha1 = ($_GET["senha1"]);
	$senha2 = ($_GET["senha2"]);
	$telefone = isset($_GET["telefone"])?$_GET["telefone"]:"[Não informado]";
	$email = isset($_GET["e-mail"])?$_GET["e-mail"]:"[Não informado]";

	$inserir_usuario = "INSERT INTO usuario(e_mail,nome,senha) VALUES('$email','$nome','$senha1')";
	mysqli_query($conectar,$inserir_usuario);
	mysql_close($conectar);					
						
	$inserir_telefone = "INSERT INTO telefones(telefone) VALUES('$telefone')";
	mysqli_query($conectar,$inserir_telefone);
	mysql_close($conectar);

	$chaves = "CALL tels('$telefone','$nome');";
	mysqli_query($conectar,$chaves);
	mysql_close($conectar);
	
	header("Location: /index.php");
?>