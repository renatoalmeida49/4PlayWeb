<?php

require_once '../config/Database.php';

$db = new Database();

$cod = $_SESSION['use_cod'];

$sql = "select * from artistas where art_use_cod='".$cod."'";

$stmt = $db->getConnection()->query($sql);

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>'.$row['art_nome'].'</td>';
    echo '<td>'.$row['art_estilo'].'</td>';
    echo '</tr>';
}

