<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Comment, Rating FROM feedback_table";
$result = $conn->query($sql);


$totalRatings = 0;
$averageRating = 0;
$numberOfFeedback = 0;

require 'vendor/autoload.php'; 
use VaderSentiment\VaderSentiment;
$analyzer = new VaderSentiment();

while ($row = $result->fetch_assoc()) {
   
    $Rating = $row["Rating"];
    $totalRatings += $Rating;
    $numberOfFeedback++;

    $Comment = $row["Comment"];
    $sentiment = $analyzer->getSentiment($Comment);

    if ($sentiment['compound'] >= 0.05) {
        echo "Positive sentiment: " . $Comment . "<br>";
    } elseif ($sentiment['compound'] <= -0.05) {
        echo "Negative sentiment: " . $Comment . "<br>";
    } else {
        echo "Neutral sentiment: " . $Comment . "<br>";
    }
}

if ($numberOfFeedback > 0) {
    $averageRating = $totalRatings / $numberOfFeedback;
    echo "Average Rating: " . number_format($averageRating, 2);
} else {
    echo "No feedback data available.";
}

// Close the database connection
$conn->close();

?>

