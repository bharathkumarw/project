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
            .back{
                background-color:palegreen;
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
                background-color: whitesmoke;

            }
            td{
                color: red;
            }
           #button5{position: fixed;
    padding: 10px;
top:20px;
left:20px;
    background-color:red; 
    color: white; 
    text-decoration: none;
    border-radius: 1px;
border:none;
cursor:pointer;
}
        </style>
    </head>
<body class="back">
    
<div class="container my-5 search">
        <form method="post">
            <input type="text" placeholder="Enter route name..." name="search">
            <button class="btn btn-dark btn-sm" name="submit">Search</button>
        </form>
</div>
<div class="container my-5">
        <?php
        if(isset($_POST["submit"])){
            $search = $_POST["search"];
        }

        ?>
</div>

    
    
<?php
$mysqli = new mysqli("localhost", "root", "", "feedback");
$result=$mysqli->query("select * from fee_table");
?>
     
    <table class="table" align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
          <h2>Fee details</h2>
        </tr>
        <t>
            <th>Sno</th>
            <th>Route</th>
             <th>Fee</th>
        <t>
         <?php   
        while($rows=$result->fetch_assoc())
        {
            ?>
        <tr>
            <td ><?php echo $rows['Sno'];?></td>
            <td><?php echo $rows['Route'];?></td>
             <td><?php echo $rows['Fee'];?></td>
            
</tr>
<?php
        }
?>
    </table>
<div id="button5">
        <a href="feestructure.html" class="back-button">Back</a>
    </div>
 </body>
 </html>