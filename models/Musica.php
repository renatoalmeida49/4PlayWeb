<?php

class Musica {
    private $mus_cod;
    private $mus_use_cod;
    private $mus_art_cod;
    private $mus_nome;
    private $mus_tipo;
    private $mus_capo;
    private $mus_idioma;
    private $mus_instrumento;
    private $mus_letra;
    
    public function __construct() {
        
    }
    
    public function getMus_cod() {
        return $this->mus_cod;
    }

    public function getMus_use_cod() {
        return $this->mus_use_cod;
    }

    public function getMus_art_cod() {
        return $this->mus_art_cod;
    }

    public function getMus_nome() {
        return $this->mus_nome;
    }

    public function getMus_tipo() {
        return $this->mus_tipo;
    }

    public function getMus_capo() {
        return $this->mus_capo;
    }

    public function getMus_idioma() {
        return $this->mus_idioma;
    }

    public function getMus_instrumento() {
        return $this->mus_instrumento;
    }

    public function getMus_letra() {
        return $this->mus_letra;
    }

    public function setMus_cod($mus_cod) {
        $this->mus_cod = $mus_cod;
    }

    public function setMus_use_cod($mus_use_cod) {
        $this->mus_use_cod = $mus_use_cod;
    }

    public function setMus_art_cod($mus_art_cod) {
        $this->mus_art_cod = $mus_art_cod;
    }

    public function setMus_nome($mus_nome) {
        $this->mus_nome = $mus_nome;
    }

    public function setMus_tipo($mus_tipo) {
        $this->mus_tipo = $mus_tipo;
    }

    public function setMus_capo($mus_capo) {
        $this->mus_capo = $mus_capo;
    }

    public function setMus_idioma($mus_idioma) {
        $this->mus_idioma = $mus_idioma;
    }

    public function setMus_instrumento($mus_instrumento) {
        $this->mus_instrumento = $mus_instrumento;
    }

    public function setMus_letra($mus_letra) {
        $this->mus_letra = $mus_letra;
    }

}
