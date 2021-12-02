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

        $columns  = get_object_vars($this);
        $varsToExclude = get_class_vars(get_class());
        $columns = array_diff_key($columns, $varsToExclude);
        $columns = array_filter($columns);


       if( !is_null($this->getId()) ){

       }else{
            $sql = "INSERT INTO ".$this->table." (".implode(",", array_keys($columns)).")
            VALUES (:".implode(",:", array_keys($columns)).")";
       }

        $queryPrepared = $this->pdo->prepare($sql);
        $queryPrepared->execute( $columns );



    }

}