<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waterbilling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$lname = $_POST["lname"];
$fname = $_POST["fname"];
$mi = $_POST["mi"];
$address = $_POST["address"];
$contact = $_POST["contact"];

$sql = "INSERT INTO owners (lname, fname, mi, address,contact)
VALUES ('$lname', '$fname', '$mi', '$address', '$contact')";

if ($conn->query($sql) === TRUE) {
    header("Location: addclient.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>