<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Cadastro</title>
	<!--esse aqui é para chamar o css-->
	<link rel="stylesheet" href="../css/normalize.css" type="text/css">
	<link rel="stylesheet" href="../css/geral.css" type="text/css">
	<link rel="stylesheet" href="../css/cadastrar.css" type="text/css">
</head>

<body>
	<div class="cadastrar">
		<center>
			<h1> Cadastre-se!</h1><br>

			<form enctype="multipart/form-data" method="post" action="../php/alterar.php">
				<!-- Usa o "name" nome para chamar o valor digitado no arquivo php informado no action-->
				<?php
				include "../php/conectar.php";

				$id = $_GET['id'];

				$dados = $sql->query("SELECT * FROM usuarios WHERE id = '$id'");

				while($coluna = mysqli_fetch_array($dados)){
					$nome   = $coluna['nome'];
					$acesso = $coluna['acesso_lvl'];
					$email  = $coluna['email'];
					$login  = $coluna['login'];
					$senha  = $coluna['senha'];
					$rm     = $coluna['rm'];
				}
				
				?>
				<label>Nome: </label> <input type="text" name="nome" value="<?php echo $nome; ?>" required>
				<br>
				<br>
				<label>Email: <br></label> <input type="email" name="email" value="<?php echo $email; ?>" required>
				<br>
				<br>
				<label>Login: </label><input type="text" name="login" value="<?php echo $login; ?>" required>
				<br>
				<br>
				<label>Senha: </label> <input type="password" name="senha" value="<?php echo $senha; ?>" required>
				<br>
				<br>
				<label>RM: </label> <input type="number" name="rm" value="<?php echo $rm; ?>" required>
				<br>
				<br>
				<input type="hidden" name="acesso" value="<?php echo $acesso; ?>">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<br>
				<!-- Faz o arquivo php informado no form ser executado-->
				<button><b> Cadastrar! </b> </button> <br>
			</form>
		</center>
	</div>
</body>

</html>