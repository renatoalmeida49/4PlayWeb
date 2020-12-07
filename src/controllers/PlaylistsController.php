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

	public function excluir($attr = []) {
		$id = $attr['id'];

		PlaylistHandler::excluir($id);

		$this->index();
	}

	public function edit() {
		$update = array();

		$update['id'] = filter_input(INPUT_POST, 'id');
		$update['name'] = filter_input(INPUT_POST, 'name');
		$update['descricao'] = filter_input(INPUT_POST, 'descricao');

		PlaylistHandler::update($update);

		$this->redirect('/playlist/'.$update['id']);
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

		// TODO
		// 1 - Let the user know if the music was added or not to the playlist.
		// (The music will be added if it's already in the playlist)

		PlaylistMusicHandler::add($idPlaylist, $idMusic);

		$this->redirect('/suasMusicas');
	}

	public function removeMusic($attr = []) {
		$idPlaylist = $attr['id'];
		$idMusic = $attr['p1'];

		// TODO 
		// The implementation of the function itself

		PlaylistMusicHandler::removeMusic($idPlaylist, $idMusic);

		$this->redirect('/playlist/'.$idPlaylist);
	}

}