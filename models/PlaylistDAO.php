<?php

class PlaylistDAO {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function buscarPlaylist(Artista $artista){
        
        $sql = "select";
    }
}
