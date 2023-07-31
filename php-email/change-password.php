<?php
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

// Select database
$conn->select_db("proper65_users");

$business = $_POST['Bussiness'];
$yourself = $_POST['yourself'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];

$sql = "INSERT INTO users (business_name, best_describe, first_name, last_name, email, mobile_number, password, street, city, state, post_code)
VALUES ('$business', '$yourself', '$firstname', '$lastname', '$email', '$mobile', '$password', '$street', '$city', '$state', '$postcode')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Build email message body for user
$message = "Thank you for your loan request. Here's what you have told us:\n\n";
foreach ($_POST as $key => $value) {
  $message .= "$key: $value\n";
}

$to = $_POST['Email'];
$subject = 'Submission Received';
$headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

header('Location: thankyou.php');
?>