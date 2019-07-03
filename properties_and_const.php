<?php 
class User {
	const MINCHAR = 8;
	public $email;
	public $password;
	public function login(){
		return "logging in..";
	}
	public function logout(){
		return "loging out";
	}
	public function setPassword( $string )
	{
		// this is the way to use the const within the class
		if( strlen($string) < self::MINCHAR )
		{
			throw new Exception("password should be " . self::MINCHAR . " chracters long");
			
		}
		//this way we can use the method within the class

		$this->password = hash("sha256", $string);
	}
 	
}
$abubakar = new User();
$abubakar->email = "abubakarprince56@gmail.com";
$abubakar->setPassword('adffadfadas');
var_dump($abubakar);

// $awais = new User();
// $awais->email = "awaistheshah@gmail.com";
// $awais->password = "awaistheshah123";
// var_dump($awais);