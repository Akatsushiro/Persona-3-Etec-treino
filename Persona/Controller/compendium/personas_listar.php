<?php

require_once ABSPATH . "/Model/compendium/compendium_class.php";

$lista = new Compendium();
$lista_de_personas = $lista->personas_list();
echo "
<table class='my-3 table container bg-light'>
    <thead class='thead-dark'>
        <tr class='cabecario'>
            <th>NOME</th>
            <th>NIVEL</th>
            <th>ARCANO</th>
        </tr>
    </thead>";
foreach ($lista_de_personas as $coluna) {
    $id     = $coluna['id_persona'];
    $nome   = $coluna['nome_persona'];
    $nivel  = $coluna['nivel'];
    $arcano = $coluna['arcano'];

    echo "
		<tr class='selecao'>
			<td><a href='persona_detalhes_mobile.php?id=$id' class = 'decoracao'>$nome</a></td>
			<td>$nivel</td>
			<td>$arcano</td>
    </tr>";
}
echo "</table>";
