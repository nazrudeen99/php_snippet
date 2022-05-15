<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

// echo - Output strings, numbers, html etc
echo "Hello, World ✋ <br>", "Welcome to PHP 😁 <br>";

// print - Works like echo, but can only take in single argument  
print "My name is Nasurudeen 🙋 <br>";

// print_r() - Print single value and arrays
print_r("Single value <br>");
print_r([1, 2, 3]);
echo "<br>";

// var_dump() - Print more info like data type and length
var_dump("hello 🤸 ");
echo "<br>";

// var_export() - Similarly to var_dump(). Outputs a string representation of a variable
var_export('hello 🤸');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=h1, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo "Welcome to PHP"; ?></h1>
  <p><?= "version 8:1:4"; ?></p>
</body>
</html>
