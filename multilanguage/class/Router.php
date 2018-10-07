<?php

class Router{
    public static function start(){
        $router = trim(strtolower($_GET['lang']));
        if (isset($router)) {
            switch ($router)
            {
            case 'fr':
                break;
            case 'en':
                break;
            case 'jp':
                break;
            default:
                header('location: index.php?lang=fr');
                exit;
            }
        }
    }
}
Router::start();
