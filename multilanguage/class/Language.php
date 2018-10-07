<?php

class Language{
    static public function getPageLanguage($get){
        $get = trim(strtolower($get));
        $jsonString = file_get_contents('_lang/'.$get.'.json');
        $parse = json_decode($jsonString);
        return $parse;
    }
}