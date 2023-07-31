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
$acnnumbert = $_POST['acnnumbert'];
$director = $_POST['director'];
$located = $_POST['located'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$streetnumber = $_POST['streetnumber'];
$estimated = $_POST['estimated'];
$bank = $_POST['bank'];
$occupation = $_POST['occupation'];
$amount = $_POST['amount'];
$turnover = $_POST['turnover'];
$purpose = $_POST['purpose'];
$trading = $_POST['trading'];
$loanterm = $_POST['loanterm'];
$paying = $_POST['paying'];
$funds = $_POST['funds'];
$filenotes = $_POST['filenotes'];

$sql = "INSERT INTO cap_client (company_name, account_numbert, director, located, firstname, surname, email, mobile_number, street_nunmber, estimated, bank, occupation, amount, turnover, purpose, trading, loan_term, paying, funds, file_notes )
VALUES ('$companyname', '$acnnumbert', '$director', '$located', '$firstname', '$surname', '$email', '$mobilenumber', '$streetnumber', '$estimated', '$bank', '$occupation', '$amount', '$turnover', '$purpose', '$trading', '$loanterm', '$paying', '$funds', '$filenotes')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: thankyou.php');
?>