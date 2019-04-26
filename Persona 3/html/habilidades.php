<!Doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<title>Persona 3</title>
		<!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="../css/habilidades.css" type="text/css">
</head>
<body>
    <section>
        <table cellspacing = "0">
            <tr>
                <td>Nome</td>
                <td>Tipo</td>
                <td>Custo</td>
                <td>Rank</td>
                <td>Descrição</td>
            </tr>
            <?php
                include "../php/conectar.php";
                $dados = mysqli_query($sql, 'SELECT * FROM lista_habilidade ORDER BY tipo_habilidade');
                while($coluna = mysqli_fetch_array($dados)){
                    $nome  = $coluna['nome_habilidade'];
                    $tipo  = $coluna['tipo_habilidade'];
                    $custo = $coluna['custo'];
                    $rank  = $coluna['rank'];
                    $desc  = $coluna['descricao_habilidade'];
                    
                    echo"
                    <tr>
                        <td>$nome</td>
                        <td>$tipo</td>
                        <td>$custo</td>
                        <td>$rank</td>
                        <td>$desc</td>
                    </tr>";	
                }
            ?>
        </table>
    </section>
</body>
</html>