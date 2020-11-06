<?php

class Artista {
    private $art_cod;
    private $art_use_cod;
    private $art_nome;
    private $art_estilo;
    
    public function __construct() {
        
    }
    
    public function getArt_cod() {
        return $this->art_cod;
    }

    public function getArt_use_cod() {
        return $this->art_use_cod;
    }

    public function getArt_nome() {
        return $this->art_nome;
    }

    public function getArt_estilo() {
        return $this->art_estilo;
    }

    public function setArt_cod($art_cod) {
        $this->art_cod = $art_cod;
    }

    public function setArt_use_cod($art_use_cod) {
        $this->art_use_cod = $art_use_cod;
    }

    public function setArt_nome($art_nome) {
        $this->art_nome = $art_nome;
    }

    public function setArt_estilo($art_estilo) {
        $this->art_estilo = $art_estilo;
    }

}
