<?php 
//In abstract class a parent class cannot make an object the object can only be create from its child classes.
require 'autoload.php';
$rules  = array('email' => 'required email' ,  'password' => 'required|min:8');
$data = array('email' => 'abubakarprince56@gmail.com' , 'password' => '2131231234' , 'foo' => 'bar');

$validator = new acme\App\Validator();
if($validator->validate($data, $rules) == true ){

	$admin = new acme\App\admin();
	$member = new acme\App\member();

	// $abubakar = new acme\App\User($data);
	// $abubakar->email = 'abubakar@gmail.com';
	// $abubakar->password = 'sdfsdafasdf';
	// var_dump($abubakar->email);
	// var_dump($abubakar->password);
	// var_dump($abubakar);
	 echo $admin->Login();
	 echo $member->Login();
}
else{
	var_dump($validator->getErrors());
}
	// $awais = new acme\Library\User;
	// var_dump($awais);

 ?>