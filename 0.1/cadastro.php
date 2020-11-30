<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="CSS/CSSCAD.css">
	<meta charset="utf-8">
	<title>REGISTRAR</title>
</head>

<body>
	<header id = "imgphp">
		<nav id='nav'>
			<a href="index.php"><li id='l2'>Voltar</li></a>
			<a href="logar.php"><li id='l1'>Logar</li></a>
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

		<form method="get" action="php/registrar.php">
			<header id="Nome">
			<p id='form'> Nome: </p><input type="text" name="nome" placeholder="Nome de Usuário*" required="">
			</header>

			<header id="senha1">
			<p id='form'>Senha:</p> <input type="password" name="senha1" placeholder="Senha*" required="">
			</header>

			<header id="senha2">
			<p id='form'>Redigite a Senha:</p> <input type="password" name="senha2" placeholder="Senha*" required="">
			</header>

			<header id="telefone">
			<p id='form'>Telefone:</p> <input type="tel" name="telefone" placeholder="(00) 0000-0000">
			</header>

			<header id="email">
			<p id='form'>E-mail:</p> <input type="email" name="e-mail" placeholder="joão@gmail.com">
			</header>

			<input type="submit" name="enviar" id='enviar' value="REGISTRAR">

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