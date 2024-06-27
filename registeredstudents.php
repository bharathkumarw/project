<?php
$search="";
?>
<!DOCTYPE html>
<html>
    <title>
         Fetch Data From Database
    </title> 
    <head>
        <style>
           body{
              background-image: url('buses.jpg'); /* Replace 'your-image.jpg' with the path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
           }
            
            h2{
                text-align: center;
                font-size: 30px;
                color: red;
            }
            .table{
                background-color: whitesmoke;

            }
            td{
                color: red;
            }
        </style>
    </head>
<body class="back">
    

    
    
<?php
$mysqli = new mysqli("localhost", "root", "", "feedback");
$result=$mysqli->query("select Fullname,Aadharnumber,Phonenumber,Route,Department from transport_table ");
?>
     
    <table class="table" align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
          <h2>Registered students</h2>
          
        </tr>
        <t>
           
           <th>Fullname</th>
          <th>Aadharnumber</th>
          <th>Phonenumber</th>
          
          <th>Route</th>
          <th>Department</th>
           
        <t>
         <?php   
        while($rows=$result->fetch_assoc())
        {
            ?>
        <tr>
            <td ><?php echo $rows['Fullname'];?></td>
            <td ><?php echo $rows['Aadharnumber'];?></td>
            <td ><?php echo $rows['Phonenumber'];?></td>
 
            <td ><?php echo $rows['Route'];?></td>
             <td ><?php echo $rows['Department'];?></td>
            
            
</tr>
<?php
        }
?>
    </table>
 </body>
 </html>