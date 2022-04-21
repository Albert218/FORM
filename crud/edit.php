<?php

require_once("connect.php");
$UserID=$_GET["GETID"];
$query= "select * from form where ID='".$UserID."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    
    $Username = $row['Full_name'];
    $Email = $row['Email'];
    $Password = $row['Password'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>Update</title>
</head>
<body class="bg-dark">
   <div class="container">
       <div class="row">
           <div class="col-leg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Update Form</h3> 
                    </div>
                    <div class="card-body">
                        <form action="update.php?ID=<?php echo $UserID?>" method="post">
                             <input type="text" class="form-control mb-2" placeholder="Username" name="name" value="<?php echo $Username?>" >
                             <input type="email" class="form-control mb-2" placeholder="Email" name="email" value="<?php echo $Email?>">
                             <input type="password" class="form-control mb-2" placeholder="Password" name="pass" value="<?php echo $Password?>" >
                             <button  class="btn btn-success" name="update">Update</button>
                        </form>
                    </div>
                </div>
           </div>
       </div>
   </div>
</body>
</html>