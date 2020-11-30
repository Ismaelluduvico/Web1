
<?php
	include_once("BD/BD.php");
	$nome = ($_GET["nome"]);
	$senha = ($_GET["senha"]);

	$inserir_usuario = "SELECT u.nome from usuario u where u.nome = '$nome' and u.senha = '$senha'";
	$resultado = mysqli_query($conectar,$inserir_usuario);
	$resultado = mysqli_fetch_row($resultado);
	$resultado = $resultado[0];

	if($resultado != $nome){
		header("Location: logar.php");
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="/CSS/cssindex.css">
	<meta charset="utf-8">
	<title>TESTE PHP</title>
</head>

<body>
	<header id = "imgphp">
		<nav id='nav'>
			<a href="/logar.php"><li id='l1'>Deslogar</li></a>
			<a href="/cadastro.php"><li id='l2'>Cadastrar</li></a>
			<li id='l3'>Contato
				<nav>
					<a href="https://mail.google.com">
						<img src="/CSS/img/e-mail.jpg">
					</a>
					<a href="https://twitter.com/login?lang=pt">
					<img src="/CSS/img/twitter.jpg">
					</a>
					<a href="https://www.whatsapp.com">
						<img src="/CSS/img/whats.jpg">
					</a>
				</nav>
			</li>
			<li id='l4'>Mais...
				<nav>
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</nav>
			</li>
		</nav>
	</header>

	<article id='a1'>
		<img src="/CSS/img/phpI.png">
		<h1>BEM VINDO <?php echo $nome ?></h1>
		<p>
			O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.m vez de muitos comandos para mostrar HTML (como acontece com C ou Perl), as páginas PHP contém HTML em código mesclado que faz "alguma coisa" (neste caso, mostra "Olá, eu sou um script PHP!"). O código PHP é delimitado pelas instruções de processamento (tags) de início e fim "?php e ?>" que permitem que você entre e saia do "modo PHP".
		</p>
	</article>

	

	<footer>
		<p>Site Feito por: Djalma S.M. Neto</p>
		<header>
			<img src="">
			<img src="">
			<img src="">
			<img src="">
		</header>

	</footer>
</body>
</html>

