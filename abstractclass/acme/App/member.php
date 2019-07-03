<?php 
namespace acme\App;
/**
 * child class of User class
 */
class member extends User{
	/* agr ap parent class ki logic ko use krna chahty ho aur usi function mai kuch aur logic add kr ky child class mai use krna chahty ho to is treeky sy use kr skty ho*/
	public function Login() {
		 $message = parent::Login();
		return  $message . '..set online flag for the member class';
	}

}



 ?>