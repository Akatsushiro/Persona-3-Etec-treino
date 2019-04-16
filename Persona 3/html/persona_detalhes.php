<?php
    include "../php/conectar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="../css/persona_detalhes.css" type="text/css">
    </head>
    <body>
        <?php
            $nome = $_GET['nome'];
            $dados = mysqli_query($sql, "SELECT * FROM persona WHERE nome_persona = '$nome'");
            while($coluna = mysqli_fetch_array($dados)){
                $nome = $coluna['nome_persona'];
                $nivel = $coluna['nivel'];
                $arcano = $coluna['arcano'];
                $descricao = $coluna['descricao'];
                $img = $coluna['perfil_persona'];
            }
        ?>
        <header>
            <div class = "nome_nv">
                <label id ='nome'><?php echo $nome ?></label>
                <label id ='nivel'></label>Lvl: <?php echo $nivel ?></label>
            </div>
        </header>
        <section>
            <div class = "descricao">
                <label><?php echo $descricao?></label>
            </div>

            <div class="status">
                <div class = "status_lbl">                
                    <label>St</label>
                    <label>Ma</label>
                    <label>En</label>
                    <label>Ag</label>
                    <label>Lu</label>
                </div>
                <?php
                    $streng = 25;
                ?>
			    <div class ="status_num">
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $streng?>%,  rgba(153, 153, 153, 0.233) <?php echo $streng?>%"><label><?php echo $streng?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $streng?>%,  rgba(153, 153, 153, 0.233) <?php echo $streng?>%"><label><?php echo $streng?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $streng?>%,  rgba(153, 153, 153, 0.233) <?php echo $streng?>%"><label><?php echo $streng?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $streng?>%,  rgba(153, 153, 153, 0.233) <?php echo $streng?>%"><label><?php echo $streng?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $streng?>%,  rgba(153, 153, 153, 0.233) <?php echo $streng?>%"><label><?php echo $streng?></label></div>
                </div>
		    </div>
            <div class = "imagem_persona">
                <img src = <?php echo $img?>>
            </div>
        </section>
    </body>
</html>