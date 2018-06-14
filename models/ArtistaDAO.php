<?php
require_once 'Artista.php';
class ArtistaDAO {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function buscaArtista(Artista $artista){
        $nomeArtista = $artista->getArt_nome();
        $sql = "select * from artistas where art_nome='$nomeArtista'";
        
        $stmt = $this->db->getConnection()->query($sql);
        
        if ($stmt->rowCount() > 0){
            $found = $stmt->fetch();
            
            if ($found['art_use_cod'] == $artista->getArt_use_cod()) {
                $artistaFound = new Artista();
                
                $artistaFound->setArt_cod($found['art_cod']);
                $artistaFound->setArt_use_cod($found['art_use_cod']);
                $artistaFound->setArt_nome($found['art_nome']);
                $artistaFound->setArt_estilo($found['art_estilo']);
                
                return $artistaFound;
            }
        } else {
            return null;
        }
    }
    
    public function adicionar(Artista $artista) {
        $res = new Artista();
        
        $res = $this->buscaArtista($artista);
        
        try {
            if ($res == null) {
                $nome = $artista->getArt_nome();
                $estilo = $artista->getArt_estilo();
                $useCod = $artista->getArt_use_cod();
                
                $query = "INSERT INTO artistas (art_nome, art_estilo, art_use_cod)"
                        . "VALUES (?, ?, ?)";
            
                $stmt = $this->db->getConnection()->prepare($query);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $estilo);
                $stmt->bindParam(3, $useCod);
            
                $query = $stmt->execute();
            
                return true;
            }
        } catch (PDOException $ex) {
            echo "Erro ao adicionar artista. ".$ex->getMessage();
            return false;
        }
        
        
    }
    
    public function excluir(Artista $artista){
        $res = new Artista();
        
        $res = $this->buscaArtista($artista);
        
        if ($res == null) {
            return false;
        } else {
            $query = "delete from artistas where art_use_cod=? and art_cod=?";
            
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $artista->getArt_use_cod());
            $stmt->bindParam(2, $artista->getArt_cod());
            
            $query = $stmt->execute();
            
            return true;
        }
    }
    
    public function editar($nomeArtista, Artista $artista) {
        $query = "update artistas set art_nome=?, art_estilo=? where art_nome=? and art_use_cod=?";
        
        $stmt = $this->db->getConnection()->prepare();
        $stmt->bindParam(1, $artista->getArt_nome());
        $stmt->bindParam(2, $artista->getArt_estilo());
        $stmt->bindParam(3, $nomeArtista);
        $stmt->bindParam(4, $artista->getArt_use_cod());
        
        $query = $stmt->execute();
        
        return true;
    }
    
}
