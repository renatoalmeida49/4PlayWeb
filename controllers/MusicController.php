<?php

require_once '../config/DataBase.php';
require_once '../models/Musica.php';
require_once '../models/MusicaDAO.php';

switch ($_POST['musicControl']) {
    case 'Adicionar':
        adicionar();
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
    $musica->setMus_art_cod(2);
    $musica->setMus_tipo($_POST['tipo']);
    $musica->setMus_capo($_POST['capotraste']);
    $musica->setMus_instrumento($_POST['instrumento']);
    $musica->setMus_idioma($_POST['idioma']);
    $musica->setMus_letra($_POST['letra']);
    
    $dao->adicionar($musica);
    
    header("Location: ../views/suasmusicas.php");
}