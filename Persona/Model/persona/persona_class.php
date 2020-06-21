<?php

require_once ABSPATH . "/Model/connect_database.php";

class Persona extends Database{

    function persona_dados($id){
        global $pdo;
        $persona = new Persona();
        $persona->conectar();
        $sql = $pdo->prepare("SELECT persona.nome_persona,
                                     persona.perfil_persona,
                                     persona.nivel,
                                     persona.arcano,
                                     persona.tipo,
                                     persona.descricao,
                                     elementos.corte,
                                     elementos.impacto,
                                     elementos.perfurante,
                                     elementos.fogo,
                                     elementos.gelo,
                                     elementos.vento,
                                     elementos.eletricidade,
                                     elementos.luz,
                                     elementos.trevas,
                                     `status`.forca,
                                     `status`.magia,
                                     `status`.resistencia,
                                     `status`.agilidade,
                                     `status`.sorte
                                FROM persona
                               INNER JOIN elementos ON(persona.id_persona = elementos.id_persona_id)
                               INNER JOIN `status` ON(persona.id_persona = `status`.id_persona) 
                               WHERE persona.id_persona = ?");
        $sql->execute(array($id));
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    function persona_habilidades($id){
        global $pdo;
        $persona = new Persona();
        $persona->conectar();
        $sql = $pdo->prepare("SELECT lista_habilidade.nome_habilidade
                                FROM persona
                               INNER JOIN persona_habilidade ON(persona.id_persona = persona_habilidade.id_persona_hab)
                               INNER JOIN lista_habilidade ON(persona_habilidade.id_habilidade_per = lista_habilidade.id_habilidade)
                               WHERE persona.id_persona = ?");
        $sql->execute(array($id));
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}