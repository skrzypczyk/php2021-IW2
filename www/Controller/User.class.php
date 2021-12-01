<?php

namespace App\Controller;

use App\Core\CleanWords as Clean;

class User{

    public function login()
    {
        echo "S'inscrire";
    }

    public function logout()
    {
        echo "Se deco";
    }

    public function register()
    {
        //On part du principe que l'on a un formulaire d'inscription
        //On recoit de la part de l'internaute son nom

        $lastname = " SKryPCzyk   ";
        $lastname = Clean::lastname($lastname);
        echo $lastname;

        echo "S'inscrire";
    }

}