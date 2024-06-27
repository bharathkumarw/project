<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Load rating data
            var ratingData = google.visualization.arrayToDataTable([
                ['Rating', 'Count'],
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

                // Retrieve rating data
                $sqlRating = "SELECT Rating FROM feedback_table";
                $resultRating = $conn->query($sqlRating);

                $ratingCounts = [];
                if ($resultRating->num_rows > 0) {
                    while ($row = $resultRating->fetch_assoc()) {
                        $rating = (int)$row["Rating"];
                        if (isset($ratingCounts[$Rating])) {
                            $ratingCounts[$Rating]++;
                        } else {
                            $ratingCounts[$Rating] = 1;
                        }
                    }
                }

                $conn->close();

                // Generate data for the rating chart
                ksort($ratingCounts);
                foreach ($ratingCounts as $Rating => $count) {
                    echo "['$Rating', $count],";
                }
                ?>
            ]);

            // Load comment data
            var commentData = google.visualization.arrayToDataTable([
                ['Comment', 'Count'],
                <?php
                // Database connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Retrieve comment data
                $sqlComment = "SELECT Comment FROM feedback_table WHERE Comment IS NOT NULL";
                $resultComment = $conn->query($sqlComment);

                $commentCounts = [];
                if ($resultComment->num_rows > 0) {
                    while ($row = $resultComment->fetch_assoc()) {
                        $comment = $row["Comment"];
                        if (isset($commentCounts[$Comment])) {
                            $commentCounts[$Comment]++;
                        } else {
                            $commentCounts[$Comment] = 1;
                        }
                    }
                }

                $conn->close();

                // Generate data for the comment chart
                arsort($commentCounts); // Sort comments by count in descending order
                foreach ($commentCounts as $Comment => $count) {
                    echo "['$Comment', $count],";
                }
                ?>
            ]);

            // Rating chart options
            var ratingOptions = {
                title: 'Rating Distribution',
                pieHole: 0.4,
            };

            // Comment chart options
            var commentOptions = {
                title: 'Comment Analysis',
                pieHole: 0.4,
            };

            // Create rating chart
            var ratingChart = new google.visualization.PieChart(document.getElementById('rating_chart'));
            ratingChart.draw(ratingData, ratingOptions);

            // Create comment chart
            var commentChart = new google.visualization.PieChart(document.getElementById('comment_chart'));
            commentChart.draw(commentData, commentOptions);
        }
    </script>
</head>
<body>
    <div id="rating_chart" style="width: 500px; height: 300px;"></div>
    <div id="comment_chart" style="width: 500px; height: 300px;"></div>
</body>
</html>