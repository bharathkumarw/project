<?php
include_once('Fetch.php');
$query="select * from transport";
$result=mysql_query($query);
?>
<html>
<title>
<head>Fetch data from databse</head>
</title>
<body>
<table>
<tr>
<th><h1>Registered Students Details</h1></th>
<th>Fullname</th>
<th>Aadharnumber</th>
<th>Phonenumber</th>
<th>StudentId</th>
<th>Route</th>
<th>department</th>
</tr>
</table>
</body>
</html>
