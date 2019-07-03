<?php 
class User{
	const MINCHAR = 8;
	private $email;
	private $password;


	public function login(){
		return "logging in..";
	}


	public function logout(){
		return "loging out";
	}


	public function setPassword( $string ){

		if( $this->validatePassword( $string ) == false ){
			throw new Exception("password should be " . self::MINCHAR . " chracters long");
			
		}
		$this->password = hash('sha256', $string);
	}


	public function getPassword(){
		return $this->password;
	}


	public function setEmail ( $string ){
		if(! filter_var( $string , FILTER_VALIDATE_EMAIL ) ) {
			throw new Exception("Please Enter a valid email");
			
		} else {
			 $this->email = $string;
		}
	}


	public function getEmail(){
		 return $this->email;
	}



	private function validatePassword( $string ){
		return strlen($string) < self::MINCHAR  ? false : true;
			
		
	}
}
$abubakar = new User();
$abubakar->setEmail('abubakarprince56@gmail.com');
$abubakar->setPassword('123456788');
$abubakar->getPassword();
$abubakar->getEmail();
var_dump($abubakar);

