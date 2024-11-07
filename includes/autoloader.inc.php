<?php 
spl_autoload_register('myAutoLoader');
function myAutoLoader($className) {

    $path="class/";
    $extension=".class.php";
    $fullPath = $path. $className. $extension;

    include_once($fullPath);

}



?>