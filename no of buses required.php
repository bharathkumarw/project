<?php

// Assuming you have a MySQL database with a table named 'places' having columns 'place_name' and 'student_count'

// Replace these database connection details with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Maximum capacity of a bus
$maxBusCapacity = 40;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch student counts from the database
$sql = "SELECT place_name, student_count FROM places";
$result = $conn->query($sql);

$places = [];
$studentCounts = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $places[] = $row['place_name'];
        $studentCounts[] = $row['student_count'];
    }
} else {
    echo "No data found in the database";
}

$conn->close();

// Function to allocate students to buses
function allocateStudentsToBuses($places, $studentCounts, $maxBusCapacity) {
    $allocations = [];

    foreach ($places as $index => $place) {
        $studentsRemaining = $studentCounts[$index];

        // Calculate the number of buses needed for each place
        $busesNeeded = ceil($studentsRemaining / $maxBusCapacity);
        $allocations[$place] = $busesNeeded;
    }

    return $allocations;
}

// Example usage:
$result = allocateStudentsToBuses($places, $studentCounts, $maxBusCapacity);
print_r($result);

?>
