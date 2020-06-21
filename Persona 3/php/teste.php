<?php
include "conectar.php";

$dados=$sql->query("SELECT persona.nome_persona,
lista_habilidade.nome_habilidade from persona
INNER JOIN persona_habilidade
on (persona.id_persona = persona_habilidade.id_persona_hab)
INNER JOIN lista_habilidade on (persona_habilidade.id_habilidade_per = lista_habilidade.id_habilidade)
where persona.id_persona = 1");

while($coluna = mysqli_fetch_array($dados)){
    $persona[] = $coluna['nome_persona'];
    $persona[] = $coluna['nome_habilidade'];
    echo "<br>";
    echo $persona[0];
    echo "<br>";
    echo $persona[1];
    echo "<br>";
}

?>
