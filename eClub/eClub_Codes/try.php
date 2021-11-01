<!DOCTYPE html>
<html>
    <head>

    </head>
    <style>
        *{
            margin: 0%;
            padding: 0%;
        }
        body{
            text-align: center;
            background: linear-gradient(rgba(248, 234, 234, 0.05), #0f69d1), url(banner.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        fieldset{
            width: 40%;
            padding: 8px;
            margin: auto;
            text-align: center;
            border-radius: 20px;
            background-color: transparent;
        }
        form{
            margin: auto;
            height: 40%;
        }
        input{
             border: 1px solid;
            border-radius: 6px;
            padding: 2px;
        }
        input:hover{
            background-color: rgb(26, 234, 241);
            transition: 0.9s;
            transform: scale(1.1);
        }
        .error{
            color: red;
        }
        
    </style>
    <body>
        <fieldset><legend>REGISTRATION</legend>
            <form action="" method="post">
                First Name<br>
                <input type="text" name="fname"><br>

                <?php
                $error = "";
                if(isset($_POST['register']))
                {
                    if(empty($_POST['fname']))
                    {
                        $error = "Please enter Your First name.";
                    }
                    else if(!preg_match("/^([a-zA-Z' ]+)$/", $_POST['fname']))
                    {
                        $error = "Invalid name.";
                    }
                }
                ?>
                <span class= "error"><?php echo $error; ?></span><br>

                <!-- last name -->
                Last Name<br>
                <input type="text" name="lname"><br><br>

                <?php
                $error = "";
                if(isset($_POST['register']))
                {
                    if(empty($_POST['lname']))
                    {
                        $error = "Please enter Your Last name.";
                    }
                    else if(!preg_match("/^([a-zA-Z' ]+)$/", $_POST['lname']))
                    {
                        $error = "Invalid name.";
                    }
                }
                ?>
                <span class= "error"><?php echo $error; ?></span><br>

                <!-- gender -->
                Gender<br>
                <p><input type="radio" name="gender" value="male" checked><label for="gender">Male</label></p>
                <p><input type="radio" name="gender" value="female" checked><label for="gender">Female</label></p>
                <br>


                <!-- contact -->
                Contact<br>
                <input type="number" name="pnumber"><br>
                <?php
                $error = "";
                if(isset($_POST['register'])){
                     $pattern="/^[16|17|77]{2}[0-9]{6}$/";
                    if(empty($_POST['pnumber'])){
                        $error = "Please enter Phone Number.";
                    }
                    else if(strlen($_POST['pnumber'])< 8){
                        $error = "Please enter correct lenght";
                    }
                    else if(!preg_match($pattern, $_POST['pnumber'])){
                        $error = "Invalid Mobile Number";
                    }
                }
                
                ?>
                <span class= "error"><?php echo $error; ?></span><br>

                <!-- email -->
                Email<br>
                <input type="email" name="email"><br>
                <?php
                $error = "";
                if(isset($_POST['register'])){
                    if(empty($_POST['email'])){
                        $error = "Please enter Email.";
                    }
                    else if(!preg_match("/^([a-z 0-9_\.-]+@[\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST['email'])){
                        $error = "Invalid Email";
                    }
                }

                ?>
                <span class= "error"><?php echo $error; ?></span><br>
                
                
                Password<br>
                <input type="password" name="password"><br><br>
                Confirm Password<br>
                <input type="password" name="cpassword"><br><br>
                <input type="submit" name="register" value="Register"><br>
                
                
            </form>
        </fieldset><br>
        <a href="formtry.html"><input type="submit" name="login" value="Login"></a>
        <a href="web.html"><input type="submit" name="home" value="Back to Home"></a>
        <br><br>
        <?php
            include_once("footer.html");
        ?>
    </body>
</html>