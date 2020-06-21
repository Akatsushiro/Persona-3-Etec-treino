<?php
require_once ABSPATH . "/Model/connect_database.php";

class Compendium extends Database{

    function personas_list(){
        global $pdo;
        $db = new Compendium();
        $db->conectar();
        $sql = $pdo->prepare("SELECT id_persona, nome_persona, nivel, arcano FROM persona ORDER BY nivel, arcano");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}