<?php
/* ----------- Arrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 44, 55, 66, "44"];
$fruits = array("Orange", 'Apple', "Banana"); // old way

print_r($numbers);
echo "<br> $numbers[1] <br>"; // print single element in array

// Associative array
$hex = [
  'black' => '#000',
  'white' => '#fff',
  'gray' => '#444',
];

print_r($hex);
echo '<br> black hex code: '. $hex['black'] . '<br>';

// Multidimensional Array
$person = [
  [
    'first_name' => 'Nasurudeen',
    'age' => 34,
    'email' => 'Nasuru@gmail.com' 
  ],
  [
    'first_name' => 'John',
    'age' => 24,
    'email' => 'John@gmail.com' 
  ],
  [
    'first_name' => 'Bob',
    'age' => 39,
    'email' => 'Bob@gmail.com' 
  ]
];

print_r($person);
echo '<br> First Name: ' , $person[0]['first_name'], '<br>';

// convert to JSON
var_dump(json_encode($person[1]));