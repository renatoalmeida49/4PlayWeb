<?php
require_once 'Musica.php';
class MusicaDAO {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    public function adicionar(Musica $musica){
        $res = new Musica();
        
        $res = $this->buscarMusica($musica);
        
        if ($res == null) {
            $mus_use_cod = $_SESSION['use_cod'];
            $mus_art_cod = $musica->getMus_art_cod();
            $mus_nome = $musica->getMus_nome();
            $mus_tipo = $musica->getMus_tipo();
            $mus_capo = $musica->getMus_capo();
            $mus_idioma = $musica->getMus_idioma();
            $mus_instrumento = $musica->getMus_instrumento();
            $mus_letra = $musica->getMus_letra();
        
            $query = "INSERT INTO musicas (mus_use_cod, mus_art_cod, mus_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento, mus_letra) "
                . "VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
            $stmt = $this->db->getConnection()->prepare("INSERT INTO musicas (mus_use_cod, mus_art_cod, mus_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento, mus_letra) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $mus_use_cod);
            $stmt->bindParam(2, $mus_art_cod);
            $stmt->bindParam(3, $mus_nome);
            $stmt->bindParam(4, $mus_tipo);
            $stmt->bindParam(5, $mus_capo);
            $stmt->bindParam(6, $mus_idioma);
            $stmt->bindParam(7, $mus_instrumento);
            $stmt->bindParam(8, $mus_letra);
        
            $query = $stmt->execute();
            
            return true;
        } else {
            return false;
        }
        
    }
    
    public function buscarMusica(Musica $musica){
        $nomeMusica = $musica->getMus_nome();
        $sql = "select * from musicas where mus_nome = '$nomeMusica'";
        
        $stmt = $this->db->getConnection()->execute($sql);
        
        if($stmt->rowCount() > 0){
            $found = $stmt->fetch();
            
            if ($found['mus_use_cod'] == $musica->getMus_use_cod()) {
                $musicaFound = new Musica();
                
                $musicaFound->setMus_cod($found['mus_cod']);
                $musicaFound->setMus_use_cod($found['mus_use_cod']);
                $musicaFound->setMus_nome($found['mus_nome']);
                $musicaFound->setMus_art_cod($found['mus_art_cod']);
                $musicaFound->setMus_tipo($found['mus_tipo']);
                $musicaFound->setMus_capo($found['mus_capo']);
                $musicaFound->setMus_idioma($found['mus_idioma']);
                $musicaFound->setMus_instrumento($found['mus_instrumento']);
                $musicaFound->setMus_letra($found['mus_letra']);
                
                return $musicaFound;
            }
        } else {
            return null;
        }
    }
}
