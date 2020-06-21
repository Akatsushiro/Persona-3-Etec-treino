<?php
require_once "../config.php";
require_once ABSPATH . "/Model/connect_database.php";

class Habilidade extends Database{

    function tabela_de_habilidades(){
        global $pdo;
        $this->conectar();
        $sql = $pdo->prepare("SELECT lista_habilidade.nome_habilidade, lista_habilidade.tipo_habilidade, lista_habilidade.custo, lista_habilidade.rank, lista_habilidade.descricao_habilidade FROM persona.lista_habilidade ORDER BY tipo_habilidade;");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}