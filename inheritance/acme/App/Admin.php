<?php 
namespace acme\App;
use acme\Library\User;
/**
 * child class of User class
 */
class Admin extends User
 { 	public function __construct(){
	$this->isAdmin = true;
 }
	/* agr ap parent class ki logic ko use krna chahty ho aur usi function mai kuch aur logic add kr ky child class mai use krna chahty ho to is treeky sy use kr skty ho*/
	public function Login(){
		 $message = parent::Login();
		return  $message . '..logging in the admin side';
	}

}



 ?>