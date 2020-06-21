<?php
require_once "../../config.php";
require_once ABSPATH . "/Model/temp/quest_cadastro.php";
echo "<pre>";

$request = new Requests();

$titulo = trim(addslashes($_POST['titulo']));
$inicio = trim(addslashes($_POST['inicio']));
$termino = trim(addslashes($_POST['termino']));
$recompenca = trim(addslashes($_POST['recompenca']));
$descricao = trim(addslashes($_POST['descricao']));
$solucao = trim(addslashes($_POST['solucao']));
$tipo = trim(addslashes($_POST['tipo']));

echo $request->new_request($titulo, $inicio, $termino, $recompenca, $descricao, $solucao, $tipo);
header("Location: ../../view/temp/request.php");