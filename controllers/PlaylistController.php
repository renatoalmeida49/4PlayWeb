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
    
    $dao->adicionar($playlist);
    
    header("Location: ../views/Playlists.php");
}

function excluir() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    $playlist = new Playlist();
    
    $playlist->setPla_cod($_POST['playlistID']);
    
    $dao->excluir($playlist);
    
    header("Location: ../views/Playlists.php");
}

function adicionarMusica() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    
    $dao->adicionarMusicaAPlaylist($_POST['playlistID'], $_POST['musicaID']);
    
    $location = "Location: ../views/editarplaylist.php?id=".$_POST['playlistID'];
    
    header($location);
}

function removerMusica() {
    $db = new Database();
    $dao = new PlaylistDAO($db);
    
    $dao->removerMusicaDaPlaylist($_POST['playlistID'], $_POST['musicaID']);
    
    $location = "Location: ../views/editarplaylist.php?id=".$_POST['playlistID'];
    
    header($location);
}