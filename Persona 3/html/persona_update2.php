<?php
include "../php/conectar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../node/node_modules/bootstrap//compiler/bootstrap.css">
    <!--esse aqui é para chamar o css-->
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/geral.css" type="text/css">
    <link rel="stylesheet" href="../css/persona_cadastro.css" type="text/css">
</head>

<body>

    <?php


    $id = $_GET['id'];
    //pesquisa os dados basicos da persona escolhida e os guarda em variaveis
    $dados = mysqli_query($sql, "SELECT * FROM persona WHERE id_persona = '$id'");
    while ($coluna = mysqli_fetch_array($dados)) {
        $nome = $coluna['nome_persona'];
        $nivel = $coluna['nivel'];
        $arcano = $coluna['arcano'];
        $tipo_skill = $coluna['tipo'];
        $descricao = $coluna['descricao'];
        $img = $coluna['perfil_persona'];
    }

    $fp = fopen('data.txt', 'w');
fwrite($fp, $nome);

fclose($fp);

    //pesquisa os status da persona escolhida
    $dados = mysqli_query($sql, "SELECT * FROM `status` WHERE id_persona = '$id'");
    while ($coluna = mysqli_fetch_array($dados)) {
        $forca       = $coluna['forca'];
        $magia       = $coluna['magia'];
        $resistencia = $coluna['resistencia'];
        $agilidade   = $coluna['agilidade'];
        $sorte       = $coluna['sorte'];
    }
    //pesquisa as caracteristcas elementais da perso na
    $dados = mysqli_query($sql, "SELECT * FROM `elementos` WHERE id_persona_id = '$id'");
    while ($coluna = mysqli_fetch_array($dados)) {
        $corte        = $coluna['corte'];
        $impacto      = $coluna['impacto'];
        $perfurante   = $coluna['perfurante'];
        $fogo         = $coluna['fogo'];
        $gelo         = $coluna['gelo'];
        $vento        = $coluna['vento'];
        $eletricidade = $coluna['eletricidade'];
        $luz          = $coluna['luz'];
        $trevas       = $coluna['trevas'];
    }
    //pesquisa as skills da persona
    //pesquisa os ids das pesonas e pesquisa os ids das skills
    $dados = mysqli_query($sql, "SELECT * FROM `persona_habilidade` WHERE id_persona_hab = '$id'");
    $vetor = [];
    while ($coluna = mysqli_fetch_array($dados)) {
        $temp = $coluna['id_habilidade_per'];
        $vetor[] = $temp;
    }
    //aqui armazena os ids a serem pesquisados
    $vetor = (array)$vetor;
    //pesquisa os ids da skills pesquisados
    $cont = count($vetor);
    $col = 0;
    while ($col < $cont) {
        $temp = $vetor[$col];
        $col++;
        $dados = mysqli_query($sql, "SELECT * FROM `lista_habilidade` where id_habilidade = '$temp'");
        while ($coluna = mysqli_fetch_array($dados)) {
            $skill[] = $coluna['nome_habilidade'];
        }
    }
    $cont = 0;
    while (count($skill) < 8) {
        $skill[] = "-";
    }
    ?>

    <section>
        <center>
            <h1>Cadastrar Persona</h1>
        </center>
        <form enctype="multipart/form-data" method="post" action="../php/update_persona.php" class="row">
            <!-- Usa o "name" nome para chamar o valor digitado no arquivo php informado no action-->
            <div class="col-6 bg-success persona_dados">
                <center><b>
                        <label>Nome Persona: </label><input type="text" name="nome" value="<?php echo $nome; ?>" class="mt-3" required>
                        <br>
                        <br>
                        <label>Arcano: <br></label> <input type="text" name="arcano" value="<?php echo $arcano; ?>" required>
                        <br>
                        <br>
                        <label>Tipo:</label> <input type="text" name="tipo" value="<?php echo $tipo_skill; ?>" required>
                        <br>
                        <br>
                        <label>Nível: </label> <input type="number" name="nivel" value="<?php echo $nivel; ?>" required>
                        <br>
                        <br>
                        <label for="desc">Descrição: </label>
                        <br>
                        <textarea cols="40" rows="6" type="text" name="descricao" id="desc" required><?php echo "$descricao"; ?></textarea>
                        <br>
                        <br>
                        <label>Imagem da Persona: </label><input type="file" name="imagem" id="excecao" required>

                    </b>
                </center>
            </div>

            <br>
            <br>
            <div class="status col-6 bg-primary">
                <center>
                    <b><label>Força: </label> <input type="number" name="forca" value="<?php echo $forca;?>" required class="mt-3">
                        <br>
                        <br>
                        <label>Magia: </label> <input type="number" name="magia" value=<?php echo $magia;?> required>
                        <br>
                        <br>
                        <label>Resistência: </label> <input type="number" name="resistencia" value=<?php echo $resistencia;?> required>
                        <br>
                        <br>
                        <label>Agilidade: </label> <input type="number" name="agilidade" value=<?php echo $agilidade;?> required>
                        <br>
                        <br>
                        <label>Sorte: </label> <input type="number" name="sorte" value=<?php echo $sorte;?> required>
                        <br>
                        <br>
                </center>
                </b>
            </div>

            <div class="elementos bg-danger py-3">
                <center>
                    <?php
                    $habilidade_var = array ($corte, $perfurante, $impacto, $fogo, $gelo, $vento, $eletricidade, $luz, $trevas);
                    $habilidade_tipo = array("corte", "perfurante", "impacto", "fogo", "gelo", "vento", "eletricidade", "luz", "trevas");
                    foreach ($habilidade_tipo as $tipo) {
                        echo "
                        <label>" . ucfirst($tipo) . ":</label>
                        <select name=$tipo required>
                            <option value='-'>-</option>
                            <option value='WK'>Weak</option>
                            <option value='DRM'>Drain</option>
                            <option value='NUL'>Null</option>
                            <option value='STR'>Resist</option>
                        </select>";
                    }
                    ?>
                </center>
            </div>
