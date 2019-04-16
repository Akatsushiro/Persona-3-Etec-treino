<!Doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<title>Persona 3</title>
		<!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
    <center>
    <table>
        <tr>
            <td>NOME</td>
            <td>NIVEL</td>
            <td>ARCANO</td>
            <td>DESCRICAO</td>
        </tr>
<?php 
    include "../php/conectar.php";
    $dados = mysqli_query($sql, 'SELECT * FROM persona');
	while($coluna = mysqli_fetch_array($dados)){
		$nome = $coluna['nome_persona'];
		$nivel = $coluna['nivel'];
		$arcano = $coluna['arcano'];
		
		echo"
		
		<tr>
			<td><a href='persona_detalhes.php?nome=$nome' class = 'decoracao'>$nome</a></td>
			<td>$nivel</td>
			<td>$arcano</td>
		</tr>";	
	}
?>
</table>
</center>
</body>
</html>