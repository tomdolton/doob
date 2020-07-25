<?php

// Database connection
include('config/db_connect.php');

// Write query for all contact entries
$sql = 'SELECT email, subject, message, created_at FROM contact ORDER BY created_at';

// Make query and get results
$result = mysqli_query($conn, $sql);

// Fetch resulting rows as an array
$entries = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free the result from memory
mysqli_free_result($result);

// Close connection to database
mysqli_close($conn);

?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<main>

  <section class="messages container">
    <h3 class="messages__title">Messages</h3>

    <?php foreach ($entries as $entry) : ?>

      <div class="card messages__card">
        <h4 class="card__title"><?= htmlspecialchars($entry['subject']); ?></h4>
        <h5 class="card__title--small"><?= htmlspecialchars($entry['email']); ?></h5>
        <p class="card__date"><?= date("j F, Y - g:ia", strtotime(htmlspecialchars($entry['created_at']))); ?></p>
        <p class="card__copy"><?= htmlspecialchars($entry['message']); ?></p>
      </div>

    <?php endforeach; ?>

  </section>

</main>

<?php include('templates/footer.php'); ?>

</html>