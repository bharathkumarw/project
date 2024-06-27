<?php
// Assuming you have already connected to your database

// Query to get the total registered candidates count
$query = "SELECT COUNT(*) AS total_candidates FROM candidates_table";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalCandidates = $row['total_candidates'];
    echo "Total registered candidates: $totalCandidates";
} else {
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>