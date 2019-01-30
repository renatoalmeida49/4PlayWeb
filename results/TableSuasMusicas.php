<?php

require_once '../config/Database.php';

function suasMusicas(){
    $db = new Database();

    $cod = $_SESSION['use_cod'];

    $sql = "select mus_cod, mus_nome, art_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento, mus_letra from musicas inner join artistas on mus_art_cod = art_cod where mus_use_cod =? order by mus_nome";

    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bindParam(1, $cod);
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo '<tr id="'.$row['mus_cod'].'" onclick=\'preencheDados("'.$row['mus_nome'].'", "'.$row['art_nome'].'", "'.$row['mus_tipo'].'", "'.$row['mus_capo'].'", "'.$row['mus_idioma'].'", "'.$row['mus_instrumento'].'", "'.$row['mus_cod'].'")\'>';
        echo '<td>'.$row['mus_nome'].'</td>';
        echo '<td>'.$row['art_nome'].'</td>';
        echo '<td>'.$row['mus_tipo'].'</td>';
        echo '<td>'.$row['mus_capo'].'</td>';
        echo '<td>'.$row['mus_idioma'].'</td>';
        echo '<td>'.$row['mus_instrumento'].'</td>';
        echo '</tr>';
    }
}
