<?php
	session_start();

	include "conectar.php";
		$login = $_POST['login'];
		$senha = $_POST['senha'];
	  
		$log = $sql->query("SELECT * FROM usuarios WHERE
		login ='$login' AND senha = '$senha'") or die("<script><alert>Usuario ou senha incorretos, tente novamene</alert></script>");
	 
	$verificacao = mysqli_num_rows($log);
	
	if($verificacao == 1){
		$_SESSION["login"] = $login ;
		$_SESSION["senha"] = $senha;
		echo $_SESSION["login"];
		echo $_SESSION["senha"];
		//vai liberar o acesso á pagina principal
		header ("location: ../html/perfil_page.php");
	}else{
	//Destruir seção
		unset($_SESSION['login']);
		unset($_SESSION['senha']);

		 echo ("<script>alert('Já existe alguem logado com esse login,
		desconecte e tente novamente');</script>");
	}
  
 ?>