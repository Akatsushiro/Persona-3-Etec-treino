<!Doctype html>
<html lang="pt-br">
<?php
include "../php/conectar.php";
?>

<head>
    <meta charset="utf-8">
    <title>Persona 3</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="../node/node_modules/bootstrap//compiler/bootstrap.css">
    <!--esse aqui é para chamar o css-->
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/geral.css" type="text/css">
    <link rel="stylesheet" href="../css/persona_cadastro.css" type="text/css">
</head>

<body>
    <section>
        <center>
            <h1>Cadastrar Persona</h1>
        </center>
        <form enctype="multipart/form-data" method="post" action="../php/Salvar_persona.php" class="row">
            <!-- Usa o "name" nome para chamar o valor digitado no arquivo php informado no action-->
            <div class="col-6 bg-success persona_dados">
                <center><b>
                        <label>Nome Persona: </label><input type="text" name="nome" class="mt-3" required>
                        <br>
                        <br>
                        <label>Arcano: <br></label> <input type="text" name="arcano" value="Fool" required>
                        <br>
                        <br>
                        <label>Tipo:</label> <input type="text" name="tipo" required>
                        <br>
                        <br>
                        <label>Nível: </label> <input type="number" name="nivel" required>
                        <br>
                        <br>
                        <label>Descrição </label> <input type="text" name="descricao" required>
                        <br>
                        <br>
                        <label>Imagem da Persona: </label> <input type="file" name="imagem" id="excecao" required>
                    </b>
                </center>
            </div>

            <br>
            <br>
            <div class="status col-6 bg-primary">
                <center>
                    <b><label>Força: </label> <input type="number" name="forca" required class="mt-3">
                        <br>
                        <br>
                        <label>Magia: </label> <input type="number" name="magia" required>
                        <br>
                        <br>
                        <label>Resistência: </label> <input type="number" name="resistencia" required>
                        <br>
                        <br>
                        <label>Agilidade: </label> <input type="number" name="agilidade" required>
                        <br>
                        <br>
                        <label>Sorte: </label> <input type="number" name="sorte" required>
                        <br>
                        <br>
                </center>
                </b>
            </div>

            <div class="elementos bg-danger py-3">
                <center>
                    <?php
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
            <center>
                <table class="table table-sm px-2">
                    <tr class="slash">
                        <td>
                            <?php
                            /*Pegasse as habilidades do banco de dados, e as listamos
                            com checkbos, assim as selecionadas, são as habilidades da
                            persona
                            */
                            //seleciona e listas as habilidades do tipo "Slash"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Slash'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>

                        <td class="pierce">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Pierce'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>

                        <td class="Strike">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Strike'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="fire">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Fire'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>

                        <td class="Ice">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Ice'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Wind">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Wind'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Eletricity">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Eletricity'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Light">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Light'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Dark">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Dark'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Almighty">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Almighty'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="Enhance">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Enhance'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>

                        <td class="Bad Status">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Bad Status'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Passive">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Passive'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Recovery">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Recovery'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                        <td class="Special">
                            <?php
                            //seleciona e listas as habilidades do tipo "Pierce"
                            $dados = mysqli_query(
                                $sql,
                                "SELECT id_habilidade,
                                        nome_habilidade
                                    FROM `lista_habilidade` 
                                    WHERE tipo_habilidade = 'Special'"
                            );
                            while ($coluna = mysqli_fetch_array($dados)) {
                                $id   = $coluna['id_habilidade'];
                                $nome = $coluna['nome_habilidade'];
                                echo "<p><b>$nome<input type='checkbox' name = 'habilidades[]' value = '$id'></b></p>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <!-- Faz o arquivo php informado no form ser executado-->
                <button><b> Cadastrar! </b> </button> <br>
            </center>
        </form>

    </section>
</body>