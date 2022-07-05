<?php
require_once 'config.php';
//Autoload our classes

function class_loader($class_name)
{
    require_once 'lib/' . $class_name . '.php';
}

-spl_autoload_register('class_loader');
