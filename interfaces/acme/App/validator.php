<?php 
namespace acme\App;
class Validator
{
	private $errors = array();

	public function validate(Array $data, Array $rules)
	{
		$valid = true;
		foreach ($rules as $item => $ruleset) {
			$ruleset = explode('|', $ruleset);
			foreach ($ruleset as $rule) {
				$pos = strpos($rule ,':');
				if( $pos !== false ) {
					$parameter = substr($rule, $pos + 1);
					$rule = substr( $rule , 0, $pos);
				}else{
					$parameter = '';
				}
			//validateEmail($item , $value, $param)
			$methodName = 'validate' . ucfirst($rule);
			$value = isset($data[$item]) ? $data[$item] : NULL;
			if(method_exists($this, $methodName) ){
				$this->$methodName($item, $value, $parameter) OR $valid = false;
			}
			}
		}

		return $valid;

	}

	private function validateRequired($item , $value, $parameter){
			if($value === '' || $value === NULL){
				$this->errors[$item][] = 'The ' . $item . ' field is required';
				return false;
			}
				return true;
		
	}
	private function validateEmail($item , $value, $parameter){
		if(! filter_var( $value , FILTER_VALIDATE_EMAIL ) ){
				$this->errors[$item][] = 'The ' . $item . ' field should be a valid email address';
				return false;
			}
				return true;
	}
	private function validateMin($item , $value, $parameter){
		if( strlen($value) >= $parameter == false ) {
				$this->errors[$item][] = 'The ' . $item . ' field should be a minimum length of ' . $parameter;
				return false;
			}
				return true;
	}


	public function getErrors(){
		return $this->errors;
	}

}



 ?>