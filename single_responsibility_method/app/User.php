<?php 
class User{

	private $email;
	private $password;


	public function login(){
		return "logging in..";
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
