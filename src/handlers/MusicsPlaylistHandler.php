<?php
namespace src\handlers;

use src\models\MusicsPlaylist;

class MusicsPlaylistHandler {
    public static function add($idPlaylist, $idMusic) {
        MusicsPlaylist::insert([
            'id_music' => $idMusic,
            'id_playlist' => $idPlaylist
        ])->execute();
    }
}