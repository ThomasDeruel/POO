<?php
require 'class/Autoloading.php';
$db = new PDO('mysql:host=localhost;dbname=poo', 'root', 'root');

$merlin = new Personnage(array(
    "name" => "Merlin",
    "class"=> "Mage",
    "level" => 120,
    "sex"  => "masculin",
    "experience" => 1200336,
    "strength" => "0",
    'life' => 150
));


$pdo = new Db($db);

//  COMMANDES :
// add : $pdo->addPersonnage($merlin);