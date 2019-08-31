<?php
include "../php/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>My home</title>
  <!--Bootstrap-->
  <link rel="stylesheet" href="../node/node_modules/bootstrap//compiler/bootstrap.css">
  <!--esse aqui é para chamar o css-->
  <link rel="stylesheet" href="../css/normalize.css" type="text/css">
  <link rel="stylesheet" href="../css/geral.css" type="text/css">
  <link rel="stylesheet" href="../css/my_home.css" type="text/css">
</head>
<body>
<center>
		<table class="my-3 table container bg-light">
			<thead class="thead-dark">
			<tr class="cabecario">
				<th>ID</th>
				<th>NOME</th>
				<th>NIVEL</th>
				<th>ARCANO</th>
			</tr>
			</thead>
			<?php
			include "../php/conectar.php";
            $dados = mysqli_query($sql,
            'SELECT *
                FROM persona
            ORDER BY id_persona ASC');
			while ($coluna = mysqli_fetch_array($dados)) {
				$id = $coluna['id_persona'];
				$nome = $coluna['nome_persona'];
				$nivel = $coluna['nivel'];
				$arcano = $coluna['arcano'];

				echo "

        <tr class = 'selecao'>
            <td>$id</td>
			<td><a href='persona_update.php?id=$id' class = 'decoracao'>$nome</a></td>
			<td>$nivel</td>
			<td>$arcano</td>
		</tr>";
			}
			?>
		</table>
    </center>

    <script src="../node/node_modules/jquery/dist/jquery.js"></script>
  <script src="../node/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="../node/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>
