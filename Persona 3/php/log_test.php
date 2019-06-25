<?php
	session_start();

	include "conectar.php";
		$login = $_POST['login'];
		$senha = $_POST['senha'];
	  
		$log = $sql->query("SELECT * FROM usuarios WHERE
		login ='$login' AND senha = '$senha'") or die("<script><alert>Usuario ou senha incorretos, tente novamene</alert></script>");
	 	while($coluna = mysqli_fetch_array($log)){
			 $acesso_lvl = $coluna['acesso_lvl'];
		 }
	$verificacao = mysqli_num_rows($log);
	
	if($verificacao == 1){
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;
		$_SESSION["autorizacao"] = $acesso_lvl;
		//vai liberar o acesso á pagina principal
		if($acesso_lvl == 0){
			header("location: ../html/chefao.php");
		}elseif($acesso_lvl == 1) {
			header ("location: ../html/perfil_page.php");
		}else{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			unset($_SESSION["autorizacao"]);
			echo ("<script>alert('Erro Desconhecido, reporte-o e o concertaremos o
			mais breve possível');</script>");
		}
		
	}else{
	//Destruir seção
		unset($_SESSION['login']);
		unset($_SESSION['senha']);

		echo ("<script>alert('Já existe alguem logado com esse login,
		desconecte e tente novamente');</script>");
	}
