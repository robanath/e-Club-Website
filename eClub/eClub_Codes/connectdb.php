<?php
$servername="localhost";
$username="root";
$password="";
$databaseName="mpdb";
$con=mysqli_connect($servername, $username, $password, $databaseName);
if($con)
    {
       // echo"connection successful";
    }
    else
    {
       // echo "error in connection";
    }


?>
