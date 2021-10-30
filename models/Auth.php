<?php

namespace app\models;

use app\models\User;
use app\utils\Cookie;
use app\core\Database;

class Auth
{

    public static function login(string $username, string $password)
    {
        $user = (new User())->findByUsername($username);
        //$user = (new User())->login($username, $password); TODO: P2

        if (is_bool($user))
            return false;

        if ($user->password == $password) {
            Cookie::set('username', $user->username);
            return true;
        }

        return false;
    }

    public static function register(array $inputs)
    {
        # code...
    }

    public static function user(): User|bool
    {
        if (self::check()) {
            $user = (new User())->findByUsername(Cookie::get('username'));
            unset($user->password);
            return $user;
        }
        
        return false;
    }

    public static function check() {
        return (bool)Cookie::get('username');
    }
}
