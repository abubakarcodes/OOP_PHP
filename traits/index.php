<?php
//   They provide a ready to use behaviour and that is in the form of set of methods and you can easily plug in into any class you wish
// A trait is only for inheritance only and it cannot be instantiated its self.
// A trait can force a containing class to implements certain methods.
// require psr-0 autoloader 
require 'autoload.php';
$admin = new acme\App\Admin();
$admin->facebookId = 'muhammadabubakar1427';
var_dump($admin->facebookId);
var_dump( $admin->getFacebookData() );
?>