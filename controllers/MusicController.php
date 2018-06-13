<?php

require_once '../config/DataBase.php';
require_once '../models/Musica.php';
require_once '../models/MusicaDAO.php';

switch ($_POST['musicControl']) {
    case 'Adicionar':
        adicionar();
        break;
    default:
        echo "É isso aí";
}
