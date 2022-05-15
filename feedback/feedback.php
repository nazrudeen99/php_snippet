<?php include('inc/header.php') ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($connection, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt-3">There is a no paragraph</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?= $item['body'] ?>
      <div class="text-secondary mt-2">
        By <?= $item['name'] ?> On <?= $item['date'] ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include('inc/footer.php') ?>