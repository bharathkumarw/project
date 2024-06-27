<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$sno = $_POST['Sno'];
$route = $_POST['Route'];
$fee = $_POST['Fee']; 

// Insert data into the database
$sql = "INSERT INTO fee_table (Sno, Route, Fee) VALUES ('$sno', '$route', '$fee')"; 
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
