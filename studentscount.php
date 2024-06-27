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
            .back{
                background-color:white;
                height: 100vh;
            }
            .search{
                text-align: center;
                margin: 20px;
            }
            h2{
                text-align: center;
                font-size: 30px;
                color: red;
            }
            .table{
                background-color: white;

            }
            td{
               
            }
          #button5{position: fixed;
    padding: 10px;
    top:20px;
    right:20px;
    background-color:red; 
    color: white; 
    text-decoration: none;
    border-radius: 1px;
    border:none;
    cursor:pointer;
}
        </style>
    </head>
<body class="back" style="background-image: url('buses.jpg'); background-size: cover;">>
    

<div class="container my-5">
        <?php
        if(isset($_POST["submit"])){
            $search = $_POST["search"];
        }

        ?>
</div>

    
    
<?php
$mysqli = new mysqli("localhost", "root", "", "feedback");
$result=$mysqli->query("select city,count(city) as count from data group by city");
?>
     
    <table class="table" align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
          <h2>Student Record</h2>
        </tr>
        <t>
            <th>CITIES</th>
            <th>NO_OF_Students</th>
        <t>
         <?php   
        while($rows=$result->fetch_assoc())
        {
            ?>
        <tr>
            <td align="center"><?php echo $rows['city'];?></td>
            <td align="center"><?php echo $rows['count'];?></td>
            
</tr>
<?php
        }
?>
    </table>
<div id="button5">
        <a href="admin_module.html" class="back-button">Back</a>
    </div>

 </body>
 </html>