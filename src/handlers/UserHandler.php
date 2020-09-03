<?php
namespace src\handlers;

use src\models\User;
use \src\models\UserRelation;
use \src\handlers\PostHandler;

class UserHandler {
    public static function checkLogin() {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();

            if (count($data) > 0) {

                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['name'];
                $loggedUser->login = $data['login'];
                
                return $loggedUser;
            }
        }

        return false;
    }

    public function verifyLogin($login, $password) {
        $user = User::select()->where('login', $login)->one();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $token = md5(time().rand(0,9999).time());

                User::update()
                    ->set('token', $token)
                    ->where('login', $login)
                ->execute();

                return $token;
            }
        }

        return false;
    }

    public function loginExists($login) {
        $user = User::select()->where('login', $login)->one();
        return $user ? true : false;
    }

    public function addUser($name, $login, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        User::insert([
            'name' => $name,
            'login' => $login,
            'password' => $hash,
            'token' => $token
        ])->execute();

        return $token;
    }
}