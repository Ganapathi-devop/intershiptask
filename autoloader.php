<?php

function autoloading($class_name){
    // include './src/person.php';

    include __DIR__.'/src/'.str_replace('\\', '/', $class_name) . '.php';
    
}

spl_autoload_register('autoloading');
// spl_autoload_unregister('autoloading');

$person = new Person();
$animal = new Animal();

?>