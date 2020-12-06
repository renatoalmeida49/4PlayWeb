<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;
use src\handlers\PlaylistHandler;
use src\handlers\PlaylistMusicHandler;

class PlaylistsController extends Controller {

	private $loggedUser;

	public function __construct() {
		$this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
	}

	public function index() {
		$dados = array();

		$playlists = PlaylistHandler::getPlaylists($this->loggedUser->id);

		$this->render('playlists', [
			'loggedUser' => $this->loggedUser,
			'playlists' => $playlists
		]);
	}

	public function add() {
		$add = array();

		$add['idUser'] = $this->loggedUser->id;
		$add['name'] = filter_input(INPUT_POST, 'name');
		$add['descricao'] = filter_input(INPUT_POST, 'descricao');

		PlaylistHandler::addPlaylist($add);

		$this->redirect('/playlists');
	}

	public function playlist($attr = []) {
		$id = $attr['id'];

		$playlist = PlaylistHandler::getPlaylist($id);
		$musics = PlaylistMusicHandler::getMusics($id);

		$this->render('playlist', [
			'playlist' => $playlist,
			'musics' => $musics
			]);
	}

	public function addMusic($attr = []) {
		$idPlaylist = $attr['id'];
		$idMusic = $attr['p1'];

		PlaylistMusicHandler::add($idPlaylist, $idMusic);

		$this->redirect('/suasMusicas');
	}

}