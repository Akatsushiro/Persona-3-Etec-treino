<?php
	include "conectar.php";

	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$rm    = $_POST['rm'];

	//tratamento do nome da imagem
	$imgDir   = '../img/usuarios/perfil/';

	$imagem = $_FILES["imagem"]["name"];
	$separa = explode(".",$imagem);
	$separa = array_reverse($separa);
	$extensao = $separa[0];
	$imagemF = $rm.".".$extensao;


	$salvar = $sql->query("SELECT usuarios.login FROM usuarios WHERE usuarios.login = '$login'");
	$checar = mysqli_num_rows($salvar);
	if($checar == 1){
		echo "<script>alert ('Este login já existe!') </script>";
	}else{
		//salvar imagem na pasta selecionada
		if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imgDir . $imagemF)){
			$imagemUp = $imgDir.$imagemF;
		}else{
			echo "Não foi possivel concluir o upload da imagem";
	}
		$sql->query("INSERT INTO usuarios(nome, email, login, senha, rm, img_perfil)
		VALUES ('$nome', '$email', '$login', '$senha', '$rm', '$imagemUp')");
		header("Location: ../index.html");
	}
?>
