<?php 
	namespace acme\Library;
	use acme\app\User as anotherUser;
	class User
	{
		public function __construct(){
			 var_dump(new anotherUser);
		}


		protected function login(){
		return "logging in User ";
	}
	}


 ?>