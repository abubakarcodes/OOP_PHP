<?php
//Interfaces in Object Oriented Programming Languages. An interface is a programming structure/syntax that allows the computer to enforce certain properties on an object (class).
// require psr-0 autoloader 
require 'autoload.php';
$postRepository = new acme\App\Repositories\PostRssrepository();
$posts = $postRepository->All();
echo '<ul>';
foreach ($posts as $post){
	echo '<li>'. $post->title . '</li>';
}
echo '</ul>';

$post = $postRepository->Find(2);
echo '<h1>' . $post->title . '</h1>';
echo '<p>' . $post->body . '</p>';
?>