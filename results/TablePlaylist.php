<?php

require_once '../config/Database.php';

//tabela em 'playlists.php'
function tablePlaylists(){
    $db = new Database();

    $cod = $_SESSION['use_cod'];

    $sql = "select * from playlists where pla_use_cod='".$cod."' order by pla_nome";

    $stmt = $db->getConnection()->query($sql);

    while ($row = $stmt->fetch()){
        echo '<tr onclick=\'preencheTabelaMusicasPlaylists("'.$row['pla_cod'].'")\'>';
        echo '<td>'.$row['pla_nome'].'</td>';
        echo '<td>'.$row['pla_descricao'].'</td>';
        echo '</tr>';
    }
}

//tabela em 'editarPlaylist.php' das músicas da playlist
function selecionaMusicaPlaylist($cod) {
    $db = new Database();
    
    $query = "select mus_cod, mus_nome, art_nome, mus_instrumento, mus_idioma from musicasPlaylists\n".
                    "inner join musicas on mpl_mus_cod = mus_cod \n".
                    "inner join artistas on mus_art_cod = art_cod\n".
                    "where mpl_pla_cod='".$cod."' order by mus_nome";
    
    $stmt = $db->getConnection()->query($query);
    //$stmt->bindParam(1, $cod);
    
    //$result = $stmt->execute();
    
    while ($row = $stmt->fetch()){
        echo '<tr class=\'teste\' id="'.$row['mus_cod'].'" onclick=\'pegaId('.$row['mus_cod'].')\'>';
        echo '<td>'.$row['mus_nome'].'</td>';
        echo '<td>'.$row['art_nome'].'</td>';
        echo '<td>'.$row['mus_instrumento'].'</td>';
        echo '<td>'.$row['mus_idioma'].'</td>';
        echo '</tr>';
    }
}

//array das músicas do usuário na playlist em 'editarPlaylist.php'
function suasMusicasForaDaPlaylist($codPlaylist){
    $db = new Database();
    $cod = $_SESSION['use_cod'];
    
    $nomesMusicas = array();
    
    // AQUI EU TENHO TODAS AS MÚSICAS DA PLAYLIST
    $sql = "select mus_nome from musicasPlaylists inner join musicas on mpl_mus_cod = mus_cod where mpl_pla_cod='".$codPlaylist."'";
    
    $stmt = $db->getConnection()->query($sql);
    //$stmt->bindParam(1, $codPlaylist);
    
    //$result = $stmt->execute();
    
    try {
        while ($row = $stmt->fetch()){
            $nomesMusicas[] = $row['mus_nome'];
        }
    } catch (Exception $ex) {
        echo 'Nenhum registro retornado.';
    }
    
    
    return $nomesMusicas;
    
}

//preenche tabelas só com as músicas do usuário
//que não estão na playlist
function verificaMusicas($codPlaylist){
    $db = new Database();
    $cod = $_SESSION['use_cod'];
    
    $nomesMusicas = array();
    $nomesMusicas = suasMusicasForaDaPlaylist($codPlaylist);
    
    $sql = "select mus_cod, mus_nome, art_nome, mus_instrumento, mus_idioma from musicas\n".
                    "inner join artistas on mus_art_cod = art_cod\n".
                    "where mus_use_cod='".$cod."' order by mus_nome";
    
    $stmt = $db->getConnection()->query($sql);
    //$stmt->bindParam(1, $cod);
    
    //$result = $stmt->execute();
    
    while ($row = $stmt->fetch()) {
        $verificador = $row['mus_nome'];
        
        if (!(in_array($verificador, $nomesMusicas))){
            
            echo '<tr class=\'teste\' id="'.$row['mus_cod'].'" onclick=\'pegaId('.$row['mus_cod'].')\'>';
            echo '<td>'.$row['mus_nome'].'</td>';
            echo '<td>'.$row['art_nome'].'</td>';
            echo '<td>'.$row['mus_instrumento'].'</td>';
            echo '<td>'.$row['mus_idioma'].'</td>';
            echo '</tr>';
        }
    }
    
}

