<?php 
namespace acme\App\Repositories;

use stdClass;

	class Postjsonrepository implements PostRepositoryinterface{
		protected $posts = array();

		public function __construct(){
			//store database connection from db
		}
		 public function All(){
		 	//fetch all posts from db
		 }
		 public function Find($id){
		 //find a single post or fetch a single from db

		 }
	}


 ?>

