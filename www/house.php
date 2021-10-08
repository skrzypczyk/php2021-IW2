<?php

/*

	Plan d'une maison -> Class House (Pascal Case)
	-> murs
	-> toit
	-> porte
	-> fondation
	-> fenetre

*/

class House {

	// variables -> Attribut -> Propriete
	// Propriete de la class
	// Attribut de l'objet
	public $wall = 4;
	public $roof = 1;
	public $door = 1;
	public $fundation = 1;
	public $window = 1;

	//function => une methode
	function addRoom(): void
	{
		$this->wall +=3;
		$this->roof++;
		$this->door++;
		$this->fundation++;
		$this->window++;
	}

	function addStage(): void
	{

	}


}



// Création d'une maison à partir du plan House
// Création d'une instance de la class House
// L'instance d'une class c'est ce que l'on appel un objet
$myHouse = new House();

//print_r($myHouse);
//var_dump($myHouse);

//House Object ( [wall] => 4 [roof] => 1 [door] => 1 [fundation] => 1 [window] => 1 )

$myHouse->addRoom();
$myHouse->addRoom();
$myHouse->addRoom();

print_r($myHouse);









