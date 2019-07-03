<?php 
function getHash( $string )
{
	return	hash('sha256' , $string);

}
function autoload( $classname ){
	$file = dirname(__file__) . '/' . $classname . '.php';
	if(file_exists($file)){
		require $file;
	}
}
spl_autoload_register('autoload');
 ?>