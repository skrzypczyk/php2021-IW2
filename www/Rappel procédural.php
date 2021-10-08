<?php
	session_start();
?>	

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="description" content="">
</head>
<body>

	<?php

		// mon commentaire sur une ligne
		/*
			pls lignes
		*/

		//type : String integer float boolean null
		$firstname = "Yves";
		$firstname = 3;


		$age = 20;

		echo $age; //20
		$age = $age + 1;
		echo $age; //21
		echo $age+1; //22
		echo $age=$age+1; //22
		echo $age++; //22
		echo $age; //23
		echo ++$age; //24
		echo $age+=1; //25
		echo $age+1=$age; //Error


		$age = 20;
		// Afficher : Dans 1 an il aura 21 ans
		echo "Dans 1 an il aura ".($age+1)." ans";

		

		$age = 16;

		if($age > 18) 
			echo "Majeur";
		elseif($age == 18) 
			echo "Tout juste majeur";
		else
			echo "Mineur";
		

		$scope = "user"

		switch ($scope) {
			case 'admin':
				echo "Create";

			case 'author':
				echo "Update";
			
			default:
				echo "Read";
				break;
		}


		//Condition ternaire
		$age = 20;
		if( $age >= 18){
			echo "Majeur";
		}else {
			echo "Mineur";
		}

		// instruction (condition)?vrai:faux;
		echo ($age >= 18)?"Majeur":"Mineur";

		//Le null coalescent



	?>

	<?php 
	if(empty($_POST['email'])) {
		echo $_POST['email'];
	}else{
		echo "Votre email ...";
	}

	echo (empty($_POST['email']))?$_POST['email']:"Votre email ...";

	echo $_POST['email']??"Votre email ...";


	for($cpt=0;$cpt<10;++$cpt) {
		echo $cpt;
	}

	$cpt = 0;
	while($cpt<10){

		$cpt++;
	}


	$cpt = 0;
	do{
		$cpt++;
	}while($cpt<10);



	foreach ($array as $key=>$value) {
		
	}

	//$student = array();
	$student = ["BETTAN", "Alexandre", 13, 2, 3];
	//Affiche : Alexandre a une moyenne de 6/20
	echo $student[1]." a une moyenne de ".($student[2]+$student[3]+$student[4])/3."/20";


	$student = ["lastname"=>"Pierre", "firstname"=>"Michelle", 14];

	//Affiche : Prénom Nom a une moyenne de 14/20
	echo $student["firstname"]." ".$student["lastname"]." a une moyenne de ".$student[2]."/20";


	$student = [
					"lastname"=>"Pierre", 
					"firstname"=>["Michelle", "Claire"], 
					[12, 13, 2]
				];


	$myArray = [
					0=>[],
					1=>[
						0=>[
							0=>[
								[],
								[],
								2=>[
									0=>[
											0=>"test"
										]
								]
							],
							[
								[
									[]
								]
							]
						]
					]
				]; //4, 5, 3, 6

		echo $myArray[1][0][0][2][0][0];

		

		function helloWorld(string $params=""): ?void
		{


		}


		helloWorld();




		

		function helloYou(&$name): void
		{
			//global $firstname;
			$name = "Toto";
			echo $name;
		}

		$firstname = "Yves";
		helloYou($firstname);

		echo $firstname;


		$array = [];

		sort($array);




		function cleanAndCheckFirstname(&$firstname): bool
		{
			$firstname = trim($firstname);
			if( strlen($firstname)>2){
				$firstname = strtolower($firstname);
				$firstname = ucwords($firstname);
				return true;
			}

			return false;

		}

		$firstname = "   yvES  ";

		if(cleanAndCheckFirstname($firstname)){
			echo $firstname;	
		}else{
			echo "Error votre prénom doit faire plus de 2 caractères";
		}


		//Super globale
		// -> accessible partout dans le code
		// -> contient toujours un array
		// -> Déclarées et alimentées par le serveur PHP
		// -> $_MAJUSCULE
		// -> $_POST $_GET $_REQUEST $_SESSION $_SERVER $_COOKIE $_ENV  $_FILES


		
		$_GET["email"]

	?>

<form method="GET">
	<input type="email" name="email" value="<?php echo $_POST['email']??"Votre email ..."; ?>">
</form>


</body>
</html>



