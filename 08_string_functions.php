<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello, World';
echo $string . '<br>';

// Get the length of string
echo 'Length of String: ' . strlen($string) . '<br>';

// Find the position of the first occurrence of a substring in a string
echo "Find the position : " . strpos($string, 'e') . '<br>';

// Find the position of the last occurrence of a substring in a string
echo 'Find the position last: '. strrpos($string, 'l') . '<br>';

// Reverse String
echo 'Reverse string: ' . strrev($string) . '<br>';

// Convert to lowercase
echo 'Lowercase: ' . strtolower($string) . '<br>';

// Convert to uppercase
echo 'Uppercase: ' . strtoupper($string) . '<br>';

// uppercase every first words
echo 'Uppercase every first words: ' . ucwords($string) . '<br>';

// Replace string
echo 'Replace String: ' . str_replace('World', 'Everyone', $string) . '<br>';

// Substring
echo 'Sub String or cut string: ' . substr($string, 0, 5) . '<br>';
echo 'Sub String or print after this index 7: ' . substr($string, 7) . '<br>';

// starts with
echo 'Starts with Hello?: ', str_starts_with($string, 'Hello') ? 'Yes' : "No" , '<br>';

// ends with
echo 'End with World?: ', str_ends_with($string, 'World') ? 'yes' : 'no', '<br>';

// html entities
$html = '<h1>hello</h1>';
$secure_html = htmlentities($html);
echo $secure_html, '<br>';
echo html_entity_decode($secure_html);

// printf
printf('%s likes %s', 'nasurudeen', 'PHP');
echo '<br>';
printf('1 + 1 = %d', 1 + 1);
