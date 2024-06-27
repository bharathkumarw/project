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
            background-image: url('buses.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            }
        .back-button5 {
             position: fixed;
             padding: 10px;
             top:20px;
             left:20px;
             background-color:red;/* Set the background color of the button */
             color: white; /* Set the text color of the button */
            text-decoration: none;
            border-radius: 1px;
             border:none;
             cursor:pointer;
}
       .button5{
           width: 1%;
           height: 1vh;
            margin:0;
           padding:0;
          }
            .back{
                background-color:palegreen;
                height: 100vh;
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
$result=$mysqli->query("select comment,Rating from feedback_table ");
?>
     
    <table class="table" align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
          <h2>comments and Rating</h2>
        </tr>
        <t>
            <th>Comment</th>
            <th>Rating</th>
           
        <t>
         <?php   
        while($rows=$result->fetch_assoc())
        {
            ?>
        <tr>
            <td ><?php echo $rows['comment'];?></td>
             <td ><?php echo $rows['Rating'];?></td>
            
            
</tr>
<?php
        }
?>
    </table>
<div class="button5">
        <a href="admin_module.html" class="back-button5">Back</a>
    </div>
 </body>
 </html>