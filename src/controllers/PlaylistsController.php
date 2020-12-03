<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;
use src\handlers\PlaylistHandler;
use src\handlers\MusicsPlaylist;

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

		$this->render('playlist', ['playlist' => $playlist]);
	}

	public function addMusic($atrr = []) {
		$idPlaylist = $attr['id'];
		$idMusic = $attr['idMusic'];

		MusicsPlaylist::add($idPlaylist, $idMusic);

		$this->redirect('/suasMusicas');
	}

}