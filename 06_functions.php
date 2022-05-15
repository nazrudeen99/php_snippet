<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$name = 'Nasurudeen';

function register_user($email) {
  global $name;
  echo 'User Registered ' . $name . '<br>';
  echo "$email email Verified <br>";
}

register_user('nazrudeen105@gmail.com');

function sum($num1 = 5, $num2 = 5) {
  return $num1 + $num2;
}

$addition = sum(5, 66);
// $addition = sum();
echo "Sum of 5 + 66 = $addition <br>";

// Antonymies function
$subtraction = function($n1, $n2) {
  return $n1 - $n2;
};

// Arrow function
$multiplication = fn($n1,$n2) => $n1 * $n2;

echo $multiplication(5, 5) . '<br>';

function division($n1, $n2) {
  return $n1 / $n2;
}

echo division(4 , 2);