<?php
if (!empty($_POST)) {
  // Set cookie to log the time of the last submission
  setcookie('last_submission', date('Y-m-d\TH:i:s'), time()+86400);

  // Build email message body from POST data
  $message = '';
  foreach ($_POST as $key => $value) {
    $message .= "$key: $value\n";
  }

  // Send email to website owner
  $to = 'loans@equitycap.com.au'; // Set website owner's email address
  $subject = 'New Submission';
  $headers = 'From: loans@equitycap.com.au' . "\r\n" .
             'Reply-To: loans@equitycap.com.au' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);

  // Build email message body for user
  $message = "Thank you for your loan request. Here's what you have told us:\n\n";
  foreach ($_POST as $key => $value) {
    $message .= "$key: $value\n";
  }

  // Send email to user
  $to = $_POST['Lender Email'];
  $subject = 'Submission Received';
  $headers = 'From: loans@equitycap.com.au' . "\r\n" .
             'Reply-To: loans@equitycap.com.au' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
  
  // Redirect to thank you page
  header('Location: thankyou.php');
  exit;
}
?>