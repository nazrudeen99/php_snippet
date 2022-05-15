<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
session_start();

if (isset($_POST['submit'])) {
  $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($email == 'nazrudeendev22@gmail.com' && $password == 'password') {
    $_SESSION['email'] = $email;
    header('Location: /php-crash-main/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}



?>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  <br>
  <label for="password">password:</label>
  <input type="password" name="password" id="password">
  <br>
  <input type="submit" value="submit" name="submit">
</form>