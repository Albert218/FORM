<?php

require_once("connect.php");
$query ="select * from form ";
$result=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>View Record</title>
</head>
<body class="bg-dark">
   <div class="container">
       <div class="row">
           <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr class=" bg-success text-white">
                            <td>User ID</td>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td class=" bg-primary text-white">Edit</td>
                            <td  class=" bg-danger text-white">Delete</td>
                        </tr>
                        
                        <?php
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $UserID = $row['ID'];
                            $Username = $row['Full_name'];
                            $Email = $row['Email'];
                        
                            ?>
                        
                             <tr >
                                  <td><?php echo $UserID?></td>
                                  <td><?php echo $Username?></td>
                                  <td><?php echo $Email?></td>
                                  <td><a href="edit.php?GETID=<?php echo $UserID?>">Edit</a></td>
                                  <td><a href="delete.php?Del=<?php echo $UserID?>">Delete</a></td>
                             </tr>

                             <?php
                             
                        }
                             
                             ?>
                                
                    </table>
                </div>
           </div>
       </div>
   </div>
</body>
</html>