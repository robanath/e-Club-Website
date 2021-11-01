<?php
    include("connect.php");
    if ($con)
    {
        //echo "succesful connection"."<br/>";
        $qry ="select * from tblstudent";
        $res =mysqli_query($con,$qry);
        echo "<br/>";
        if ($res)
        {
            //echo" qry succesful ";
            while($row =mysqli_fetch_assoc($res))
            {   echo "<br/>";
               
                echo $row['name'];
                echo $row['department'];
                echo $row['DOB'];
                echo "<br/>";
            }
        }
        else
        {
            echo " qry not succesful"."<br/>";
           
    }
}
else
{
    echo "not connected";
    
}
?>