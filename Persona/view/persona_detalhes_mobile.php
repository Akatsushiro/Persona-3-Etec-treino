<?php
include "../config.php";
include ABSPATH . "/Controller/persona/persona_dados.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="frameworks/bootstrap.css">
  <!--esse aqui é para chamar o css-->
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  <link rel="stylesheet" href="css/geral.css" type="text/css">
  <link rel="stylesheet" href="css/persona_detalhes_mobile.css" type="text/css">
</head>
<script>
  var largura = screen.width;
  console.log(largura)
  if (largura > 1024) {
    console.log("Essa é a largura da tela " + largura)
    window.location.href = "persona_detalhes_desktop.php?id=<?php echo $id; ?>"
  }
</script>

<body>
  <div class="bg-primary">
    <span class="nivel"><b>LV <?php echo $nivel; ?></b></span>
    <span class="nome"><b><?php echo $nome; ?></b></span>
    <span class="arcano"><b><?php echo $arcano; ?></b></span>
  </div>
  <div class="container-fluid elementos_bar bg-p3-blue">
    <div class="row">
      <div class="col elemento">
        <img src="assets/ico/slash.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/impacto.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/perfurante.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/fogo.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/gelo.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/vento.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/eletricidade.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/luz.jpg">
      </div>
      <div class="col elemento">
        <img src="assets/ico/trevas.jpg">
      </div>
    </div>

    <div class="row">
      <div class="col elemento" style="margin:0">
        <label><?php echo $corte ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $impacto ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $perfurante ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $fogo ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $gelo ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $vento ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $eletricidade ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $luz ?></label>
      </div>
      <div class="col elemento">
        <label><?php echo $trevas ?></label>
      </div>
    </div>
  </div>

  <div class="bg-primary status">
    <div class="barra_status">
      <div class="row">
        <span class="col-1 barra_numero bg-p3-blue"><strong>ST</strong></span>
        <span class="col-1 barra_numero bg-primary"><i><?php echo $forca; ?></i></span>
        <div class="progress my-1 col-10">
          <div class="progress-bar bg-p3-blue barra_numero" role="progressbar" style="width: <?php echo $forca; ?>%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>


      <div class="row">
        <span class="col-1 barra_numero bg-p3-blue"><strong>MA</strong></span>
        <span class="col-1 barra_numero bg-primary"><i><?php echo $magia; ?></i></span>
        <div class="progress my-1 col-10">
          <div class="progress-bar bg-p3-blue barra_numero" role="progressbar" style="width: <?php echo $magia; ?>%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

      <div class="row">
        <span class="col-1 barra_numero bg-p3-blue"><strong>EN</strong></span>
        <span class="col-1 barra_numero bg-primary"><i><?php echo $resistencia; ?></i></span>
        <div class="progress my-1 col-10">
          <div class="progress-bar bg-p3-blue barra_numero" role="progressbar" style="width: <?php echo $resistencia; ?>%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

      <div class="row">
        <span class="col-1 barra_numero bg-p3-blue"><strong>AG</strong></span>
        <span class="col-1 barra_numero bg-primary"><i><?php echo $agilidade; ?></i></span>
        <div class="progress my-1 col-10">
          <div class="progress-bar bg-p3-blue barra_numero" role="progressbar" style="width: <?php echo $agilidade; ?>%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

      <div class="row">
        <span class="col-1 barra_numero bg-p3-blue"><strong>LU</strong></span>
        <span class="col-1 barra_numero bg-primary"><i><?php echo $sorte; ?></i></span>
        <div class="progress my-1 col-10">
          <div class="progress-bar bg-p3-blue barra_numero" role="progressbar" style="width: <?php echo $sorte; ?>%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>

  <div>
  </div>
  <div class="container-fluid row m-0 p-0">

    <div class="container-fluid descricao col-5">
      <label><?php echo $descricao ?></label>
    </div>

    <div class="persona_img col-7 m-0 p-0" id="persona_img">
      <img src=<?php echo $img ?> class="imagem_persona">
    </div>

  </div>
  <div class="row my-1 container-fluid m-0 p-0">
    <div class="col-5 bg-primary tipo">
      <h1>Tipo: <?php echo $tipo_skill ?></h1>
    </div>
    <button class="col-7 m-0 btn btn-outline-p3-blue btn-lg">
      <h2>Calcular Fusão</h2>
    </button>
  </div>

  <!-- ###################################################################################### -->
  <div class="habilidades container-fluid">
    <div class="row my-1">
      <div class="col bg-p3-blue"><span><?php echo $skill[0] ?></span></div>
      <div class="col bg-p3-blue"><span><?php echo $skill[1] ?></span></div>
    </div>
    <div class="row my-1">
      <div class="col bg-p3-blue"><span><?php echo $skill[2] ?></span></div>
      <div class="col bg-p3-blue"><span><?php echo $skill[3] ?></span></div>
    </div>
    <div class="row my-1">
      <div class="col bg-p3-blue"><span><?php echo $skill[4] ?></span></div>
      <div class="col bg-p3-blue"><span><?php echo $skill[5] ?></span></div>
    </div>
    <div class="row my-1">
      <div class="col bg-p3-blue"><span><?php echo $skill[6] ?></span></div>
      <div class="col bg-p3-blue"><span><?php echo $skill[7] ?></span></div>
    </div>
  </div>



  <script>
    var persona_bg = window.document.getElementById('persona_img')
    persona_bg.style.backgroundImage = "url('../img/ico/<?php echo $arcano; ?>.png')"
    persona_bg.style.backgroundSize = "100% 100%"
  </script>
  <script src="frameworks/jquery.js"></script>
  <script src="frameworks/popper.js"></script>
  <script src="frameworks/bootstrap.js"></script>
</body>

</html>