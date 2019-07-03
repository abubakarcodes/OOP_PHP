<?php 
class User{
	const MINCHAR = 8;
	public $email='';
	public $password='';
	public function login(){
		return "logging in..";
	}
	public function logout(){
		return "loging out";
	}
	public function setPassword( $string ){

		if( strlen($string) < self::MINCHAR ){
			throw new Exception("password should be " . self::MINCHAR . " chracters long");
			
		}
	}
}
$abubakar = new User();
echo $abubakar->email = "abubakarprince56@gmail.com";
echo $abubakar->password = "1234";
echo $abubakar->login();
$abubakar->setPassword('123');
var_dump($abubakar);

$awais = new User();
$awais->email = "awaistheshah@gmail.com";
$awais->password = "awaistheshah123";
var_dump($awais);

 ?>