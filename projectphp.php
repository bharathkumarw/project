<?php
$StudentID = $_POST['StudentID'];
$Name = $_POST['name'];
$comment = $_POST['comment'];
$Rating = $_POST['rating'];

// Database connection details
$hostname = "localhost";
$username = "root";
$password = "";
$database = "feedback";

// Create a connection to the MySQL database
$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback_table (StudentID, Name, comment, Rating) VALUES (?, ?, ?, ?)";
$statement = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($statement, "sssi", $StudentID, $Name, $comment, $Rating);

if (mysqli_stmt_execute($statement)) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_stmt_close($statement);
mysqli_close($connection);
?>
