<?php

class Language{
    static public function getPageLanguage($get){
        $jsonString = file_get_contents('_lang/'.$get.'.json');
        $parse = json_decode($jsonString);
        return $parse;
    }
}