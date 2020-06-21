<?php
include "conectar.php";

//caracteristicas da persona
$id = $_GET['id'];
$nome  = $_POST['nome'];
$arcano = $_POST['arcano'];
$tipo = $_POST['tipo'];
$nivel = $_POST['nivel'];
$descricao = $_POST['descricao'];

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

if (count($habilidades) <= 0 || count($habilidades) > 8) {
    echo "<script> alert('Devem ser selecionadas no minimo 1 e no maximo 8 habilidades');</script>";
}

//salvar imagem na pasta selecionada
if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imgDir . $imagemF)) {
    $imagemUp = $imgDir . $imagemF;
    echo "$imagemUp";
    /*cadastrar as informações basicas da Persona:
        - Nome:   É o nome da persona
        - Imagem: É a imagem de perfil da Persona
        - Arcano: Arcano nesse contexto é algo como a espécie ou familia da persona
        - Tipo:   Cada Persona tem um tipo que define as chance de herdar certas habilidades
        - Nível:  Vai de 1 a 99, somente inteiros, como em jogos RPGs, é o nivel do personagem
        - Descrição: É uma breve descrição do surgimento da Persona
    */
    $sql->query(
        "UPDATE `persona` SET
            `nome_persona` = '$nome',
            `perfil_persona` = '$imagemUp',
            `arcano` = '$arcano',
            `tipo` = '$tipo',
            `nivel` = $nivel,
            `descricao` = '$descricao'
        WHERE `id_persona` = $id"
    );

    //###############################################################################

    //cadastra os 9 elementos na tabela `elementos`, e vincula a FK
    $sql->query(
        "UPDATE `elementos` SET
        `corte` = '$corte',
        `impacto` = '$impacto',
        `perfurante` = '$perfurante',
        `fogo` = '$fogo',
        `gelo` = '$gelo',
        `vento` = '$vento',
        `eletricidade` = '$eletricidade',
        `luz` = '$luz',
        `trevas` = '$trevas'
    WHERE `id_persona_id` = $id"
    );

    //###################################################################################

    //cadastra os 5 status da persona, e vincula a FK
    $sql->query(
        "UPDATE `status` SET
            `forca` = '$forca',
            `magia` = '$magia',
            `resistencia` = '$resistencia',
            `agilidade` = '$agilidade',
            `sorte` = '$sorte'
        WHERE `id_persona` = $id"
    );

    //#####################################################################################

    /*Seleciona as habilidades da Persona, cada Persona deve ter no minimo 1 habilidade
    e no máximo 8, essas habilidades veem da tabela `lista_habilidades`, as habilidades
    são divididas em tipos, cada tipo terá uma listagem por checkbox
    */
    $sql->query("DELETE FROM `persona_habilidade` WHERE `id_persona_hab` = $id");
    $cont = 0;
    while ($cont < count($habilidades)) {
        $sql->query("INSERT INTO `persona_habilidade`(`id_persona_hab`, `id_habilidade_per`) 
		VALUES('$id',$habilidades[$cont])");
        $cont++;
    }
    //header("Location: ../html/listar_atualizar_persona.php");
} else {
    echo "Não foi possivel concluir o upload da imagem";
}
