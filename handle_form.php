<?php

// Init form variables
$email = $subject = $message = '';
$errors = array('email' => '', 'subject' => '', 'message' => '');

// Validate form
if (isset($_POST['submit'])) {

  // Check email
  if (empty(trim($_POST['email']))) {
    $errors['email'] = "An email is required <br />";
  } else {
    $email = ($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Email must be a valid email address';
    }
  }

  // Check subject
  if (empty(trim($_POST['subject']))) {
    $errors['subject'] = "A subject is required";
  }

  // Check message
  if (empty(trim($_POST['message']))) {
    $errors['message'] = "A message is required";
  }


  // If the $errors array is empty
  if (!array_filter($errors)) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    // Create sql
    $sql = "INSERT INTO contact(email,subject,message) VALUES('$email', '$subject', '$message')";

    // Save to db and check
    if (mysqli_query($conn, $sql)) {
      // Success, redirect to index page
      header('Location: index.php');
    } else {
      // Error
      echo 'query error: ' . mysqli_error($conn);
    }
  }
} // End of POST check