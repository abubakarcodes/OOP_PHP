<?php
//static method is used without intantiating the new object or instant. We can use static method without creating instant as shown below.
// require psr-0 autoloader 
require 'autoload.php';
$post = new stdClass(); 
$post->title = 'my title';
// without static method
// $debugger = new debug();

// $debugger->dump($post);

//with static method

// debug::dump($post);
// echo debug::$foo;

$dumper = new debug();
echo $dumper::$wrapperStart = 'new value';


//these are different instants so it should have value of class but not have it has value of $dumper instant
$anotherdumper = new debug();
echo $anotherdumper::$wrapperStart;




class debug {
static $wrapperStart = '<pre>';
static $wrapperEnd = '</pre>';
static $foo = 'Bar';

static function dump($var){
	echo self::$wrapperStart;
	var_dump($var);
	echo self::$wrapperEnd;
     }
 }
?>