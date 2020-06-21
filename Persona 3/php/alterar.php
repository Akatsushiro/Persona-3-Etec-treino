<?php
	include "conectar.php";

	$id    = $_POST['id'];
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$rm    = $_POST['rm'];
	$acesso= $_POST['acesso'];


	$sql->query("UPDATE `usuarios` 
		SET	`nome`= '$nome',
			`acesso_lvl`= $acesso,
			`email`= '$email',
			`login`= '$login',
			`senha`= $senha,
			`rm`= '$rm'
		WHERE id = $id");
		header("Location: ../html/perfil_page.php");
