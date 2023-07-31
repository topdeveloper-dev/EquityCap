<?php
if (!empty($_POST)) {
  // Set cookie to log the time of the last submission
  setcookie('last_submission', date('Y-m-d\TH:i:s'), time()+86400);

  // Build email message body for user
  $message = "Thank you for your submission. Here's what you entered:\n\n";
  foreach ($_POST as $key => $value) {
    $message .= "$key: $value\n";
  }

  // Send email to user
  $to = $_POST['resetEmail'];
  $subject = 'Submission Received';
  $headers = 'From: webmaster@example.com' . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
 
  // Redirect to thank you page
  header('Location: resetconfirmation.php?resetEmail=' . urlencode($to));
  exit;
}
?>