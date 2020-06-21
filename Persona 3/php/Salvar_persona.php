<?php
include "conectar.php";

//caracteristicas da persona
$nome  = $_POST['nome'];
$arcano = $_POST['arcano'];
$tipo = $_POST['tipo'];
$nivel = $_POST['nivel'];
$descricao = addslashes($_POST['descricao']);

//tratamento do nome da imagem
$imgDir = '../img/compendium/';

$imagem = $_FILES["imagem"]["name"];
$separa = explode(".", $imagem);
$separa = array_reverse($separa);
$extensao = $separa[0];
$imagemF = strtolower(str_replace(' ', '', $nome)) . "." . $extensao;
//Elementos da Persona
$corte = $_POST['corte'];
$perfurante = $_POST['perfurante'];
$impacto = $_POST['impacto'];
$fogo = $_POST['fogo'];
$gelo = $_POST['gelo'];
$vento = $_POST['vento'];
$eletricidade = $_POST['eletricidade'];
$luz = $_POST['luz'];
$trevas = $_POST['trevas'];

//Status da Persona
$forca = $_POST['forca'];
$magia = $_POST['magia'];
$resistencia = $_POST['resistencia'];
$agilidade = $_POST['agilidade'];
$sorte = $_POST['sorte'];

//Lista de habilidades da Persona
$habilidades = $_POST['habilidades'];
echo $imgDir . $imagemF;

if (count($habilidades) <= 0 || count($habilidades) > 8 ){
    echo "<script> alert('Devem ser selecionadas no minimo 1 e no maximo 8 habilidades');</script>";
}



//salvar imagem na pasta selecionada
if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imgDir . $imagemF)) {
    $imagemUp = $imgDir . $imagemF;

    /*cadastrar as informações basicas da Persona:
        - Nome:   É o nome da persona
        - Imagem: É a imagem de perfil da Persona
        - Arcano: Arcano nesse contexto é algo como a espécie ou familia da persona
        - Tipo:   Cada Persona tem um tipo que define as chance de herdar certas habilidades
        - Nível:  Vai de 1 a 99, somente inteiros, como em jogos RPGs, é o nivel do personagem
        - Descrição: É uma breve descrição do surgimento da Persona
    */
    $sql->query(
        "INSERT INTO 
        `persona`(
            `nome_persona`,
            `perfil_persona`,
            `arcano`,
            `tipo`,
            `nivel`,
            `descricao`)
        VALUES(
            '$nome',
            '$imagemUp',
            '$arcano',
            '$tipo',
            $nivel,
            '$descricao')"
    );

    //#################################################################################

    /*Logo após o cadastro dos dados basicos da persona, é necessário cadastrar seus elementos,
    mas esses elementos ficam em uma tabela diferente, ligados por uma PK<->FK da tabela
    persona<->elementos, aqui selecionamos o ultimo registro dessa tabela, que é o exatamente 
    o que acabamos de cadastrar, e o salvamos na variavel "$last_id", assim podemos reutilizar esse
    id para outras tabelas
    */
    $dados = mysqli_query($sql, "SELECT MAX(id_persona) as id_persona FROM persona");
    while ($coluna = mysqli_fetch_array($dados)) {
        $last_id = $coluna['id_persona'];
    }

    //###############################################################################

    //cadastra os 9 elementos na tabela `elementos`, e vincula a FK
    $sql->query(
        "INSERT INTO `elementos`(
        `corte`,
        `impacto`,
        `perfurante`,
        `fogo`,
        `gelo`,
        `vento`,
        `eletricidade`,
        `luz`,
        `trevas`,
        `id_persona_id`) 
        VALUES (
            '$corte',
            '$perfurante',
            '$impacto',
            '$fogo',
            '$gelo',
            '$vento',
            '$eletricidade',
            '$luz',
            '$trevas',
            '$last_id')"
    );

    //###################################################################################

    //cadastra os 5 status da persona, e vincula a FK
    $sql->query(
        "INSERT INTO
        `status`(
            `forca`,
            `magia`,
            `resistencia`,
            `agilidade`,
            `sorte`,
            `id_persona`) 
        VALUES(
            '$forca',
            '$magia',
            '$resistencia',
            '$agilidade',
            '$sorte',
            '$last_id')"
    );

    //#####################################################################################

    /*Seleciona as habilidades da Persona, cada Persona deve ter no minimo 1 habilidade
    e no máximo 8, essas habilidades veem da tabela `lista_habilidades`, as habilidades
    são divididas em tipos, cada tipo terá uma listagem por checkbox
    */
    $cont = 0;
    while ($cont < count($habilidades)) {
        $sql->query("INSERT INTO `persona_habilidade`(`id_persona_hab`, `id_habilidade_per`) 
		VALUES('$last_id',$habilidades[$cont])");
        $cont++;
    }
    header("Location: ../html/persona_Cadastro.php");
} else {
    echo "Não foi possivel concluir o upload da imagem";
}
/*
    header('Location:Persona_Cadastro.php');*/
