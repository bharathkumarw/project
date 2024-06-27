<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Analysis</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Feedback Sentiment Analysis</h1>
    <canvas id="feedbackChart" width="400" height="200"></canvas>

    <?php
    // Sample database connection (replace with your actual database connection)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sample SQL query (replace with your actual query)
    $sql = "SELECT comment FROM feedback_table";
    $result = $conn->query($sql);

    // Process data for Chart.js
    
    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           
            $data[] = sentimentAnalysis($row['comment']);
        }
    }

    $conn->close();

    // Convert PHP arrays to JavaScript arrays
   
    $data_json = json_encode($data);
    ?>

    <script>
        var ctx = document.getElementById('feedbackChart').getContext('2d');
        var feedbackChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $labels_json; ?>,
                datasets: [{
                    label: 'Sentiment Score',
                    data: <?php echo $data_json; ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: { type: 'time', time: { unit: 'day' } },
                    y: { beginAtZero: true }
                }
            }
        });
    </script>

    <?php
    // Function for sentiment analysis (you may use a more sophisticated approach)
    function sentimentAnalysis($comment)
    {
        // Implement your sentiment analysis logic here
        // This is just a placeholder, replace it with your actual analysis
        return rand(-1, 1); // Sample sentiment score between -1 and 1
    }
    ?>
</body>
</html>
