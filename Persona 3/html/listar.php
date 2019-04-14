<!doctype html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title> Listar dados</title>
		<link rel="stylesheet" href="../css/listar.css">
	</head> 
<body>
<?php
include "../php/conectar.php";
$dados = mysqli_query($sql, "SELECT * FROM usuario where =  ");

<?php 
	while($coluna = mysqli_fetch_array($dados)){
		$id = $coluna['id'];
		$nome = $coluna['nome'];
		$login = $coluna['login'];
		$email = $coluna['email'];
		$rm = $coluna['rm'];
		$img = $coluna['img'];
		
		echo"
		
		<tr>
			<td>$id</td>
			<td>$nome</td>
			<td>$login</td>
			<td>$email</td>
			<td>$rm</td>
			<td><img src=$img id = 'img'></td>
			<!-- <td><a href='delete.php?rm=$rm'>[Excluir]</a></td>
			<td><a href='alterar.php?rm=$rm'>[Editar]</a></td>-->
		</tr>";	
	}

?>