<?php

class Playlist {
    private $pla_cod;
    private $pla_use_cod;
    private $pla_nome;
    private $pla_descricao;
    
    public function __construct() {
        
    }
    
    public function getPla_cod() {
        return $this->pla_cod;
    }

    public function getPla_use_cod() {
        return $this->pla_use_cod;
    }

    public function getPla_nome() {
        return $this->pla_nome;
    }

    public function getPla_descricao() {
        return $this->pla_descricao;
    }

    public function setPla_cod($pla_cod) {
        $this->pla_cod = $pla_cod;
    }

    public function setPla_use_cod($pla_use_cod) {
        $this->pla_use_cod = $pla_use_cod;
    }

    public function setPla_nome($pla_nome) {
        $this->pla_nome = $pla_nome;
    }

    public function setPla_descricao($pla_descricao) {
        $this->pla_descricao = $pla_descricao;
    }

}
