<?php
if(!isset($_SESSION))
{
session_start();
}
//não permite acesar a pagina principal pelo navegador
//senão existir a seção volta pela pagina de erro
if(!isset($_SESSION['login'])AND !isset($_SESSION['senha'])){
  header("location:../html/erro.html");
  exit;
}
?>
<?php
include "../php/conectar.php";
$log = $_SESSION['login'];
$dados = mysqli_query($sql, "SELECT * FROM usuarios where login = '$log' ");
while($coluna = mysqli_fetch_array($dados)){
    $id = $coluna['id'];
    $nome = $coluna['nome'];
    $email = $coluna['email'];
    $login = $coluna['login'];
    $rm = $coluna['rm'];
    $img_perfil = $coluna['img_perfil'];
    $img_capa = $coluna['img_capa'];
}
?>