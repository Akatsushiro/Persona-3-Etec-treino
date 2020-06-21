<?php
require_once ABSPATH . "/Model/persona/persona_class.php";

$id = $_GET['id'];
$persona = new Persona();
$persona_dados = $persona->persona_dados($id);
$persona_habilidades = $persona->persona_habilidades($id);

foreach ($persona_dados as $coluna) {
    $nome         = $coluna['nome_persona'];
    $nivel        = $coluna['nivel'];
    $arcano       = $coluna['arcano'];
    $tipo_skill   = $coluna['tipo'];
    $descricao    = $coluna['descricao'];
    $img          = $coluna['perfil_persona'];
    $forca        = $coluna['forca'];
    $magia        = $coluna['magia'];
    $resistencia  = $coluna['resistencia'];
    $agilidade    = $coluna['agilidade'];
    $sorte        = $coluna['sorte'];
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

foreach($persona_habilidades as $coluna){
    $skill[] = $coluna['nome_habilidade'];
}

while(count($skill) < 8){
    $skill[] = "-";
}