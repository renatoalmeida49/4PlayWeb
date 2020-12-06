<?php
namespace src\handlers;

use src\models\PlaylistMusic;
use src\models\Music;
use \src\Config;

class PlaylistMusicHandler {
    public static function add($idplaylist, $idmusic) {

        // ------------ TODO
        // 1 - Need to check if the music is already in the playlist


        PlaylistMusic::insert([
            'id_music' => $idmusic,
            'id_playlist' => $idplaylist
        ])->execute();
    }

    public static function getMusics($id) {

        $musicList = PlaylistMusic::select()
                ->join('musics', 'id_music', '=', 'musics.id')
            ->get();
        
        
        $musics = self::_postListObject($musicList);

        return $musics;
    }

    public static function _postListObject($musicList) {
        $feed = [];

        foreach($musicList as $musicItem) {
            $newMusic = new Music();

            $newMusic->id = $musicItem['id'];
            $newMusic->idUser = $musicItem['idUser'];
            $newMusic->nome = $musicItem['nome'];
            $newMusic->artista = $musicItem['artista'];
            $newMusic->capotraste = $musicItem['capotraste'];
            $newMusic->instrumento = $musicItem['instrumento'];

            $feed[] = $newMusic;
        }

        return $feed;
    }
}