<?php
session_start();

require_once '../config/Database.php';
require_once '../models/Playlist.php';
require_once '../models/PlaylistDAO.php';

switch ($_POST['playlistControl']){
    case "Adicionar":
        adicionar();
        break;
    default:
        header("Location: ../views/Playlists.php");
}

function adicionar() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    $playlist = new Playlist();
    
    $playlist->setPla_use_cod($_SESSION['use_cod']);
    $playlist->setPla_nome($_POST['nome']);
    $playlist->setPla_descricao($_POST['descricao']);
    
    $dao->adicionar($playlist);
    
    header("Location: ../views/Playlists.php");
}
