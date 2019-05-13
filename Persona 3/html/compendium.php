<!Doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Persona 3</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="../node/node_modules/bootstrap//compiler/bootstrap.css">
	<!--esse aqui é para chamar o css-->
	<link rel="stylesheet" href="../css/normalize.css" type="text/css">
	<link rel="stylesheet" href="../css/geral.css" type="text/css">
	<link rel="stylesheet" href="../css/compendium.css" type="text/css">
</head>

<body>


	<!-- Aqui contém a parte superior do da pagina onde está o banner com a barra de perquisa
	a recepção do usuario vem nesta parte.-->
	<header>
		<div id="abertura" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<!--Imagem do Banner-->
					<img src="../img/img_abertura.webp" class="img-fluid d-block">

					<div class="carousel-caption">
						<!--Texto do topo dentro do banner-->
						<h1 class="text-p3-blue abertura_logo_text">Persona 3</h1>
						<h3 class="text-p3-blue">The Tower Wait Us!</h3>
						<!--Barra de perquisa, aparece em dispositivos mobile-->
					</div>
				</div>
			</div>
		</div>
	</header>

	<!--Barra de menu principal, é através dela que se tem acesso a maioria das funcionalidades do 
Site.
Funções: 
- Compendium
	-Acesso a lista de personas
	-Acesso a lista de personas por arcana
- Elizabeth Quest:
	Aqui direciona para a pagina de quests que
	são tarefas das ao jogador mediante a recompensa.
-História: Aqui será escrito um resumo da história, e não do gameplay
	conterá diversos Spoilers, sessão dedicada a explicar os eventos do jogo.
-Habilidades: lista de habilidades das personas
-Equipamentos: dista de armas, armaduras outros equipamentos

OBS: o navbar deve ficar fixo no topo do site quando o Header for passado, e somente neste caso
-->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-gradient-p3-blue">
		<a class="navbar-brand h1 mb-0" href="#">P3</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-center" id="navbarSite">
			<ul class="navbar-nav">
				<!--Itens do navbar da main-->
				<li class="nav-item">
					<!--Menu dropdown Compendium-->
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="compendium_nav_dropdown">
								Compendium
							</a>
							<div class="dropdown-menu bg-primary">
								<!--Itens do DropDown-->
								<a class="dropdown-item" href="../html/compendium.php">Todas</a>
								<a class="dropdown-item" href="../html/compendium.php?tipo='Fool'">Fool</a>
								<a class="dropdown-item" href="../html/compendium.php?tipo='Magician'">Magician</a>
								<a class="dropdown-item" href="../html/compendium.php?tipo='Priestess'">Priestess</a>
								<a class="dropdown-item" href="../html/compendium.php?tipo='Empereor'">Empereor</a>
								<a class="dropdown-item" href="../html/compendium.php?tipo='Strenght'">Strenght</a>
							</div>
						</li>
					</ul>
				</li>
				<!--Item do Navbar -> Elizabeth Quests -->
				<li class="nav-item">
					<a class="nav-link" href="../html/quests.html">
						Elizabeth Quests
					</a>
				</li>
				<!--Item do Navbar -> História -->
				<li class="nav-item">
					<a class="nav-link" href="#">
						História
					</a>
				</li>
				<!--Item do Navbar -> Habilidades -->
				<li class="nav-item">
					<a class="nav-link" href="../html/habilidades.php">
						Habilidades
					</a>
				</li>
				<!--Item do Navbar -> Equipamentos -->
				<li class="nav-item">
					<a class="nav-link" href="#">
						Equipamentos
					</a>
				</li>

			</ul>
		</div>
	</nav>

	<center>
		<table class="my-3 table container bg-light">
			<thead class="thead-dark">
			<tr class="cabecario">
				<th>NOME</th>
				<th>NIVEL</th>
				<th>ARCANO</th>
			</tr>
			</thead>
			<?php
			include "../php/conectar.php";
			$dados = mysqli_query($sql, 'SELECT * FROM persona ORDER BY arcano, nivel');
			while ($coluna = mysqli_fetch_array($dados)) {
				$id = $coluna['id_persona'];
				$nome = $coluna['nome_persona'];
				$nivel = $coluna['nivel'];
				$arcano = $coluna['arcano'];

				echo "
		
		<tr class = 'selecao'>
			<td><a href='persona_detalhes.php?id=$id' class = 'decoracao'>$nome</a></td>
			<td>$nivel</td>
			<td>$arcano</td>
		</tr>";
			}
			?>
		</table>
	</center>

	<footer class="page-footer">
		<div class="row mx-auto">
			<div class="col-md-12 col-lg-6">
				<p class="col-lg-9 pl-2 my-5" style="color: white">
					Agradeço a todos da ETEC JA que me ajudaram a concluir este site, pois foi
					através de muitas tentativas, erros e consultas que ele podê ficar pronto.
					Este foi um projeto que construi com intuito de puro estudo, e me ajudou
					muito no meu crescimento como programador.
					<br><br>
					Espero um Remake de Persona 3 ! : )
					<br>
					<br>
					<br>
					<br>
				</p>
			</div>
			<div class="col-md-12 col-lg-6 empresas">
				<a href="#" class="ml-3"><img src="../img/Atlus_Logo.png"></a>
				<a href="#"><img src="../img/sony.png"></a>
				<a href="#"><img src="../img/path_shower.png"></a>
				<br><br>
			</div>
		</div>
		<!-- ############################-->
		<div class="rodape_ico py-1 justify-content-center bg-primary">
			<center>
				<div class="redes_rodape">
					<a href="#"><img src="../img/git.png"></a>
					<a href="#"><img src="../img/linkedin.png"></a>
					<a href="#"><img src="../img/facebook.png"></a>
				</div>
			</center>
		</div>
		<div class="text-center py-1 rodape_direitos_autorais">
			©2006-2008 ATLUS<br>
			SHIN MEGAMI TENSEI, SMT, and Persona are registered trademarks of Atlus U.S.A., Inc.
			PlayStation and the "PS" Family logo<br>
			are registered trademarks of Sony Computer Entertainment Inc.
		</div>

	</footer>
	<script src="../node/node_modules/jquery/dist/jquery.js"></script>
	<script src="../node/node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="../node/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>