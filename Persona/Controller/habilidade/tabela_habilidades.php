<?php

require_once "../../config.php";
require_once ABSPATH . "/Model/habilidades/habilidade_class.php";

$tabela = new Habilidade();

$lista = $tabela->tabela_de_habilidades();

echo "
<table class='my-3 table container bg-light'>
    <thead class='thead-dark'>
        <tr class='cabecario'>
            <th>NOME</th>
            <th>TIPO</th>
            <th>CUSTO</th>
            <th>RANK</th>
            <th>DESCRIÇÃO</th>
        </tr>
    </thead>";
foreach ($lista as $coluna) {
    $nome      = $coluna['nome_habilidade'];
    $tipo      = $coluna['tipo_habilidade'];
    $custo     = $coluna['custo'];
    $rank      = $coluna['rank'];
    $descricao = $coluna['descricao_habilidade'];

    echo "
		<tr class='selecao'>
			<td>$nome</td>
			<td>$tipo</td>
			<td>$custo</td>
			<td>$rank</td>
			<td>$descricao</td>
    </tr>";
}
echo "</table>";