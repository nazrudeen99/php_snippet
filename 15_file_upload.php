<?php
if(isset($_POST['submit']))
  $allowed_file = ['png', 'jpg', 'jpeg', 'gif'];
  if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp_name = $_FILES['upload']['tmp_name'];
    $target_dir = 'uploads/' . $file_name;
    
    // Get the file type
    $file_type = explode('.', $file_name);
    $file_type = strtolower(end($file_type));

    // validating file only allowed image
    if (in_array($file_type, $allowed_file)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp_name, $target_dir);
        $message = '<p style="color:white; background-color: green; padding: 10px;">File Uploaded</p>';
      } else {
        $message = '<p style="color:black; background-color: red; padding: 10px;">File size too large</p>';
      }
    } else {
      $message = '<p style="color:black; background-color: red; padding: 10px;">Invalid file type</p>';
    }
  } else {
    $message = '<p style="color:black; background-color: red; padding: 10px;">Please choose a file</p>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
  <span>Select image to upload:</span>
  <input type="file" name="upload"> <br> <br>
  <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>