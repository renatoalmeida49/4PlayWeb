<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@index');
$router->post('/login', 'LoginController@singIn');
$router->post('/login/singUp', 'LoginController@singUp');

$router->get('/suasMusicas', 'SuasMusicasController@index');
$router->post('/suasMusicas', 'SuasMusicasController@add');
$router->get('/suasMusicas/editar/{id}', 'SuasMusicasController@editar');
$router->get('/suasMusicas/excluir/{id}', 'SuasMusicasController@excluir');

$router->get('/suasMusicas/{id}', 'SuasMusicasController@music');

$router->get('/playlists', 'PlaylistsController@index');
$router->post('/playlists', 'PlaylistsController@add');
$router->get('/playlist/{id}', 'PlaylistsController@playlist');

$router->get('/settings', 'SettingsController@index');
$router->post('/settings/action', 'SettingsController@action');

$router->get('/sair', 'LoginController@logout');