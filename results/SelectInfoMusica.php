<?php

require_once '../config/Database.php';

$db = new Database();

$cod = $_SESSION['use_cod'];
$nome = $_GET['id'];

$sql = "select mus_nome, art_nome, mus_tipo, mus_capo, mus_idioma, mus_instrumento from musicas inner join artistas on mus_art_cod = art_cod where mus_use_cod = '".$cod."' and mus_nome='.$nome.' order by mus_nome";

$stmt = $db->getConnection()->query($sql);

if ($stmt->rowCount() > 0) {
    $result = $stmt->fetch();
    
    echo '<img src="" height="" width=""/>Nome: '.$result['mus_nome'].'<br/>';
    echo '<img src="../assets/images/artist-icon.png" height="32" width=32/> Artista: '.$result['art_nome'].'<br/>';
    echo '<img src="../assets/images/type-icon.png" height=32 width="32"/> Tipo: '.$result['mus_tipo'].'<br/>';
    echo '<img src="../assets/images/capo-icon.png" height="32" width="32"/> Capo: '.$result['mus_capo'].'<br/>';
    echo '<img src="../assets/images/language-icon.png" height="32" width="32"/> Idioma: '.$result['mus_idioma'].'<br/>';
    echo '<img src="../assets/images/instrument-icon.png" height="32" width="32"/> Instrumento: '.$result['mus_idioma'].'<br/>';
}

