<?php
class Usuario {
    private $id;
    private $nome;
    private $login;
    private $user;
    private $senha;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getUser() {
        return $this->user;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}
interface UsuarioDAO {
    public function insert(Usuario $usuario);
    public function update(Usuario $usuario);
    public function selectById($id);
    public function selectByLogin(Usuario $usuario);
    public function delete($id);
}
