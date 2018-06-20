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
    
    $query = "select mus_nome, art_nome, mus_instrumento, mus_idioma from musicasPlaylist".
                    "inner join musicas on mpl_mus_cod = mus_cod \n".
                    "inner join artistas on mus_art_cod = art_cod\n".
                    "where mpl_pla_cod='?' order by mus_nome";
    
    $stmt = $db->getConnection()->prepare($query);
    $stmt->bindParam(1, $cod);
    
    $result = $stmt->execute();
    
    while ($row = $result->fetch()){
        echo '<tr>';
        echo '<td>'.$row['mus_nome'].'</td>';
        echo '<td>'.$row['art_nome'].'</td>';
        echo '<td>'.$row['mus_instrumento'].'</td>';
        echo '<td>'.$row['mus_idioma'].'</td>';
        echo '</tr>';
    }
}

//tabela das músicas do usuário sem as músicas já dá playlist em 'editarPlaylist.php'
function suasMusicasForaDaPlaylist($codPlaylist){
    $db = new Database();
    $cod = $_SESSION['use_cod'];
    
    
    // AQUI EU TENHO TODAS AS MÚSICAS DA PLAYLIST
    $query = "select mus_nome, art_nome, mus_instrumento, mus_idioma from musicasPlaylist".
                    "inner join musicas on mpl_mus_cod = mus_cod \n".
                    "inner join artistas on mus_art_cod = art_cod\n".
                    "where mpl_pla_cod='?' order by mus_nome";
    
    $stmt = $db->getConnection()->prepare($query);
    $stmt->bindParam(1, $codPlaylist);
    
    $result = $stmt->execute();
    
    $nomesDasMusicas = array();
    
    if ($result->rowCount() > 0) {
         while ($row = $result->fetch()){
            $nomesDasMusicas[] = $row['mus_nome'];
        }
    
        var_dump($nomesDasMusicas);
    } else {
        echo 'Nenhum registro encontrado.';
    }
    
   
    /////////////////////////////////////////////////////////////
    
    // AGORA EU TENHO TODAS AS MUSICAS DO USUÁRIO
    
    /*
    $query2 = "select mus_nome, art_nome, mus_instrumento, mus_idioma from musicas inner join artistas on mus_art_cod = art_cod where mus_use_cod = '?' order by mus_nome";
    
    $stmt2 = $db->getConnection()->prepare($query2);
    $stmt2->bindParam(1, $cod);
    
    $result2 = $stmt2->execute();
    
    $arrayDeResultado = array();
    
    while ($row2 = $result2->fetch()) {
        if (!(in_array($row2['mus_nome'], $nomesDasMusicas))){
            $arrayDeResultado[] = $row2;
        }
    }*/
    
}

