<?php
  include "../php/sessao.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
		<title>My home</title>
		<!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="../css/barra_lateral.css" type="text/css">
</head>
<body>
  <header>
      <div class = "barra_lateral">
        <center>
          <div class = "perfil_img_lateral">
            <?php echo "<img src = $img_perfil id = 'perfil_lateral'>";?>
          </div>
        </center>
      </div>
    </header>
    <nav></nav>
    <section></section>
    <footer></footer>
</body>
</html>