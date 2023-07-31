 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $_GET['business_name'];
  // Select database
  $conn->select_db("users");
  // Prepare the SQL query to update data where business_name = "$name"
  $sql = "UPDATE users SET col1='value1', col2='value2' WHERE business_name = '$name'";

  // Execute the SQL query
  if (mysqli_query($conn, $sql)) {
    // If the query was successful, redirect to a success page
    header("Location: success.php");
    exit;
  } else {
    // If the query failed, show an error message
    echo "Error updating data: " . mysqli_error($conn);
  }
  ?>