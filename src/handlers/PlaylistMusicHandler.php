<?php
namespace src\handlers;

use src\models\PlaylistMusic;
use src\models\Music;
use \src\Config;

class PlaylistMusicHandler {
    // ADD A MUSIC TO THE PLAYLIST
    public static function add($idplaylist, $idmusic) {

        if(self::alreadyInPlaylist($idplaylist, $idmusic)) {
            return false;
        }

        PlaylistMusic::insert([
            'id_music' => $idmusic,
            'id_playlist' => $idplaylist
        ])->execute();

        return true;
    }

    // CHECKS IF THE MUSIC IS ALREADY IN THE PLAYLIST
    private function alreadyInPlaylist($idplaylist, $idmusic) {
        $result = PlaylistMusic::select()
            ->where('id_music', $idmusic)
            ->where('id_playlist', $idplaylist)
        ->one();

        return $result ? true : false;
    }

    public static function getMusics($id) {

        $musicList = PlaylistMusic::select()
                ->join('musics', 'id_music', '=', 'musics.id')
                ->where('id_playlist', $id)
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