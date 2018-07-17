<?php
session_start();

require_once '../config/Database.php';
require_once '../models/ArtistaDAO.php';
require_once '../models/Artista.php';

switch ($_POST['artistaController']) {
    case "Adicionar":
        adicionar();
        break;
    case "Atualizar":
        atualizar();
        break;
    case "Excluir":
        excluir();
        break;
    default:
        header("Location: ../views/adicionarMusica.php");
}

function adicionar(){
    $db = new Database();
    $dao = new ArtistaDAO($db);
    
    $artista = new Artista();
    
    $artista->setArt_use_cod($_SESSION['use_cod']);
    $artista->setArt_nome($_POST['nome']);
    $artista->setArt_estilo($_POST['estilo']);
    
    if ($dao->adicionar($artista)) {
        header("Location: ../views/adicionarMusica.php");
    } else {
        echo 'Falha ao adicionar artista';
    }
}

function atualizar(){
    $db = new Database();
    $dao = new ArtistaDAO($db);
    
    $cod = $_POST['cod'];
    
    $artista = new Artista();
    
    $artista->setArt_cod($cod);
    $artista->setArt_nome($_POST['nome']);
    $artista->setArt_estilo($_POST['estilo']);
    $artista->setArt_use_cod($_SESSION['use_cod']);
    
    if ($dao->editar($artista)) {
        header("Location: ../views/adicionarMusica.php");
    } else {
        echo 'Falha ao editar artista.';
    }
}

function excluir(){
    $db = new Database();
    $dao = new ArtistaDAO($db);
    
    $cod = $_POST['cod'];
    
    if ($dao->excluir($cod)) {
        header("Location: ../views/adicionarMusica.php");
    } else {
        echo 'Falha ao excluir artista';
    }
}