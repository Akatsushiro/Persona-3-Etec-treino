<?php
include "conectar.php";

    $id = $_GET['id'];
    echo "$id";

    
    $dados = mysqli_query($sql, "SELECT usuarios.img_perfil FROM usuarios WHERE id = $id");
    while($coluna = mysqli_fetch_array($dados)){
        $img = $coluna['img_perfil'];
    }
    unlink("$img");

    $dados = mysqli_query($sql, "DELETE FROM usuarios WHERE id = $id");

    header("Location: ../index.html");












?>