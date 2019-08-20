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
    <link rel="stylesheet" href="../css/persona_detalhes.css" type="text/css">
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
    <center>
        <div class="row tamanho">
            <div class="col-xl-5 col-lg-12 coluna_esquerda">
                <!--Div com o elementos e seus valores que fica na parte superior esquerda-->
                <div class="row bg-gradient-p3-blue persona_detalhes_elementos">
                    <table class="col-12 persona_detalhes_elementos">
                        <!--Esta linha contem somente as imagens dos elementos-->
                        <tr>
                            <td>
                                <img src="../img/ico/slash.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/impacto.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/perfurante.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/fogo.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/gelo.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/vento.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/eletricidade.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/luz.jpg">
                            </td>
                            <td>
                                <img src="../img/ico/trevas.jpg">
                            </td>
                        </tr>
                        <!--Nesta linha está os valores dos elementos-->
                        <tr>
                            <td class="elemento_txt">
                                <label><?php echo $corte ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $impacto ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $perfurante ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $fogo ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $gelo ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $vento ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $eletricidade ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $luz ?></label>
                            </td>
                            <td class="elemento_txt">
                                <label><?php echo $trevas ?></label>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--Fim da Div dos elementos-->

                <!--Aqui está a imagem o nome e os detalhes mais importantes da persona-->
                <div class="row persona_detalhes_imagem">

                    <!--Contem o nome, nivel e arcano da persona-->
                    <div class="col-5 bg-primary">
                        <p><h1><?php echo $nome ?></h1></p>
                        <p class="nivel">Nível: <b><?php echo $nivel ?></b></p>
                        <!--Aqui vem o arcano, que por meio da pesquisa no banco abre a imagem-->
                        <p>
                            <h2><?php echo $arcano ?></h2>
                            <img src="../img/ico/<?php echo $arcano ?>.png" class="arcano">
                        </p>
                        <p>Tipo: <b><?php echo $tipo_skill ?></b></p>
                    </div>

                    <!--Contem a imagem da persona-->
                    <div class="col-7">
                        <img src=<?php echo $img ?> class="imagem_persona col-12 mt-5">
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-12 coluna_central">
                <h2 class="texto">Descrição</h2>
                <div class="container-fluid descricao">
                    <label><?php echo $descricao ?></label>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 coluna_direita">

                <h2 class="texto">Status</h2>
                <div class="barra_status">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $forca ?>%" aria-valuemin="0" aria-valuemax="100"><?php echo $forca ?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $magia ?>%" aria-valuemin="0" aria-valuemax="100"><?php echo $magia ?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $resistencia ?>%" aria-valuemin="0" aria-valuemax="100"><?php echo $resistencia ?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $agilidade ?>%" aria-valuemin="0" aria-valuemax="100"><?php echo $agilidade ?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $sorte ?>%" aria-valuemin="0" aria-valuemax="100"><?php echo $sorte ?></div>
                    </div>
                </div>



                <div class="habilidades">
                    <div class="habilidade_slot"><?php echo $skill[0] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[1] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[2] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[3] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[4] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[5] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[6] ?></div>
                    <div class="habilidade_slot"><?php echo $skill[7] ?></div>
                </div>





            </div>
        </div>
    </center>


    <section>

    </section>
    <script src="../node/node_modules/jquery/dist/jquery.js"></script>
    <script src="../node/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>