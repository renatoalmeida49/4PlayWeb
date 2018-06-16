<?php

require_once '../config/Database.php';

$db = new Database();

$cod = $_SESSION['use_cod'];

$sql = "select mus_nome, art_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento from musicas inner join artistas on mus_art_cod = art_cod where mus_use_cod = '".$cod."' order by mus_nome";

$stmt = $db->getConnection()->query($sql);

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td><a href="suasMusicas.php?id='.$row['mus_nome'].'">'.$row['mus_nome'].'</a></td>';
    echo '<td><a href="suasMusicas.php?id='.$row['mus_nome'].'">'.$row['art_nome'].'</a></td>';
    echo '<td><a href="suasMusicas.php?id='.$row['mus_nome'].'">'.$row['mus_tipo'].'</a></td>';
    echo '<td><a href="suasMusicas.php?id='.$row['mus_nome'].'">'.$row['mus_capo'].'</a></td>';
    echo '<td><a href="suasMusicas.php?id='.$row['mus_nome'].'">'.$row['mus_idioma'].'</a></td>';
    echo '<td><a href="suasMusicas.php?id='.$row['mus_nome'].'">'.$row['mus_instrumento'].'</a></td>';
    echo '</tr>';
}
