<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Cadastro</title>
	<!--esse aqui é para chamar o css-->
	<link rel="stylesheet" href="../css/normalize.css" type="text/css">
	<link rel="stylesheet" href="../css/geral.css" type="text/css">
	<link rel="stylesheet" href="../css/logar.css" type="text/css">
</head>

<body>
	<div class="logar">
		<center>
			<h1>Logar</h1>
			<form enctype="multipart/form-data" method="post" action="../php/log_test.php">
				<label>Login: </label><br><input type="text" name="login">
				<br>
				<br>
				<label>Senha: </label><br><input type="password" name="senha"><br><br>
				<br>
				<button><b>Logar!</b></button>
			</form>
			<br>
			<br>
			<form enctype="multipart/form-data" method="post" action="../html/cadastrar.php">
				<input type="hidden" name="acesso" value="Fabio">
				<button class="btn btn-primary btn-lg btn-block"><b>Criar Conta</b></button>
			</form>
		</center>
	</div>
</body>

</html>