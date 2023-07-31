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

  $name = $_GET['bussiness_name'];
  // Select database
  $conn->select_db("users");
    // database query to select data
    $query = mysqli_query($conn, "SELECT * FROM users WHERE business_name = '$name'");
    // loop through each row of data
    while ($row = mysqli_fetch_assoc($query)) {
      $data = json_encode($row);
      echo $data;
      header("Location: update-user.php?data=" . urlencode($data));
    }
  ?>