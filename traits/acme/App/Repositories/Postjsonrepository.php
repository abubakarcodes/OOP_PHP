<?php 
namespace acme\App\Repositories;

use stdClass;

	class Postjsonrepository implements PostRepositoryinterface{
		protected $posts = array();

		public function __construct(){
			$posts = json_decode(file_get_contents(dirname(__file__) . '/posts.json'), true);
			foreach ($posts as $key => $post) {

				$this->posts[$key] = (object) $post;
			}
		}
		 public function All(){
		 	return $this->posts;
		 }
		 public function Find($id){
		 	return isset($this->posts[$id]) ? $this->posts[$id] : new stdClass;

		 }
	}


 ?>

