<?php
require_once 'Usuario.php';
class UsuarioDAOMySQL implements UsuarioDAO {
    private $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function insert(Usuario $usuario) {
        $sql = "INSERT INTO usuarios (nome, login, senha) VALUES (:use_nome, :use_log, :use_senha)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':use_nome', $usuario->getNome());
            $stmt->bindValue(':use_log', $usuario->getLogin());
            $stmt->bindValue(':use_senha', $usuario->getPassword());
            $stmt->execute();

            $usuario->setId($this->pdo->lastInsertId());

            if ($usuario->getId() != 0) {
                return true;
            } else {
                echo "Falha ao add";
                return false;
            }
        } catch (PDOException $ex) {
            echo 'Falha ao adicionar usuário '.$ex->getMessage();
            return false;
        }
    }

    public function update(Usuario $usuario) {}
    public function selectById($id) {}

    public function selectByLogin(Usuario $usuario) {
        $sql = "SELECT * FROM usuarios WHERE login = :login AND senha = :senha";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':login', $usuario->getLogin());
        $stmt->bindValue(':senha', $usuario->getPassword());

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch();

            $usuario->setId($resultado['id']);
        } else {
            $usuario->setId(0);
        }

        return $usuario;
    }

    public function delete($id) {}
}
