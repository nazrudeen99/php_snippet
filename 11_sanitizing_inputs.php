<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submit'])) {
  // secure your input use anyone of method
  // $name = htmlentities($_POST['name']);
  // echo $name;
  // this best method
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name;

  $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
  echo $age;
}

?>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br>
  <label for="age">Age:</label>
  <input type="text" name="age" id="age">
  <br>
  <input type="submit" value="submit" name="submit">
</form>