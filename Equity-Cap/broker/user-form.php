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

$companyname = $_POST['companyname'];
$acnnumber = $_POST['acnnumber'];
$director = $_POST['director1'];
$located = $_POST['located1'];
$firstname = $_POST['firstname1'];
$surname = $_POST['surname1'];
$email = $_POST['email1'];
$mobilenumber = $_POST['mobilenumber1'];
$streetnumber = $_POST['streetnumber1'];
$estimated = $_POST['estimated'];
$bank = $_POST['bank1'];
$occupation = $_POST['occupation1'];
$director2 =$_POST['director2'];
$located2 = $_POST['located2'];
$firstname2 = $_POST['firstname2'];
$surname = $_POST['surname2'];
$email2 = $_POST['email2'];
$mobilenumber2 = $_POST['mobilenumber2'];
$streetnumber2 = $_POST['streetnumber2'];
$estimated2 = $_POST['estimated2'];
$bank2 = $_POST['bank2'];
$occupation2 = $_POST['occupation2'];
$amount = $_POST['amount'];
$turnover = $_POST['turnover'];
$purpose = $_POST['purpose'];
$trading = $_POST['trading'];
$loanterm = $_POST['loanterm'];
$paying = $_POST['paying'];
$funds = $_POST['funds'];
$date = $_POST['date'];
$filenotes = $_POST['filenotes'];

$sql = "INSERT INTO cap_users (company_name, account_numbert, director, located, firstname, surname, email, mobile_number, street_nunmber, estimated, bank, occupation, amount, turnover, purpose, trading, loan_term, paying, funds, file_notes )
VALUES ('$companyname', '$acnnumber', '$director', '$located', '$firstname', '$surname', '$email', '$mobilenumber', '$streetnumber', '$estimated', '$bank', '$occupation', '$amount', '$turnover', '$purpose', '$trading', '$loanterm', '$paying', '$funds', '$filenotes')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: thankyou.php');
?>