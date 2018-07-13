<?php
session_start();

require_once '../config/Database.php';
require_once '../models/User.php';
require_once '../models/UserDAO.php';
 
switch ($_POST['userControl']) {
    case 'Acessar':
        acessar();
        break;
    case 'Cadastrar':
        adicionar();
        break;
    default:
        echo "É isso aí";
}

function adicionar() {
    $db = new Database();
    $dao = new UserDAO($db);

    $user = new User();

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $user->setNome($nome);
    $user->setLogin($login);
    $user->setSenha($senha);

    $dao->adicionar($user);
    
    header("Location: ../index.php");
}

function acessar() {
    $db = new Database();
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $query = "select * from users where use_log=? and use_senha=?";
    
    $stmt = $db->getConnection()->prepare($query);
    $stmt->bindParam(1, $login);
    $stmt->bindParam(2, $senha);
    
    $stmt->execute();
    
    if ($stmt->rowCount() > 0 ) {

	$cod = $stmt->fetch();

	$_SESSION['use_cod'] = $cod['use_cod'];
        $_SESSION['use_nome'] = $cod['use_nome'];
        $_SESSION['use_log'] = $cod['use_log'];

	header("Location: ../views/telaInicial.php");

    } else {
	echo "User not found";
    }
}
?>