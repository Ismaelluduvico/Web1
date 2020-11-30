<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="CSS/CSSLOG.css">
	<meta charset="utf-8">
	<title>REGISTRAR</title>
</head>

<body>
	<header id = "imgphp">
		<nav id='nav'>
			<a href="index.php"><li id='l2'>Voltar</li></a>
			<a href="cadastro.php"><li id='l1'>cadastrar</li></a>
			<li id='l3'>Contato
				<nav>
					<a href="https://mail.google.com">
						<img src="CSS/img/e-mail.jpg">
					</a>
					<a href="https://twitter.com/login?lang=pt">
					<img src="CSS/img/twitter.jpg">
					</a>
					<a href="https://www.whatsapp.com">
						<img src="CSS/img/whats.jpg">
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

	<main id='principal'>

		<form method="get" action="login.php">
			
			<header id="Nome">
			<p id='form'> Usuario: </p><input type="text" name="nome" placeholder="Nome de Usuário*" required="">
			</header>
			<header id="senha">
			<p id='form'>Senha:</p> <input type="password" name="senha" placeholder="Senha*" required="">
			</header>
			<input type="submit" name="enviar" id='enviar' value="ENTRAR">

		</form>

	</main>
	<aside>

	</aside>

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