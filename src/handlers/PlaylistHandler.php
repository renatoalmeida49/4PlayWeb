<?php
namespace src\handlers;

use src\models\Playlist;

class PlaylistHandler {

    public static function addPlaylist($add) {
        Playlist::insert([
            'idUser' => $add['idUser'],
            'name' => $add['name'],
            'descricao' => $add['descricao']
        ])->execute();

        return true;
    }

    public static function getPlaylists($id) {
        $playlistList = Playlist::select()
                ->where('idUser', $id)
        ->get();

        $posts = self::_postListObject($playlistList);

        return $posts;
    }

    public static function getPlaylist($id) {
        $playlist = Playlist::select()
                ->where('id', $id)
        ->get();

        $result = self::_postListObject($playlist);

        return $result;
    }

    public static function _postListObject($playlistList) {
        $feed = [];

        foreach($playlistList as $playlist) {
            $newPlaylist = new Playlist();

            $newPlaylist->id = $playlist['id'];
            $newPlaylist->idUser = $playlist['idUser'];
            $newPlaylist->name = $playlist['name'];
            $newPlaylist->descricao = $playlist['descricao'];

            $feed[] = $newPlaylist;
        }

        return $feed;
    }
}