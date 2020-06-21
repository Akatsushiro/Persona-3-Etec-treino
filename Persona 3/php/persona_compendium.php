<?php
    $nome = $_GET['nome'];
    $dados = mysqli_query($sql, 'SELECT * FROM persona where nome_persona = $nome');

    while($coluna = mysqli_fecht_array($dados)){
        $nome      = $coluna['nome_persona'];
		$nivel     = $coluna['nivel'];
		$arcano    = $coluna['arcano'];
        $descricao = $coluna['descricao'];
        $img       = $coluna['perfil_persona']; 
    }
?>