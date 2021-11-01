<!DOCTYPE html>
<html>

<head>
    
    <title>JNEC e-Club: Programs</title>
    <style>
        fieldset{
            width: 600px;
            height:300px;
            align-self: center;
            margin-left: 500px;
            margin-top: 5px;
            margin-bottom: 15px;
           
        }
        legend{
            text-align: center;
        }

    </style>
</head>

<body>
    <div>
    <?php
        include('header.php');
    ?>
    </div>
   <?php
    include('connectdb.php');
    
   ?>
    

<?php
    if(isset($_SESSION['uname']))
    {
        echo "You are logged in with the Email ID: ".$_SESSION['eml'];
    }
    else{
        if(isset($err))
        {
            echo "Email Address or Password is incorrect";

        }


   echo  "<fieldset>";
        echo  "<legend><b>User Login Dashboard</b></legend>";
            echo " <form action='loginvalidate.php' method='POST'>";
                        echo "<div class='user-details'>";

                            echo "<div class='input-box'>";
                                echo  " <div class='details'>Email Address</div>";
                                echo  "<input type='text' name='eml' placeholder='Enter your Email Address'>";
                            echo  "</div>";

                            echo "<div class='input-box'>";
                                echo "<div class='details'>Password</div>";
                                echo "<input type='text' name='pwd' placeholder='Enter your Password'>";
                            echo "</div>";

                            echo   "<div>";
                                echo "<input class='button' type='submit' value='Login' name='login'";
                            echo " </div>";
                        echo  "</div>";
                echo "</form>";



    echo "</fieldset>";

}

?>

<div>
    <?php
    include('footer.php');
    ?>
</div>

</body>

</html>