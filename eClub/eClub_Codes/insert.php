<?php
     include_once("connectdb.php");
     if ($con)
     {  
      
         $qry ="insert into member (`Index Number`, `Name`, `Email`, `Phone`, `Password`) values ('$index', '$name', '$email', '$phone', '$passwd')";
         $res =mysqli_query($con,$qry);
         echo "<br/>";
         if ($res)
         {
            echo" insertion succesful ";
            mysqli_close($con);
         }
         else
         {
             echo " error insertion"."<br/>";
         }

      }
     
            
?>