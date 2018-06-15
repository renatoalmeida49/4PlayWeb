<?php

require_once '../config/Database.php';

$db = new Database();

$cod = $_SESSION['use_cod'];

$sql = "select * from playlists where pla_use_cod='".$cod."' order by pla_nome";

$stmt = $db->getConnection()->query($sql);

while ($row = $stmt->fetch()){
    echo '<tr>';
    echo '<td>'.$row['pla_nome'].'</td>';
    echo '<td>'.$row['pla_descricao'].'</td>';
    echo '</tr>';
}



