<?php 
namespace Acme\App\Traits;
trait Accessible {

	protected $fillable = array();
	protected $accessible = array();

 	public function __set($name , $value){
		//it is used to set inaccessible property for an boject
		if(count($this->fillable) && ! in_array($name , $this->fillable) ){
			return false;
		}
		if( property_exists($this , $name) ){
			$this->$name = $value;
		}
		
	}

	public function __get( $name ){
		//its called when we try to get an inaccessible property in an object
		if(! in_array( $name , $this->accessible ) ){
			return NULL;
		}
		return property_exists( $this , $name )  ? $this->$name : NULL;
	}

	public function __toString(){
		$data = array();
		foreach($this->accessible as $key){
			$data[$key] = $this->$key;
		}
		return json_encode($data);
	}

}


 ?>