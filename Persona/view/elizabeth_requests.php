<!Doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>P3 - Elizabeth Requests</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="frameworks/bootstrap.css">
    <!--esse aqui é para chamar o css-->
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/geral.css" type="text/css">
    <link rel="stylesheet" href="css/elizabeth_requests.css" type="text/css">
</head>

<body>
    <!-- Aqui contém a parte superior do da pagina onde está o banner com a barra de perquisa
	a recepção do usuario vem nesta parte.-->
    <header>
        <div id="abertura" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!--Imagem do Banner-->
                    <img src="assets\img\elizabeth_requests_capa.jpg" class="img-fluid d-block">

                    <div class="carousel-caption">
                        <!--Texto do topo dentro do banner-->
                        <h1 class="text-light abertura_logo_text">Persona 3</h1>
                        <!--Barra de perquisa, aparece em desktop-->
                        <form class="form-inline form-group bg-primary barra_de_pesquisa">
                            <input class="form-control mr-2" type="search" placeholder="Buscar...">
                            <button class="btn btn-outline-p3-blue" type="submit">Ok</button>
                        </form>
                        <h3 class="text-p3-blue">I have a request for you!</h3>
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
        <a class="navbar-brand h1 mb-0" href="html/chefao.php">P3</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSite">
            <ul class="navbar-nav">
                <!--Itens do navbar da main-->
                <li class="nav-item">
                    <a class="nav-link" href="compendium.php">
                        Compendium
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
                    <a class="nav-link" href="habilidades.php">
                        Habilidades
                    </a>
                </li>
                <!--Item do Navbar -> Equipamentos -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Equipamentos
                    </a>
                </li>
                <!--Barra de pesquisa, aparece somente em dispositivos mobile-->
                <li class="nav-item pesquisa_mobile_bar">
                    <form class="form-inline nav-link">
                        <input class="form-control mr-2" type="search" placeholder="Buscar...">
                        <button class="btn btn-primary" type="submit">Ok</button>
                    </form>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Quest da Elzabeth listadas em ordem numérica -->
    <ul class="nav nav-tabs container bg-light" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#sword_quests">Sword Quests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#fusion_quests">Fusion Quests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#item_quests">Item Quests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#shadows_quests">Shadow's Quests</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="container tab-content bg-light py-3">
        <!--  -->
        <div id="sword_quests" class="container tab-pane active"><br>
            <div class='quest'>
                <h1>1 – Retrieve 1 Beetle Shell</h1>
                <br>
                <div class='conteudo'>
                    <label>Data de Abertura:</label> 4/30
                    <br>
                    <br>
                    <label>Descrição:</label><br>Defeat Grave Beetles on floors 6-15 of the 1st block,
                    Thebel, to retrieve 1 Beetle Shell.
                    <br>
                    <br>
                    <label>Recompensa:</label>12.000 yen
                    <br>
                    <br>
                    <label>DeadLine:</label>5/7
                    <br>
                    <br>
                    <label>Solução:</label> <br>Beetle Shell dropam de shadows pequenas dos andares 14-15
                    do 1° bloco.
                </div>
            </div>
        </div>
        <div id="fusion_quests" class="container tab-pane fade"><br>
            <div class='quest' id="quest2">
                <h1>2 – Retrieve the First Old Document</h1>
                <br>
                <div class='conteudo'>
                    <label>Data de Abertura:</label> 4/30
                    <br>
                    <br>
                    <label>Descrição:</label><br> Retrieve Old Document 01 from the top of the 1st block, Thebel, and return here before the deadline.
                    <br>
                    <br>
                    <label>Recompensa:</label>Bead Chain
                    <br>
                    <br>
                    <label>DeadLine:</label>5/7
                    <br>
                    <br>
                    <label>Solução:</label> Pegue a mala/Báu no andar 16 e entregue a Elizabeth.
                    <br>
                </div>
            </div>
        </div>
        <div id="item_quests" class="container tab-pane fade"><br>
            <div class='quest'>
                <h1>3 – I’d like to sip a Muscle Drink</h1>
                <br>
                <div class='conteudo'>
                    <label>Data de Abertura:</label> 4/30
                    <br>
                    <br>
                    <label>Descrição:</label><br> Have you tried a Muscle Drink? I am curious how it tastes. Can you please bring me one?
                    <br>
                    <br>
                    <label>Recompensa:</label>P3/FES: Revival Bead x3<br>
                    P3P (Male): Dark Jacket<br>
                    P3P (Female): Angora Sweater
                    <br>
                    <br>
                    <label>DeadLine:</label> ----
                    <br>
                    <br>
                    <label>Solução:</label>Compre o item "Muscle Drink" na fármacia de Paulownia Mail ou ache-o no tártarus,
                    tambêm e possível obtê-lo ao recusar a bebida dada a você na enfermaria.<br>
                </div>
            </div>
        </div>
        <div id="shadows_quests" class="container tab-pane fade">
            <p>shadows_quests</p>
        </div>
    </div>

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
                <a href="#" class="ml-3"><img src="assets/img/Atlus_Logo.png"></a>
                <a href="#"><img src="assets/img/sony.png"></a>
                <a href="#"><img src="assets/img/path_shower.png"></a>
                <br><br>
            </div>
        </div>
        <!-- ############################-->
        <div class="rodape_ico py-1 justify-content-center bg-primary">
            <center>
                <div class="redes_rodape">
                    <a href="#"><img src="assets/img/git.png"></a>
                    <a href="#"><img src="assets/img/linkedin.png"></a>
                    <a href="#"><img src="assets/img/facebook.png"></a>
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
    <!-- scripts importas -->
    <script src="frameworks/jquery.js"></script>
    <script src="frameworks/popper.js"></script>
    <script src="frameworks/bootstrap.js"></script>

</body>

</html>