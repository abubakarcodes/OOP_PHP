<?php 
require 'app/User.php';
require 'app/validator.php';
require 'app/helper.php';


$rules  = array('email' => 'required email' ,  'password' => 'required|min:8');
$data = array('email' => 'abubakarprince56@gmail.com' , 'password' => '2131231234');

$validator = new Validator();
if($validator->validate($data, $rules) == true ){
	$abubakar = new User();
	$abubakar->setEmail( $data['email'] );
	$abubakar->setPassword( getHash($data['password']) );
	var_dump($abubakar);
}
else{
	var_dump($validator->getErrors());
}

 ?>