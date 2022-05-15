<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 28;
if ($age >= 18) {
  echo 'You are old enough to vote 🎉 <br>';
} else {
  echo 'Sorry, you are not allowed to vote 😓 <br>';
}

$hours = date('H');
if ($hours >= 5 && $hours <= 11) {
  echo '<p style="background-color: pink; display:inline-block; padding: 20px;">Good Morning 🌅</p>';
} elseif ($hours >= 12 && $hours <= 17) {
  echo '<p style="background-color: pink; display:inline-block; padding: 20px;">Good Afternoon 🌤</p>';
} elseif ($hours >= 18 && $hours <= 22) {
  echo '<p style="background-color: pink; display:inline-block; padding: 20px;">Good Evening 🌄</p>';
} elseif ($hours >= 0 && $hours <= 4 || $hours <= 24) {
  echo '<p style="background-color: pink; display:inline-block; padding: 20px;">Good Night 🛌</p>';
} else {
  echo 'Hello';
}

echo '<br>';

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
$posts = ['First Post'];
$first_poste = empty($posts) ? 'No Posts' : $posts[0];
echo $first_poste;
$first_post = $posts[0] ?? null;  // null collapsing
echo $first_post;
// var_dump($first_poste);
echo '<br>';


/* -------- Switch Statements ------- */
$fav_color = 'blue';
switch($fav_color) {
  case 'blue':
    echo "Favorite color: blue";
    break;
  case 'green':
    echo "Favorite color: green";
    break;
  case 'orange':
    echo "Favorite color: orange";
    break;
  default:
    echo 'No colors';
}