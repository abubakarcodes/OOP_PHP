<?php 
namespace acme\App\Repositories;
interface PostRepositoryinterface{
/**
 * Return all post, as an array of objects
 * $post->title
 * $post->body
 *
 * @return array
 */
public function All();
/**
 * Return a single post 
 * $post->title 
 * $post->body
 *
 * @param integer $id;
 * @return object
 */

public function Find($id);

}
 


 ?>