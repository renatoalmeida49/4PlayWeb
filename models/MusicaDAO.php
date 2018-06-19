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
            
            $codArtista = $this->buscarCodArtista($musica->getMus_art_cod(), $musica->getMus_use_cod());
        
            $query = "INSERT INTO musicas (mus_use_cod, mus_art_cod, mus_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento, mus_letra) "
                . "VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
            $nome = $musica->getMus_nome();
            $tipo = $musica->getMus_tipo();
            $capo = $musica->getMus_capo();
            $idioma = $musica->getMus_idioma();
            $instumento = $musica->getMus_instrumento();
            $letra = $musica->getMus_letra();
            
            $stmt = $this->db->getConnection()->prepare("INSERT INTO musicas (mus_use_cod, mus_art_cod, mus_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento, mus_letra) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $_SESSION['use_cod']);
            $stmt->bindParam(2, $codArtista);
            $stmt->bindParam(3, $nome);
            $stmt->bindParam(4, $tipo);
            $stmt->bindParam(5, $capo);
            $stmt->bindParam(6, $idioma);
            $stmt->bindParam(7, $instumento);
            $stmt->bindParam(8, $letra);
        
            $query = $stmt->execute();
            
            return true;
        } else {
            return false;
        }
        
    }
    
    public function buscarMusica(Musica $musica){
        $nomeMusica = $musica->getMus_nome();
        $sql = "select * from musicas where mus_nome = '$nomeMusica'";
        
        $stmt = $this->db->getConnection()->query($sql);
        
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
    
    //Essa função existe porque o programa lhe dar uma String para artista
    //e a tabela músicas aceita apenas int para artista
    public function buscarCodArtista($nome, $cod) {
        $query = "select * from artistas where art_nome='{$nome}' and art_use_cod='{$cod}'";
        
        $stmt = $this->db->getConnection()->query($query);
        
        $found = $stmt->fetch();
        $cod = $found['art_cod'];
        
        return $cod;
    }
    
    public function atualizar(Musica $musica){
        try {
            $codArtMusica = $musica->getMus_art_cod();
            $codUsuario = $musica->getMus_use_cod();
            
            $codArtista = $this->buscarCodArtista($codArtMusica, $codUsuario);
            
            $cod = $musica->getMus_cod();
            $nome = $musica->getMus_nome();
            $tipo = $musica->getMus_tipo();
            $capo = $musica->getMus_capo();
            $idioma = $musica->getMus_idioma();
            $instumento = $musica->getMus_instrumento();
            $letra = $musica->getMus_letra();
        
            $query = "UPDATE musicas SET mus_art_cod=?, mus_nome=?, mus_capo=?, mus_idioma=?, mus_instrumento=?, mus_letra=? WHERE mus_cod=?";
        
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $codArtista);
            $stmt->bindParam(2, $nome);
            $stmt->bindParam(3, $capo);
            $stmt->bindParam(4, $idioma);
            $stmt->bindParam(5, $instumento);
            $stmt->bindParam(6, $letra);
            $stmt->bindParam(7, $cod);
        
            $query = $stmt->execute();
        
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function excluir($musica, $userCod){
        $query = "delete from musicas where mus_nome=? and mus_use_cod=?";
        
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $musica);
        $stmt->bindParam(2, $userCod);
        
        $query = $stmt->execute();
        
        return true;
    }
    
    public function seleciona($cod) {
        $linhas = array();
        try {
            $stmt = $this->db->getConnection()->prepare("SELECT select mus_nome, art_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento from musicas inner join artistas on mus_art_cod = art_cod where mus_use_cod = '?' order by mus_nome");
            $stmt->bindParam(1, $cod);
            $stmt->execute();
            
            $result = $stmt->fetchAll();
            
            if (count($result)){
                foreach ($result as $row) {
                    $linhas[] = $row;
                }
            }
            
            return $linhas;
        } catch (PDOException $ex) {
            echo "Falha ao buscar músicas. ".$ex->getMessage();
        }
    }
}
