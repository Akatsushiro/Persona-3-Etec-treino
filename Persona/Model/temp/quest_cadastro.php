<?php
require_once ABSPATH . "/Model/connect_database.php";

class Requests extends Database
{
    public $titulo;
    public $inicio;
    public $termino;
    public $recompenca;
    public $descricao;
    public $solucao;
    public $tipo;

    // -------------- Getters ---------------

    function get_titulo(){
        return $this->titulo;
    }

    function get_inicio(){
        return $this->inicio;
    }
    
    function get_termino(){
        return $this->termino;
    }

    function get_recompenca(){
        return $this->recompensa;
    }

    function get_descricao(){
        return $this->descricao;
    }

    function get_solucao(){
        return $this->solucao;
    }

    function get_tipo(){
        return $this->tipo;
    }

    // ----------------- Setters -----------------

    function set_titulo($titulo){
        $this->titulo = $titulo;
    }

    function set_inicio($inicio){
        $this->inicio = $inicio;
    }

    function set_termino($termino){
        $this->termino = $termino;
    }

    function set_recompenca($recompenca){
        $this->recompenca = $recompenca;
    }

    function set_descricao($descricao){
        $this->descricao = $descricao;
    }

    function set_solucao($solucao){
        $this->solucao = $solucao;
    }

    function set_tipo($tipo){
        $this->tipo = $tipo;
    }

    // -------------------------------------------

    function request_dados($titulo, $inicio, $termino, $recompenca, $descricao, $solucao, $tipo){
        $this->set_titulo($titulo);
        $this->set_inicio($inicio);
        $this->set_termino($termino);
        $this->set_recompenca($recompenca);
        $this->set_descricao($descricao);
        $this->set_solucao($solucao);
        $this->set_tipo($tipo);
    }

    function new_request($titulo, $inicio, $termino, $recompenca, $descricao, $solucao, $tipo){
        try {
            global $pdo;
            $this->conectar();
            $this->request_dados($titulo, $inicio, $termino, $recompenca, $descricao, $solucao, $tipo);
            $sql = $pdo->prepare("INSERT INTO `requests`(`titulo`, `data_de_inicio`, `data_de_termino`, `recompenca`, `descricao`, `solucao`, `tipo`) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $sql->execute(array($this->titulo, $this->inicio, $this->termino, $this->recompenca, $this->descricao, $this->solucao, $this->tipo));
            return "Funciona";
        } catch (PDOException $e) {
            return $e;
        }

    }
}
