<?php


class User
{
	private $id = null;
	private $firstname;
	private $lastname; 
	private $email;
	private $pwd;
	private $createdAt;
	private $updatedAt = null;

	//Method magique
	public function __construct($email, $pwd )
	{
		$this->setEmail($email);
		$this->setPwd($pwd);
		$this->setCreatedAt();
	}


	//Setters  
	public function setFirstname(string $firstname): void
	{
		$firstname = ucwords(strtolower(trim($firstname)));
		$this->firstname = $firstname;
	}
	public function setLastname(string $lastname): void
	{
		$lastname = strtoupper(trim($lastname));
		$this->lastname = $lastname;
	}

	public function setEmail(string $email): void
	{
		$email = strtolower(trim($email));
		$this->email = $email;
	}

	public function setPwd(string $pwd): void
	{
		$pwd = password_hash($pwd, PASSWORD_DEFAULT);
		$this->pwd = $pwd;

	}

	public function setCreatedAt(): void
	{
		$this->createdAt = time();
	}

	public function setUpdatedAt(): void
	{
		$this->updatedAt = time();
	}

	//GETTERS
	public function getFirstname(): ?string
	{
		return $this->firstname;
	}
	public function getLastname(): ?string
	{
		return $this->lastname;
	}
	public function getEmail(): ?string
	{
		return $this->email;
	}
	public function getPwd(): ?string
	{
		return $this->pwd;
	}

	public function getCreatedAt(): ?int
	{
		return $this->createdAt;
	}


	public function getUpdatedAt(): ?int
	{
		return $this->updatedAt;
	}

}


$user = new User("y.skrzypczyk@gmail.com", "Test1234");

/*
$user->firstname = "   yVEs";
$user->lastname = "skrzyPCZYK";
$user->email = "y.skrzypczyk@gmail.com";
$user->pwd = "Test1234";
// time() -> nb de secondes depuis le 1er Jan 1970 -> timestamp
$user->createdAt = time();
*/

$user->setFirstname("   yVEs");
$user->setLastname("skrzyPCZYK");
//$user->setEmail("y.skrzypczyk@gmail.com");
//$user->setPwd("Test1234");

echo "<pre>";
print_r($user);	


//Bonjour Yves SKRZYPCZYK

echo "Bonjour ".$user->getFirstname(). " " . $user->getLastname();






