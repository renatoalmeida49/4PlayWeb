<?php
session_start();

require_once '../config/Database.php';
require_once '../models/ArtistaDAO.php';
require_once '../models/Artista.php';

switch ($_POST['artistaController']) {
    case "Adicionar":
        adicionar();
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
    
    $dao->adicionar($artista);
    
    header("Location: ../views/adicionarMusica.php");
}