<?php
require 'class/Router.php';
require 'class/Language.php';

if(isset($_SERVER['PHP_SELF']) && $_SERVER['PHP_SELF'] ==="/index.php"){
    $index=substr(trim($_SERVER['PHP_SELF'],'/'), 0, -4);

    $translate = Language::getPageLanguage($_GET['lang']);
    require_once 'includes/'.$index.'.php';
}

