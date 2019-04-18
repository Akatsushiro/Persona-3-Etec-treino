<!Doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<title>Persona 3</title>
		<!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="../css/compendium.css" type="text/css">
</head>
<body>
    <center>
    <table>
        <tr class = "cabecario">
            <td>NOME</td>
            <td>NIVEL</td>
            <td>ARCANO</td>
        </tr>
<?php 
    include "../php/conectar.php";
    $dados = mysqli_query($sql, 'SELECT * FROM persona');
	while($coluna = mysqli_fetch_array($dados)){
		$id = $coluna['id_persona'];
		$nome = $coluna['nome_persona'];
		$nivel = $coluna['nivel'];
		$arcano = $coluna['arcano'];
		
		echo"
		
		<tr class = 'selecao'>
			<td><a href='persona_detalhes.php?id=$id' class = 'decoracao'>$nome</a></td>
			<td>$nivel</td>
			<td>$arcano</td>
		</tr>";	
	}
?>
</table>
</center>
</body>
</html>