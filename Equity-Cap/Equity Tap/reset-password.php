<?php
if (!empty($_POST)) {
  // Set cookie to log the time of the last submission
  setcookie('last_submission', date('Y-m-d\TH:i:s'), time()+86400);

  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  // Define email to check
  $email = $_POST['resetEmail'];
  $newPassword = $_POST['password'];
  
  $conn->select_db("users");
  
  // Prepare and execute query
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql); 
  $num_rows = mysqli_num_rows($result);

  if ($num_rows > 0) {
    // Update password to new password & Send email to user
    $sql = "UPDATE users SET password='$newPassword' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
      header('Location: dashboard.php');
      echo "Password updated successfully";
    } else {
      echo "Error updating password: " . $conn->error;
    }
  } else {
    header('Location: reset.php');
    echo "Email does not exist";
  }
}
?>