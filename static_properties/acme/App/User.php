<?php
namespace acme\App;
 
abstract class User{
	/**
	 * [$email description]
	 * @var string
	 */
	protected $email;
	/**
	 * [$password description]
	 * @var string
	 */
	protected $password;
	/**
	 * [$isAdmin description]
	 * @var boolean
	 */
	protected $isAdmin =false;
	/**
	 * [$fillable description]
	 * @var array
	 */
	protected $fillable = array('email', 'password');
    /**
     * [$accessible description]
     * @var array
     */
    protected $accessible = array('email', 'password');
    /**
     * [__construct description]
     * @param Array|array $params [description]
     */
	public function __construct( Array $params = array() ){
		//class configuration
		if(count($params)){
			foreach ($params as $key => $value) {
			$this->$key = $value;
			}
		}
	}
	/**
	 * [__set description]
	 * @param string $name  [description]
	 * @param string $value [description]
	 */
	public function __set($name , $value){
		//it is used to set inaccessible property for an boject
		if(! in_array($name , $this->fillable) ){
			return false;
		}
		if( isset($this->$name) ){
			$this->$name = $value;
		}
		
	}
	/**
	 * [__get description]
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public function __get($name){
		//its called when we try to get an inaccessible property in an object
		if(! in_array($name , $this->accessible) ){
			return NULL;
		}
		return isset( $this->$name )  ? $this->$name : NULL;
	}
 	/**
 	 * [__toString description]
 	 * @return string [description]
 	 */
	public function __toString(){
		$data = array();
		foreach($this->accessible as $key){
			$data[$key] = $this->$key;
		}
		return json_encode($data);
	}
	/**
	 * [login description]
	 * @return string [description]
	 */
	public function login(){
		return "logging in a user";
	}

	/**
	 * [logout description]
	 * @return string [description]
	 */
	public function logout(){
		return "loging out";
	}

	/**
	 * [setPassword description]
	 * @param [type] $string [description]
	 */
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
