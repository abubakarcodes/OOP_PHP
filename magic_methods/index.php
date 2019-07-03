<?php 
require 'app/User.php';
require 'app/validator.php';
require 'app/helper.php';


$rules  = array('email' => 'required email' ,  'password' => 'required|min:8');
$data = array('email' => 'abubakarprince56@gmail.com' , 'password' => '2131231234' , 'foo' => 'bar');

$validator = new Validator();
if($validator->validate($data, $rules) == true ){
	$abubakar = new User($data);
	$abubakar->email = 'abubakar@gmail.com';
	$abubakar->password = 'sdfsdafasdf';
	// var_dump($abubakar->email);
	// var_dump($abubakar->password);
	// var_dump($abubakar);
	echo $abubakar;
}
else{
	var_dump($validator->getErrors());
}

 ?>