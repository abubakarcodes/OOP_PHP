<?php
namespace acme\App;
 
abstract class User {
 	use \acme\App\Traits\Curlable;
 	use \acme\App\Traits\Accessible;
 	/**
 	 * [$facebookId description]
 	 * @var string
 	 */
 	protected $facebookId;
	protected $email;
	protected $password;
	protected $isAdmin = false;


	public function __construct( Array $params = array() ){
		$this->fillable[] = 'email';
		$this->fillable[] = 'password';
		$this->fillable[] = 'facebookId';
		$this->accessible[] = 'email';
		$this->accessible[] = 'password';
		$this->accessible[] = 'facebookId';
		//class configuration
		if(count($params)){
			foreach ($params as $key => $value) {
			$this->$key = $value;
			}
		}
	}


	public function getFacebookData() {
		$url = 'https://graph.facebook.com/' . $this->facebookId;
		return json_decode( $this->curl($url) , true);
	}


	public function login(){
		return "logging in a user";
	}


	public function logout(){
		return "loging out";
	}


	public function setPassword( $string ){

		$this->password = $string;
		return $this;
	}


	public function getPassword(){
		return $this->password;
	}


	public function setEmail ( $string ){
		$this->email = $string;
		return $this;
	}


	public function getEmail(){
		 return $this->email;
	}

}
