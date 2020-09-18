<?php
namespace src\handlers;

use src\models\Music;

class MusicHandler {

    public static function addMusic($add) {
        Music::insert([
            'idUser' => $add['idUser'],
            'nome' => $add['nome'],
            'artista' => $add['artista'],
            'tipo' => $add['tipo'],
            'capotraste' => $add['capotraste'],
            'instrumento' => $add['instrumento'],
            'idioma'  => $add['idioma'],
            'letra' => $add['letra']
        ])->execute();

        return true;
    }

    public static function getMusics($id) {
        $musicList = Music::select()
                ->where('idUser', $id)
        ->get();

        $posts = self::_postListObject($musicList);

        return $posts;
    }

    public static function _postListObject($musicList) {
        $feed = [];

        foreach($musicList as $musicItem) {
            $newMusic = new Music();

            $newMusic->id = $musicItem['id'];
            $newMusic->idUser = $musicItem['idUser'];
            $newMusic->nome = $musicItem['nome'];
            $newMusic->artista = $musicItem['artista'];
            $newMusic->tipo = $musicItem['tipo'];
            $newMusic->capotraste = $musicItem['capotraste'];
            $newMusic->instrumento = $musicItem['instrumento'];
            $newMusic->idioma = $musicItem['idioma'];
            $newMusic->letra = $musicItem['letra'];

            $feed[] = $newMusic;
        }

        return $feed;
    }

}