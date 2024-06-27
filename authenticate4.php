<?php

$validUsername = 'bharath';
$validPassword = 'bharath@123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];

    if ($submittedUsername === $validUsername && $submittedPassword === $validPassword) {
        // Authentication successful
        header('Location: studentscount.php');
        exit;
    } else {
        // Authentication failed
        echo "Invalid credentials. Please try again.";
    }
}
?>
