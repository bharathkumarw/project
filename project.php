<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="feedback";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['Register']))
{	
	 $Fullname= $_POST['Fullname'];
	 $Aadharnumber= $_POST['Aadharnumber'];
	 $Phonenumber= $_POST['Phonenumber'];
	 $StudentId = $_POST['StudentId'];
                   $Route = $_POST['Route'];
	 $Department= $_POST['Department'];
               $sql_query = "INSERT INTO `transport_table`(`Fullname`, `Aadharnumber`, `Phonenumber`, `StudentId`, `Route`, `Department`)
	 VALUES ('$Fullname','$Aadharnumber','$Phonenumber','$StudentId','$Route','$Department')";
             if (mysqli_query($conn, $sql_query)) 
	 {
		echo "successfully Registered !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>