<?php

namespace App\Core;


class BaseSQL
{
    private $pdo;

    public function __construct()
    {
        //Faudra intégrer le singleton
        try{
            //Connexion à la base de données
            $this->pdo = new \PDO( "mysql:host=database;dbname=mvcdocker2" ,"root" , "password" );
        }catch(\Exception $e){
            die("Erreur SQL".$e->getMessage());
        }

    }

    protected function save()
    {
        echo "save";
    }

}