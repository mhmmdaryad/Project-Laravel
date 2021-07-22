<?php

require ('animal.php');

$sheep= new animal("shaun");

echo "Name : $sheep->name <br>";
echo "Legs : $sheep->legs <br>";
echo "Cold Blooded: $sheep->cold_blooded <br>";
?>