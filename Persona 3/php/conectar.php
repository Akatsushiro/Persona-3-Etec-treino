<?php
	$sql = new mysqli ('localhost', 'root', '', 'persona');
	
	//necessário para usar a codificação de caracteres
	if (false === $sql->set_charset('utf8')) {
		printf('Error ao usar utf8: %s', $mysqli->error);
	}
	
?>