<?php
     include_once("connect.php");
     if ($con)
     {
         $qry ="delete from tblstudent WHERE name='Tshering'";
         $res =mysqli_query($con,$qry);
         echo "<br/>";
         if ($res)
         {
            echo" delete succesful ";
         }
         else
         {
             echo " error in deleting"."<br/>";
         }
    }
            
?>