<?php

require_once '../config/Database.php';

$db = new Database();

$cod = $_SESSION['use_cod'];

$sql = "select mus_nome, art_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento from musicas inner join artistas on mus_art_cod = art_cod where mus_use_cod = '".$cod."' order by mus_nome";

$stmt = $db->getConnection()->query($sql);

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>'.$row['mus_nome'].'</td>';
    echo '<td>'.$row['art_nome'].'</td>';
    echo '<td>'.$row['mus_tipo'].'</td>';
    echo '<td>'.$row['mus_capo'].'</td>';
    echo '<td>'.$row['mus_idioma'].'</td>';
    echo '<td>'.$row['mus_instrumento'].'</td>';
    echo '</tr>';
}