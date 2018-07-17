<?php
session_start();

require_once '../config/Database.php';
require_once '../models/Playlist.php';
require_once '../models/PlaylistDAO.php';

switch ($_POST['playlistControl']){
    case "Adicionar":
        adicionar();
        break;
    case "Excluir":
        excluir();
        break;
    case "AdicionarMusica":
        adicionarMusica();
        break;
    case "RemoverMusica":
        removerMusica();
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
    
    if ($dao->adicionar($playlist)) {
        header("Location: ../views/Playlists.php");
    } else {
        echo 'Falha ao adicionar playlist.';
    }
}

function excluir() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    $playlist = new Playlist();
    
    echo 'Tô na função';
    
    $playlist->setPla_cod($_POST['playlistID']);
    
    if ($dao->excluir($playlist)) {
        header("Location: ../views/Playlists.php");
    } else {
        echo 'Falha ao excluir playlist.';
    }
}

function adicionarMusica() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    
    if ($dao->adicionarMusicaAPlaylist($_POST['playlistID'], $_POST['musicaID'])) {
        $location = "Location: ../views/editarplaylist.php?id=".$_POST['playlistID'];
    
        header($location);
    } else {
        echo 'Falha ao adicionar música a playlist.';
    }
}

function removerMusica() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    
    if ($dao->removerMusicaDaPlaylist($_POST['playlistID'], $_POST['musicaID'])) {
        $location = "Location: ../views/editarplaylist.php?id=".$_POST['playlistID'];
    
        header($location);
    } else {
        echo 'Falha ao remover playlist.';
    }
}