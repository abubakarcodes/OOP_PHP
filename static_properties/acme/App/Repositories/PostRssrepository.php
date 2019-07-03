<?php 
namespace acme\App\Repositories;

use stdClass;

	class PostRssrepository implements PostRepositoryinterface{
		protected $posts = array();

		public function __construct(){
			$xml = simplexml_load_file(dirname(__file__) . '/posts.xml');
			$posts = $xml->xpath('channel/item');
			foreach ($posts as $key => $post) {
				$post = json_decode(json_encode($post));
				$post->body = $post->description;
				$this->posts[$key + 1] = $post;
				
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

