<?php

namespace app\controllers;

use app\models\Auth;
use app\models\User;
use app\core\Request;

class AuthController extends BaseController
{

    public function showLogin()
    {
        return $this->render('auth/login');
    }

    public function login(Request $request)
    {
        $data = $request->getBody();

        if (Auth::login($data['username'], $data['password'])) {
            return $this->redirect("/home");
        } else {
            return "username or password is incorrect";
        }
    }

    public function showRegister()
    {
        return $this->render('auth/register');
    }

    public function register(Request $request)
    {
        $data = $request->getBody();
        $id = User::register($data);

        return $id;
    }
}