<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;
use src\handlers\MusicHandler;
use src\handlers\PlaylistHandler;

class AjaxController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            header("Content-Type: application/json");
            echo json_encode(['error' => 'Usuário não logado']);
            exit;
        }
    }

    public function music() {
        $id = filter_input(INPUT_GET, 'id');

        $array = ['error' => ''];

        $music = MusicHandler::getMusic($id);

        $array['id'] = $id;
        $array['nome'] = $music->nome;
        $array['artista'] = $music->artista;
        $array['instrumento'] = $music->instrumento;
        $array['capotraste'] = $music->capotraste;

        header("Content-Type: application/json");
        echo json_encode($array);
        exit;
    }

    public function playlists() {
        $playlists = PlaylistHandler::getPlaylists($this->loggedUser->id);

        header("Content-Type: application/json");
        echo json_encode($playlists);
        exit;
    }
}