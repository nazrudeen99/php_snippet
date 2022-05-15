<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
  echo $_POST['name'] . ' ';
  echo $_POST['age'];
}

?>

<!-- <a href="<?= $_SERVER['PHP_SELF'] ?>?name=John&age=30">Click</a> -->

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br>
  <label for="age">Age:</label>
  <input type="text" name="age" id="age">
  <br>
  <input type="submit" value="submit" name="submit">
</form>