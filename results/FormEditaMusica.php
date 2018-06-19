<?php

require_once '../config/Database.php';

function getArray(){
    $db = new Database();

    $cod = $_GET['id'];

    $sql = "select mus_cod, mus_nome, art_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento, mus_letra from musicas inner join artistas on mus_art_cod = art_cod where mus_cod='$cod'";

    $stmt = $db->getConnection()->query($sql);
    
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch();
    
        return $result;
        
    } else {
        echo 'Não consigo ler nada.';
    }
}

function criaForm($nome, $artista, $tipo, $capo, $idioma, $instrumento, $letra){
    
}

