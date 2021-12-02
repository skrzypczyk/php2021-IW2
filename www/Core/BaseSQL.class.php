<?php

namespace App\Core;


class BaseSQL
{
    private $pdo;
    private $table;

    public function __construct()
    {
        //Faudra intégrer le singleton
        try{
            //Connexion à la base de données
            $this->pdo = new \PDO( DBDRIVER.":host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME ,DBUSER , DBPWD );
        }catch(\Exception $e){
            die("Erreur SQL".$e->getMessage());
        }
        //Récupérer le nom de la table :
        // -> prefixe + nom de la classe enfant
        $classExploded = explode("\\",get_called_class());
        $this->table = DBPREFIXE.strtolower(end($classExploded));

    }

    protected function save()
    {
        "INSERT INTO ".$this->table." (firstname,lastname,email, password)
        VALUES (:firstname, :lastname,:email, :password)";
    }

}