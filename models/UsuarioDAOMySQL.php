<?php
require_once 'Usuario.php';
class UsuarioDAOMySQL implements UsuarioDAO {
    private $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function insert(Usuario $usuario){
        try {
            $nome = $usuario->getNome();
            $login = $usuario->getLogin();
            $senha = $usuario->getSenha();
        
            $query = "INSERT INTO usuarios (use_nome, use_log, use_senha) VALUES (?, ?, ?)";
        
            $stmt = $this->pdo->getConnection()->prepare($query);
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $login);
            $stmt->bindParam(3, $senha);
        
            $query = $stmt->execute();
            
            return true;
        } catch (Exception $ex) {
            echo 'Falha ao adicionar usuário '.$ex->getMessage();
            return false;
        }
    }

    public function update(Usuario $usuario) {}
    public function selectById($id) {}

    public function selectByLogin(Usuario $usuario) {
        $sql = "SELECT * FROM usuarios WHERE use_log = :login AND use_senha = :senha";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':login', $usuario->getLogin());
        $stmt->bindValue(':senha', $usuario->getSenha());

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch();

            $usuario->setId($resultado['use_cod']);

        } else {
            $usuario->setId(0);
        }

        return $usuario;
    }

    public function delete($id) {}
}
