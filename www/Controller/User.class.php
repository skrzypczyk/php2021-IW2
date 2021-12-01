<?php

namespace App\Controller;

use App\Core\CleanWords as Clean;
use App\Core\View;

class User{

    public function login()
    {
        $view = new View("Login");
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