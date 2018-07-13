<?php
class UserDAO {
    private $db;
    
    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    public function adicionar(User $user){
        try {
            $nome = $user->getNome();
            $login = $user->getLogin();
            $senha = $user->getSenha();
        
            $query = "INSERT INTO users (nome, login, senha) VALUES (?, ?, ?)";
        
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $login);
            $stmt->bindParam(3, $senha);
        
            $query = $stmt->execute();
            
            return true;
        } catch (Exception $ex) {
            echo 'Falha ao adicionar usuário';
            return false;
        }
        
    }
}
