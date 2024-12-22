<?php

echo"<pre>";
//Variable 
//Data Type
//Data Type Check

//$line_gap = ".\n";
$userName = 'Mostafijur' ;
$number = 12345;
$flote = 1.44;
$boolean = true;
$array = ['Mango', 'Orange', 'Apple'];
$blanck = null;

echo $userName;
echo $number;
echo $flote;
echo $array[2];
echo $blanck;

var_dump($userName);
var_dump($number);
var_dump($flote);
var_dump($boolean);
var_dump($array);
var_dump($blanck);

// Class-2
// Array
//Assoiative array
//Super Global Variables

$peoples = array('Rohim', 'Korim', 'Bokor');
echo $peoples[2];

//Associative Array
 
$area_person = array (
    'Block1' => array('Badol', 'Zobbar','Rofik'),
    'Block2' => array('Mizan', 'Rohima', 'Miraz'),
    'Block3' => array('Sohan', 'Kutub', 'Aminul'),
);

var_dump($area_person['Block1']);
var_dump($area_person['Block2']);
var_dump($area_person['Block3']);


?>