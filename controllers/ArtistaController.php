<?php

require_once '../config/Database.php';
require_once '../models/ArtistaDAO.php';
require_once '../models/Artista.php';

switch ($_POST['artistaController']) {
    case "Adicionar":
        adicionar();
        break;
    default:
        header("Location: suasMusicas.php");
}

function adicionar(){
    $db = new Database();
    $dao = new ArtistaDAO($db);
    
    $artista = new Artista();
    
    $artista->setArt_use_cod($_SESSION['use_cod']);
    $artista->setArt_nome($_POST['nome']);
    $artista->setArt_estilo($_SESSION['estilo']);
    
    $dao->adicionar($artista);
    
    header("Location: suasMusicas.php");
}