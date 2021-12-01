<?php

namespace App\Core;

class View
{
    private $view;

    public function __construct($view)
    {
        $this->setView($view);
    }

    public function setView($view){
        $this->view = strtolower($view);
    }

    public function __toString():string
    {
        return "Ceci est la classe View";
    }


    public function __destruct()
    {
        include "View/".$this->view.".view.php";
    }

}