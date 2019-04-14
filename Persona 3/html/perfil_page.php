<?php
  include"../php/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "utf-8"/>
        <title>My home</title>
        <link rel = "stylesheet" href = "../css/normalize.css" type = "text/css">
        <link rel = "stylesheet" href = "../css/geral.css" type = "text/css">
        <link rel = "stylesheet" href = "../css/my_home.css" type = "text/css">
    </head>
<body>
    <header>
      <div class = "barra_lateral">
        <center>
        <div class = "perfil_img_lateral" style="background-image: url(<?php echo $img_perfil; ?>);">
        </div>
        </center>
      </div>
      <!--Exceção de css para definir o background da pagina do usuario-->
      <div class = "capa_home" style="background-image: url(<?php echo $img_capa; ?>);"></div>

      <nav>
        <label id = "log_name">
          <?php echo $login;?>
        </label>
        <div class = "opcoes_all">
          <div class = "opcoes">
          <a href = "#" class = "decoracao | lateral_opcoes">Detalhes</a>
          <a href = "#" class = "decoracao | lateral_opcoes">Atualizar</a>
          <a href = "#" class = "decoracao | lateral_opcoes">Fusão</a>
          <a href = "#" class = "decoracao | lateral_opcoes">Loja</a>
          <a href = "#" class = "decoracao | lateral_opcoes">Requests</a>
          </div>
        </div>
      </nav>
      <main>
        <div class= "perfil_main_capa" style="background-image: url(<?php echo $img_perfil; ?>);"></div>
        <div class= "informacoes">
            <label>Nome: 
              <?php echo $nome; ?>
            </label>
            <label>RM:
              <?php echo $rm;?>
            </label>
            <label>Email: 
              <?php echo $email;?>
            </label>
        </div>
      </main>
    </header>
</body>
</html>