<?php
include_once('header.php');
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
   
<center>
        <div class="login-form">
            <div class="text">
                USER LOGIN
            </div>
            <form action="loginvalidate.php" method="POST">
                
                <div class="field ">
                    <div class="fas fa-envelope "></div>
                    <input type="text " placeholder="Email Address" name="email" value="<?php if(isset($email)) { echo $email; } ?>">
                    
                </div>
                
                <?php 
                    if(isset($emailErr))
                    {
                        echo $emailErr;
                    }
                ?>
                
                <div class="field ">
                    <div class="fas fa-lock "></div>
                    <input type="password" name="password" placeholder="Password " value="<?php if(isset($passwd)) { echo $passwd; } ?>">
                    
                </div>
                <?php 
                    if(isset($passwdErr))
                    {
                        echo $passwdErr;
                    } 

                     ?>
                <button>Login</button>
                <div class="link ">
                    Not a Member?
                    <a href="register.php">REGISTER NOW</a>
                </div>
            </form>
        </div>
        </center>
</body>
<?php
include_once('footer.php');
?>
</html>
