<?php 
    include "conectar.php";
    $nome = $_POST['habilidade'];
    $tipo = $_POST['tipo'];
    $custo = $_POST['custo'];
    $rank = $_POST['rank'];
    $descricao = $_POST['descricao'];

    $sql->query("INSERT INTO lista_habilidade(nome_habilidade, tipo_habilidade, custo, `rank`, descricao_habilidade)
    VALUES ('$nome','$tipo','$custo','$rank','$descricao')");

    header ("LOCATION: ../html/temp_habilidades.html")

?>