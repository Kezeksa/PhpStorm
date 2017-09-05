<?php

$students = array("Emmanuel","Thierry","Pascal","Eric","Nicolas");

$age = array(42, 51, 45, 48, 19);
$total = array_sum($age);
$nombre = count($age);
$moyenne = $total /= $nombre;

echo $students[0] . " a " . $age[0] . " ans.<br>";
echo $students[1] . " a " . $age[1] . " ans.<br>";
echo $students[2] . " a " . $age[2] . " ans.<br>";
echo $students[3] . " a " . $age[3] . " ans.<br>";
echo $students[4] . " a " . $age[4] . " ans.<br>";
echo "La moyenne d'âge est de " . $moyenne . " ans.";