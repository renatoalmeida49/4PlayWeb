<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@index');
$router->post('/login', 'LoginController@singIn');
$router->post('/login/singUp', 'LoginController@singUp');

$router->get('/suasMusicas', 'SuasMusicasController@index');
$router->post('/suasMusicas', 'SuasMusicasController@add');
$router->post('/suasMusicas/editar', 'SuasMusicasController@editar');
$router->get('/suasMusicas/excluir/{id}', 'SuasMusicasController@excluir');

$router->get('/suasMusicas/{id}', 'SuasMusicasController@music');

$router->get('/playlist/{id}/remove/{p1}', 'PlaylistsController@removeMusic');
$router->get('/playlist/{id}/music/{p1}', 'PlaylistsController@addMusic');
$router->get('/playlist/excluir/{id}', 'PlaylistsController@excluir');
$router->get('/playlist/{id}', 'PlaylistsController@playlist');
$router->post('/playlists/editar', 'PlaylistsController@edit');
$router->get('/playlists', 'PlaylistsController@index');
$router->post('/playlists', 'PlaylistsController@add');


$router->get('/settings', 'SettingsController@index');
$router->post('/settings/action', 'SettingsController@action');

$router->get('/sair', 'LoginController@logout');

$router->get('/ajax/music/', 'AjaxController@music');
$router->get('/ajax/playlists/', 'AjaxController@playlists');