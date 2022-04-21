<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">
   <div class="container">
       <div class="row">
           <div class="col-leg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Registration Form</h3> 
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="post">
                             <input type="text" class="form-control mb-2" placeholder="Username" name="name" >
                             <input type="email" class="form-control mb-2" placeholder="Email" name="email" >
                             <input type="password" class="form-control mb-2" placeholder="Password" name="pass" >
                             <button  class="btn btn-success" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
           </div>
       </div>
   </div>
</body>
</html>