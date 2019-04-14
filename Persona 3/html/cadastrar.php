<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
		<title>Cadastro</title>
		<!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="../css/cadastrar.css" type="text/css">
</head>
<body>
	<div class = "cadastrar">
		<center>
		<h1> Cadastre-se!</h1><br>
		
		<form enctype="multipart/form-data" method = "post" action = "../php/salvar.php">
		<!-- Usa o "name" nome para chamar o valor digitado no arquivo php informado no action-->
			<label>Nome: </label> <input type = "text" name = "nome" required>
			<br>
			<br>
			<label>Email: <br></label> <input type= "email" name = "email" required>
			<br>
			<br>
			<label>Login: </label><input type= "text" name = "login" required>
			<br>
			<br>
			<label>Senha: </label> <input type= "password" name = "senha" required>
			<br>
			<br>
			<label>RM: </label> <input type = "number" name = "rm" required>
			<br>
			<br>
			<label >Imagem de Usuario:</label> <input type= "file" name = "imagem" id="excecao" required>
			<br>
			<br>
			<!-- Faz o arquivo php informado no form ser executado-->
			<button><b> Cadastrar! </b> </button> <br>
		</form>
	</center>
	</div>
</body>
</html>