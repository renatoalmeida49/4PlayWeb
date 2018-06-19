<meta charset="utf-8"/>
<?php

require_once '../config/Database.php';

$db = new Database();

$cod = $_SESSION['use_cod'];

$sql = "select art_nome from artistas where art_use_cod='$cod'";

$stmt = $db->getConnection()->query($sql);

echo "<select name='artista' id='artista'>";
while ($row = $stmt->fetch()){
    echo "<option value='{$row['art_nome']}'>{$row['art_nome']}</option>";
}
echo "</select>";

?>