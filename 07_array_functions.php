<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['Apple', 'Orange', 'Banana'];

// Get a length
echo 'Length: ' . count($fruits) . '<br>';

// Search in Array
echo 'Apple in the array: ', var_dump(in_array('Apple', $fruits)), '<br>';

// Add to array
echo 'Add to array: <br>';
$fruits[] = 'Mango';
array_push($fruits, 'Blueberry', 'Strawberry'); // added end of array
array_unshift($fruits, 'Pear'); // added beginning of array
print_r($fruits);
echo '<br>';

// Remove to array
echo 'Remove to Array <br>';
array_pop($fruits); // Remove last element of array
array_shift($fruits); // Remove first element of array
unset($fruits[3]);  // Remove specific element
print_r($fruits);
echo '<br>';

// Split into chunks
echo 'Split into chunks <br>';
$chunks_array = array_chunk($fruits, 2);
print_r($chunks_array);
echo '<br>';

// Merge arrays
echo 'Merge Two arrays: <br>';
$arr1 = [1, 3, 4];
$arr2 = [5, 6, 7];
$merge_arr = array_merge($arr1, $arr2);
$spread_merge = [...$arr1, ...$arr2]; // doing same think above function
print_r($merge_arr);
echo '<br>';
print_r($spread_merge);
echo '<br>';

// two arrays combine key value associative array
echo 'Convert to associative array: <br>';
$colors = ['black', 'white', 'red'];
$hex_code = ['#000', '#fff', '#f00'];
$combine_arrays = array_combine($colors, $hex_code);
print_r($combine_arrays);
echo '<br>';
// Get the keys
echo 'Get the array keys: <br>';
$keys = array_keys($combine_arrays);
print_r($keys);
echo '<br>';
// Flip the arrays
echo 'Flip the arrays: <br>';
$flip_array = array_flip($combine_arrays);
print_r($flip_array);
echo '<br>';

// range 
echo 'Range function: <br>';
$range_numbers = range(1, 10);
print_r($range_numbers);
echo '<br>';

// map
echo 'Map function: <br>';
$map_numbers = array_map(fn($number) => "Numbers $number", $range_numbers);
print_r($map_numbers);
echo '<br>';

// Filter use for condition
echo 'Filter function: <br>';
$filter_numbers = array_filter($range_numbers, function($number) {
  return $number <= 5;
});
print_r($filter_numbers);
echo '<br>';

// reduce or adding all the array
echo 'Reduce or sum of all the numbers in array: <br>';
$sum_of_arrays = array_reduce($range_numbers, fn($previews_value, $number) => $previews_value + $number);
echo 'Sum of total range array: ' . $sum_of_arrays . '<br>';