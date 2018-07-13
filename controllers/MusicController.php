<?php
session_start();

require_once '../config/DataBase.php';
require_once '../models/Musica.php';
require_once '../models/MusicaDAO.php';

switch ($_POST['musicControl']) {
    case 'Adicionar':
        adicionar();
        break;
    case 'Editar':
        editar();
        break;
    case 'Excluir':
        excluir();
        break;
    default:
        header("Location: ../views/suasmusicas.php");
}

function adicionar() {
    $db = new Database();
    $dao = new MusicaDAO($db);
    
    $musica = new Musica();
    
    $musica->setMus_use_cod($_SESSION['use_cod']);
    $musica->setMus_nome($_POST['nome']);
    $musica->setMus_art_cod($_POST['artista']);
    $musica->setMus_tipo($_POST['tipo']);
    $musica->setMus_capo($_POST['capotraste']);
    $musica->setMus_instrumento($_POST['instrumento']);
    $musica->setMus_idioma($_POST['idioma']);
    $musica->setMus_letra($_POST['letra']);
    
    if ($dao->adicionar($musica)) {
        header("Location: ../views/suasmusicas.php");
    } else {
        echo 'Falha ao adicionar música.';
    }
}

function editar() {
    $db = new Database();
    $dao = new MusicaDAO($db);
    
    $musica = new Musica();
    
    $musica->setMus_cod($_POST['cod']);
    $musica->setMus_use_cod($_SESSION['use_cod']);
    $musica->setMus_nome($_POST['nome']);
    $musica->setMus_art_cod($_POST['artista']);
    $musica->setMus_tipo($_POST['tipo']);
    $musica->setMus_capo($_POST['capotraste']);
    $musica->setMus_instrumento($_POST['instrumento']);
    $musica->setMus_idioma($_POST['idioma']);
    $musica->setMus_letra($_POST['letra']);
    
    if ($dao->editar($musica)) {
        header("Location: ../views/suasMusicas.php");
    } else {
        echo 'Falha ao editar música.';
    }
}

function excluir() {
    $db = new Database();
    $dao = new MusicaDAO($db);
    
    $cod = $_POST['cod'];
    
    $dao->excluir($cod);
    
    header("Location: ../views/suasMusicas.php");
}