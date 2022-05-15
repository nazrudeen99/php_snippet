<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Nasurudeen";    // String
$age = 27;  // Integer
$is_married = false;    // boolean
$price = 99.57; // float
$is_married = "NO"; // dynamic type

echo 'Name🙎: ' . $name . '<br>';   // single quotes concatenation
echo "age 💁: $age <br>";   // double quotes concatenation
echo "he his married: ", var_dump($is_married), "<br>"; // boolean return empty or 1
echo "price🤑: $price <br>";


// Arithmetic 
echo "5" + "4" , "<br>";
$x = "4" - "2";
var_dump($x);
echo "<br>", 5 * 5 . "<br>";
echo 14 / 5 , "<br>";
echo 5 % 4 , "<br>";

// Constant 
define('HOST', 'localhost');
const DB_NAME = 'dev_db';

echo HOST, '<br>';
echo DB_NAME . '<br>';