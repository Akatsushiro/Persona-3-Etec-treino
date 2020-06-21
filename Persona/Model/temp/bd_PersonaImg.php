<?php

require_once "../../config.php";
require_once ABSPATH . "/Model/compendium/compendium_class.php";
$persona = new Compendium();
$data = $persona->test();

echo "<pre>";

foreach ($data as $valor) {
    # code...
    $arr = explode("/", $valor["perfil_persona"]);
    print_r($arr[3]);
    global $pdo;
    $persona->conectar();
    $sql = $pdo->prepare("UPDATE persona SET perfil_persona = ? WHERE id_persona = ?");
    $sql->execute(array($arr[3], $valor['id_persona']));
}

