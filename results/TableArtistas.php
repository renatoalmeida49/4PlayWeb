<?php

require_once '../config/Database.php';

function tableSeusArtistas() {
    $db = new Database();

    $cod = $_SESSION['use_cod'];

    $sql = "select * from artistas where art_use_cod=?";

    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bindParam(1, $cod);
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td><a href='editarArtista.php?id=".$row['art_cod']."'>".$row['art_nome']."</a></td>";
        echo "<td>".$row['art_estilo']."</td>";
        echo "</tr>";
    }
}

