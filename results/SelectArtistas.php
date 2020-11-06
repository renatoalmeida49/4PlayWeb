<meta charset="utf-8"/>
<?php

require_once '../config/Database.php';

function criaSelect(){
    $db = new Database();
    $cod = $_SESSION['use_cod'];
    
    $sql = "select art_nome from artistas where art_use_cod=? order by art_nome";

    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bindParam(1, $cod);
    $stmt->execute();

    while ($row = $stmt->fetch()){
        echo "<option value='{$row['art_nome']}'>{$row['art_nome']}</option>";
    }
}

function selectEdicao($resultado) {
    $db = new Database();
    $cod = $_SESSION['use_cod'];
    
    $sql = "select art_nome from artistas where art_use_cod=?";

    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bindParam(1, $cod);
    $stmt->execute();

    while ($row = $stmt->fetch()){
        if ($resultado['art_nome'] == $row['art_nome']){
            echo "<option value='{$row['art_nome']}' selected>{$row['art_nome']}</option>";
        } else {
            echo "<option value='{$row['art_nome']}'>{$row['art_nome']}</option>";
        }
    }

}

?>