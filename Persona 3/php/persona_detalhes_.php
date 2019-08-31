<?php
include "../php/conectar.php";
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
$vetor = (array) $vetor;
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
