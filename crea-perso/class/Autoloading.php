<?php
function autoloading($class){
    require 'class/'.$class . '.php';
}
spl_autoload_register('autoloading');