<?php 
require 'autoload.php';
$rules  = array('email' => 'required email' ,  'password' => 'required|min:8');
$data = array('email' => 'abubakarprince56@gmail.com' , 'password' => '2131231234' , 'foo' => 'bar');

$validator = new joostvanveen\App\Validator();
if($validator->validate($data, $rules) == true ){
	$abubakar = new joostvanveen\App\User($data);
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
	$awais = new joostvanveen\Library\User;
	var_dump($awais);

 ?>