<?php

namespace App\Controller;

use App\Core\BaseSQL;
use App\Core\View;
use App\Model\User as UserModel;

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

        $user = new UserModel();
        $user->setEmail("y.SKRZYPczyk@gmail.COM    ");
        $user->setFirstname("YVes");
        $user->setLastname("skrzypczyk");
        $user->setPassword("Test1234");

        $user->save();

        $view = new View("register");
    }

}