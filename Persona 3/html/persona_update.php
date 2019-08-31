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

    $fp = fopen('data.txt', 'w') or die("Unable to open file!");;
    fwrite($fp, "teste");
    fclose($fp);

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

    $fp = fopen('data.txt', 'a+');
    fwrite($fp, "i");
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
    //pesquisa as caracteristcas elementais da persona
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
    $vetor = (array) $vetor;
    ?>

    <section>
        <center>
            <h1>Cadastrar Persona</h1>
        </center>
        <form enctype="multipart/form-data" method="post" action='../php/update_persona.php?id=<?php echo"$id" ?>' class="row">
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
                    <b><label>Força: </label> <input type="number" name="forca" value="<?php echo $forca; ?>" required class="mt-3">
                        <br>
                        <br>
                        <label>Magia: </label> <input type="number" name="magia" value=<?php echo $magia; ?> required>
                        <br>
                        <br>
                        <label>Resistência: </label> <input type="number" name="resistencia" value=<?php echo $resistencia; ?> required>
                        <br>
                        <br>
                        <label>Agilidade: </label> <input type="number" name="agilidade" value=<?php echo $agilidade; ?> required>
                        <br>
                        <br>
                        <label>Sorte: </label> <input type="number" name="sorte" value=<?php echo $sorte; ?> required>
                        <br>
                        <br>
                </center>
                </b>
            </div>

            <div class="elementos col-12 bg-danger py-2 pt-4">
                <center>
                    <?php
<<<<<<< HEAD
<<<<<<< HEAD
                    $elementos_valor = array ($corte, $perfurante, $impacto, $fogo, $gelo, $vento, $eletricidade, $luz, $trevas);
=======
                    $i = 0;
                    $elementos_ = array($corte, $perfurante, $impacto, $fogo, $gelo, $vento, $eletricidade, $luz, $trevas);
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753
=======
                    $i = 0;
                    $elementos_ = array($corte, $perfurante, $impacto, $fogo, $gelo, $vento, $eletricidade, $luz, $trevas);
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753
                    $habilidade_tipo = array("corte", "perfurante", "impacto", "fogo", "gelo", "vento", "eletricidade", "luz", "trevas");
                    print_r($elementos_valor);
                    foreach ($habilidade_tipo as $tipo) {
<<<<<<< HEAD
<<<<<<< HEAD

                        echo "
=======
                        if ($elementos_[$i] == "-") {
                            echo "
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753
=======
                        if ($elementos_[$i] == "-") {
                            echo "
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753
                        <label>" . ucfirst($tipo) . ":</label>
                        <select name=$tipo required>
                            <option value='-' $select_>-</option>
                            <option value='WK' $selectWK>Weak</option>
                            <option value='DRM' $selectDRM>Drain</option>
                            <option value='NUL' $selectNUL>Null</option>
                            <option value='STR' $selectSTR>Resist</option>
                        </select>";
                            $i++;
                        } elseif ($elementos_[$i] == "WK") {
                            echo "
                            <label>" . ucfirst($tipo) . ":</label>
                            <select name=$tipo required>
                                <option value='-'>-</option>
                                <option value='WK' selected>Weak</option>
                                <option value='DRM'>Drain</option>
                                <option value='NUL'>Null</option>
                                <option value='STR'>Resist</option>
                            </select>";
                            $i++;
                        } elseif ($elementos_[$i] == "DRM") {
                            echo "
                            <label>" . ucfirst($tipo) . ":</label>
                            <select name=$tipo required>
                                <option value='-'>-</option>
                                <option value='WK'>Weak</option>
                                <option value='DRM' selected>Drain</option>
                                <option value='NUL'>Null</option>
                                <option value='STR'>Resist</option>
                            </select>";
                            $i++;
                        } elseif ($elementos_[$i] == "NUL") {
                            echo "
                            <label>" . ucfirst($tipo) . ":</label>
                            <select name=$tipo required>
                                <option value='-'>-</option>
                                <option value='WK'>Weak</option>
                                <option value='DRM'>Drain</option>
                                <option value='NUL' selected>Null</option>
                                <option value='STR'>Resist</option>
                            </select>";
                            $i++;
                        } elseif ($elementos_[$i] == "STR") {
                            echo "
                            <label>" . ucfirst($tipo) . ":</label>
                            <select name=$tipo required>
                                <option value='-'>-</option>
                                <option value='WK'>Weak</option>
                                <option value='DRM'>Drain</option>
                                <option value='NUL'>Null</option>
                                <option value='STR' selected>Resist</option>
                            </select>";
                            $i++;
                        }
                    }
                    ?>
                </center>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
            <center>
                <table class="table table-sm px-2">
                    <tr class="slash">
                    
                    </tr>
                </table>
                <!-- Faz o arquivo php informado no form ser executado-->
                <button><b> Cadastrar! </b> </button> <br>
            </center>
        </form>
=======
=======
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753

            <div class="bg-warning ml-3 px-3">
                <?php
                $tipo_habilidades = array("Slash", "Pierce", "Strike", "Fire", "Ice", "Wind", "Eletricity", "Light", "Dark", "Almighty", "Enhance", "Bad Status", "Passive", "Recovery", "Special");
                foreach ($tipo_habilidades as $valor) {
                    $dados = mysqli_query(
                        $sql,
                        "SELECT id_habilidade,
                nome_habilidade
                FROM `lista_habilidade`
                WHERE tipo_habilidade = '$valor'"
                    );
                    while ($coluna = mysqli_fetch_array($dados)) {
                        $id = $coluna['id_habilidade'];
                        $nome = $coluna['nome_habilidade'];
                        if (in_array($id, $vetor)) {
                            $hab_existe = "checked";
                        } else {
                            $hab_existe = " ";
                        }
                        echo "<p><b>$nome<input type='checkbox' name='habilidades[]' $hab_existe value='$id'></b></p>";
                    }
                }
                ?>
                <center>
                    <button>Salvar</button>
                </center>
            </div>
        </form>
</body>

<<<<<<< HEAD
</html>
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753
=======
</html>
>>>>>>> d717bfab4c68427bcf19015976d58beee178b753
