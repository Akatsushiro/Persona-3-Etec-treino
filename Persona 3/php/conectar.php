<?php
$sql = new mysqli('localhost', 'root', '', 'persona');

//necessário para usar a codificação de caracteres
if (false === $sql->set_charset('utf8')) {
    printf('Error ao usar utf8: %s', $mysqli->error);
}

//Função para retirar espaços de uma string
function tratamento_de_espacos($texto_f)
{
    $vetor[] = explode("", $texto_f);
    $cont = count($vetor);
    $i = 0;
    while ($i < $cont) {
        if ($vetor[$i] === " ") {
            unset($vetor[$i]);
        }
        $i++;
    }
    $texto_final = implode("", $vetor);
    return $texto_final;
}
