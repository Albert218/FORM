<?php

require_once("connect.php");


if(isset($_POST['submit'])){
   if(empty($_POST['name']) || empty($_POST['email']) ||empty($_POST['pass']))
   {
       echo"Please fill in the blanks";
   }
   else
   {
      $username=$_POST['name'];
      $useremail=$_POST['email'];
      $password=$_POST['pass'];

      $query="INSERT INTO form (Full_name,Email,Password) values ('$username','$useremail','$password')";
      $result =mysqli_query($con,$query);

      if($result)
      {
         header("location:view.php");
      }
      else
      {
          echo"Please check your query";
      }
   }
}
else{
    header("location:index.php");
}


?>