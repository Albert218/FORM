<?php

require_once("connect.php");

if(isset($_GET['Del']))
{
    $UserID=$_GET['Del'];
    $query="delete from form where ID='".$UserID."'";
    $result=mysqli_query($con,$query);

    if($result){
        header("location:view.php");
    }
    else{
        echo"Check your query";
    }
}
else{
    header("location:view.php");
}








?>