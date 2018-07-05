<?php

class PlaylistDAO {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function buscarPlaylist(Playlist $playlist){
        $nomePlaylist = $playlist->getPla_nome();
        $sql = "select * from playlists where pla_use_cod='{$_SESSION['use_cod']}' and pla_nome='$nomePlaylist'";
        
        $stmt = $this->db->getConnection()->query($sql);
        
        if ($stmt->rowCount() > 0){
            $found = $stmt->fetch();
            
            $playlistFound = new Playlist();
            
            $playlistFound->setPla_cod($found['pla_cod']);
            $playlistFound->setPla_use_cod($found['pla_use_cod']);
            $playlistFound->setPla_nome($found['pla_nome']);
            $playlistFound->setPla_descricao($found['pla_descricao']);
            
            return $playlistFound;
        } else {
            return null;
        }
    }
    
    public function adicionar(Playlist $playlist) {
        $res = new Playlist();
        
        $res = $this->buscarPlaylist($playlist);
        
        if ($res == null) {
            $query = "insert into playlists (pla_use_cod, pla_nome, pla_descricao) values (?, ?, ?)";
            
            $cod = $playlist->getPla_use_cod();
            $nome = $playlist->getPla_nome();
            $descricao = $playlist->getPla_descricao();
            
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $cod);
            $stmt->bindParam(2, $nome);
            $stmt->bindParam(3, $descricao);
            
            $query = $stmt->execute();
            
            return true;
        } else {
            return false;
        }
    }
    
    public function excluir(Playlist $playlist) {
        $query = "delete from playlists where pla_cod=?";
        
        $plaCod = $playlist->getPla_cod();
        
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $plaCod);
        
        $query = $stmt->execute();
        
        return true;
    }
    
    public function adicionarMusicaAPlaylist($codPlaylist, $codMusica) {
        $query = "insert into musicasplaylists (mpl_pla_cod, mpl_mus_cod) values (?, ?)";
        
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $codPlaylist);
        $stmt->bindParam(2, $codMusica);
        
        $query = $stmt->execute();
        
        return true;   
    }
    
    public function removerMusicaDaPlaylist($codPlaylist, $codMusica) {
        $query = "delete from musicasPlaylists where mpl_pla_cod=? and mpl_mus_cod=?";
        
        $stmt = $this->db->getConnection()->prepare($query);
        
        $stmt->bindParam(1, $codPlaylist);
        $stmt->bindParam(2, $codMusica);
        
        $query = $stmt->execute();
        
        return true;
    }
}
