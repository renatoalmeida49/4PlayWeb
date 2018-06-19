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
    
    public function excluir($cod){
        
        $query = "delete from artistas where art_cod=?";
            
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $cod);
           
        $query = $stmt->execute();
        
        return true;
    }
    
    public function editar(Artista $artista) {
        $query = "update artistas set art_nome=?, art_estilo=? where art_cod=?";
        
        $nome = $artista->getArt_nome();
        $estilo = $artista->getArt_estilo();
        $cod = $artista->getArt_cod();
        
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $estilo);
        $stmt->bindParam(3, $cod);
        
        $query = $stmt->execute();
        
        return true;
    }
    
}
