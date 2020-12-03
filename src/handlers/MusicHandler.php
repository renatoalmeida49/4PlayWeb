<?php
namespace src\handlers;

use src\models\Music;

class MusicHandler {

    public static function addMusic($add) {
        Music::insert([
            'idUser' => $add['idUser'],
            'nome' => $add['nome'],
            'artista' => $add['artista'],
            'capotraste' => $add['capotraste'],
            'instrumento' => $add['instrumento'],
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
            $newMusic->capotraste = $musicItem['capotraste'];
            $newMusic->instrumento = $musicItem['instrumento'];

            $feed[] = $newMusic;
        }

        return $feed;
    }

    public static function getMusic($id) {
       $result = Music::select()
            ->where('id', $id)
        ->get();

        if(count($result) > 0) {
            $music = new Music();

            $music->id = $result[0]['id'];
            $music->idUser = $result[0]['idUser'];
            $music->nome = $result[0]['nome'];
            $music->artista = $result[0]['artista'];
            $music->capotraste = $result[0]['capotraste'];
            $music->instrumento = $result[0]['instrumento'];
            
            return $music;
        } else {
            return $id;
        }
    }

    public static function verifyCredentials($idMusic, $idUser) {
        $result = Music::select()
            ->where('id', $idMusic)
            ->where('idUser', $idUser)
        ->get();

        if(count($result) > 0) {
            return true;
        }

        return false;
    }

    public static function deleteMusic($id) {
        Music::delete()
            ->where('id', $id)
        ->execute();
    }

    public static function updateMusic($update) {
        $result = Music::update()
                    ->set('nome', $update['nome'])
                    ->set('artista', $update['artista'])
                    ->set('capotraste', $update['capotraste'])
                    ->set('instrumento', $update['instrumento'])
                    ->where('id', $update['id'])
                ->execute();
    }
}