<?php

namespace App\Controller;

use App\Core\CleanWords as Clean;
use App\Core\View;

class User{

    public function login()
    {
        $view = new View("Login");
        $view->assign("titleSeo","Se connecter au site");
    }

    public function logout()
    {
        echo "Se deco";
    }

    public function register()
    {
        $view = new View("register");
    }

}