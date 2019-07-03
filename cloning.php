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


# $wahab = $abubakar; //if i will use this way then the changing of one email also change the others email and the email will remain same for both user.


// inorder to use the copy of user we use a clone word with existing user and make it equal to the other user. as shown: it will help us to give different values to the new user.
$wahab = clone $abubakar;
var_dump($abubakar);
echo "<br>";
$wahab->setEmail('wahab@gamil.com');
$wahab->setPassword('123123123');
var_dump($wahab);

