<?php
if (!empty($_POST)) {
  // Set cookie to log the time of the last submission
  setcookie('last_submission', date('Y-m-d\TH:i:s'), time()+86400);

  $servername = "localhost";
  $username = "proper65";
  $password = "aBn-mzSTgeV1j<f6APCs";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  // Define email to check
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn->select_db("users");
  
  // Prepare and execute query
  $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if email exists
  $row = $result->fetch_assoc();
  if ($row["COUNT(*)"] > 0) {
    // Update password to new password & Send email to user
    $stmt1 = $conn->prepare("SELECT COUNT(*) FROM users WHERE password = '$password'");
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    // Check if email exists
    $row1 = $result1->fetch_assoc();
    if ($row1["COUNT(*)"] > 0) {
      header('Location: dashboard.php');
      echo "Password updated successfully";
    } else {
      header('Location: login.php');
      echo "Password is not correct...";
    }

  } else {
    header('Location: login.php');
    echo "Email does not exist";
  }
}
?>