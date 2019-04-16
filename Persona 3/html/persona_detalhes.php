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
        </section>
    </body>
</html>