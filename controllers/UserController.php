<?php

require_once '../config/Database.php';
require_once '../models/User.php';
require_once '../models/UserDAO.php';

$db = new Database();
$dao = new UserDAO($db);

$user = new User();

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$user->setNome($nome);
$user->setLogin($login);
$user->setSenha($senha);

$dao->adicionar($user);

?>