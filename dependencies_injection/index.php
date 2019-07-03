<?php
// require psr-0 autoloader 
require 'autoload.php';
$addressModel = new acme\App\Address();
$address = $addressModel->Find(2);
var_dump($address); 
?>