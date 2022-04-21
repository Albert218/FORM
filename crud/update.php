<?php

require_once("connect.php");

if(isset($_POST['update']))
{
   $UserID = $_GET['ID'];
   $Username = $_POST['name'];
   $Email = $_POST['email'];
   $Password=$_POST['Pass'];

   $query="UPDATE form set Full_name ='".$Username."' ,Email='".$Email."',Password='".$Password."' where ID='".$UserID."'";
   $result=mysqli_query($con,$query);

   if($result)
   {
       header("location:view.php");
   }
   else
   {
       echo("Please check your codes");
   }

}
else
{
    header("location:view.php");
}






?>