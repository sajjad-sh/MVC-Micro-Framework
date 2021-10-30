<?php

namespace app\controllers;

class HomeController extends BaseController
{

    public function home() {
        $data = [
            'name' => "Sajjad Shahrabi"
        ];

        return $this->render('home', $data);
    }
}