<?php
include "conectar.php";
$id = $_GET['id'];
echo "$id <br>";

$tabelas = array("status", "elementos", "lista_habilidades", "persona");

$dados = $sql->query("SELECT * FROM persona WHERE id_persona = $id");

while($coluna = mysqli_fetch_array($dados)){
    $imagem = $coluna['perfil_persona'];
}
echo "$imagem ########<br> ";
unlink("$imagem");

$sql->query("DELETE FROM `status` WHERE id_persona = '$id'");
$sql->query("DELETE FROM `elementos` WHERE id_persona_id = '$id'");
$sql->query("DELETE FROM `lista_habilidades` WHERE id_persona_hab = '$id'");
$sql->query("DELETE FROM `persona` WHERE id_persona = '$id'");
Header("Location: ../html/excluir_persona_listar.php");