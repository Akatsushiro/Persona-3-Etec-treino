<?php
include "../php/sessao.php";
if (!isset($_SESSION["autorizacao"]) || $_SESSION["autorizacao"] <> 0) {
  echo "<script>alert('Erro de Login, logue-se novemente');</script>";
  header("Location: logar.php");
}
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
  <header>
    <div class="barra_lateral">
      <center>
        <div class="perfil_img_lateral" style="background-image: url(<?php echo $img_perfil; ?>);">
        </div>
      </center>
    </div>
    <!--Exceção de css para definir o background da pagina do usuario-->
    <div class="capa_home" style="background-image: url(<?php echo $img_capa; ?>);"></div>

    <nav>
      <label id="log_name">
        <?php echo $login; ?>
      </label>
      <div class="opcoes_all">
      <div class="opcoes">
          <form action="excluir_persona_listar.php">
            <button class="decoracao | lateral_opcoes">Deletar Persona</button>
          </form>

          <form action="listar_atualizar_persona.php">
            <button class="decoracao | lateral_opcoes">Atualizar Persona</button>
          </form>

          <form action="persona_Cadastro.php">
            <button class="decoracao | lateral_opcoes">Cadastrar Persona</button>
          </form>

          <form action="salvar_habilidades.html">
            <button class="decoracao | lateral_opcoes">Nova Habilidade</button>
          </form>

          <form action="#">
            <button class="decoracao | lateral_opcoes">Excluir Habilidade</button>
          </form>

          <form action="#">
            <button class="decoracao | lateral_opcoes">Alterar Habilidade</button>
          </form>
          
          <form enctype="multipart/form-data" method="post" action="cadastrar.php">
            <input type="hidden" name="acesso" value="Quati">
            <button class="decoracao | lateral_opcoes">Cadastrar ADM</button>
          </form>
        </div>
      </div>
    </nav>
    <main>
      <div class="perfil_main_capa" style="background-image: url(<?php echo $img_perfil; ?>);"></div>
      <div class="informacoes">
        <label>Nome:
          <?php echo $nome; ?>
        </label>
        <label>RM:
          <?php echo $rm; ?>
          <br>
          <?php echo $id; ?>
        </label>
        <label>Email:
          <?php echo $email; ?>
        </label>
        <a href='alterar.php?id=<?php echo $id; ?>' class="btn btn-warning">alterar</a>
      </div>
      <div class="conteudo">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </main>
  </header>
  <script src="../node/node_modules/jquery/dist/jquery.js"></script>
  <script src="../node/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="../node/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>