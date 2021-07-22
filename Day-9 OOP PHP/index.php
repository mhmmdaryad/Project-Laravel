<?php

require ('animal.php');
require ('ape.php');
require ('frog.php');

$sheep= new animal("shaun");

echo "Name : $sheep->name <br>";
echo "Legs : $sheep->legs <br>";
echo "Cold Blooded: $sheep->cold_blooded <br><br>";

$kodok= new frog("buduk");

echo "Name : $kodok->name <br>";
echo "Legs : $kodok->legs <br>";
echo "Cold Blooded: $kodok->cold_blooded <br>";
$kodok->jump();

$sungokong= new ape("kera sakti");

echo "Name : $sungokong->name <br>";
echo "Legs : $sungokong->legs <br>";
echo "Cold Blooded: $sungokong->cold_blooded <br>";
$sungokong->yell();


?>