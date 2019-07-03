<?php
namespace acme\App;
 
 class User{

	protected $email;
	protected $password;
	protected $isAdmin =false;
	protected $fillable = array('email', 'password');
    protected $accessible = array('email', 'password');

	public function __construct( Array $params = array() ){
		//class configuration
		if(count($params)){
			foreach ($params as $key => $value) {
			$this->$key = $value;
			}
		}
	}
	public function __set($name , $value){
		//it is used to set inaccessible property for an boject
		if(! in_array($name , $this->fillable) ){
			return false;
		}
		if( isset($this->$name) ){
			$this->$name = $value;
		}
		
	}

	public function __get($name){
		//its called when we try to get an inaccessible property in an object
		if(! in_array($name , $this->accessible) ){
			return NULL;
		}
		return isset( $this->$name )  ? $this->$name : NULL;
	}

	public function __toString(){
		$data = array();
		foreach($this->accessible as $key){
			$data[$key] = $this->$key;
		}
		return json_encode($data);
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
