
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
                USER REGISTERATION
            </div>
            <form action="registervalidation.php" method="POST">
                <div class="field">
                    <div class="fas fa-user"></div>
                    <input type="text" placeholder="Full Name" name="name" value="<?php if(isset($name)) { echo $name; } ?>">
                    
                </div>
                <?php 
                    if(isset($nameErr))
                    {
                        echo $nameErr;  
                    } 
                ?>
                <div class=" field ">
                    <div class="fas fa-user "></div>
                    <input type="text " placeholder="Index Number" name="index" value="<?php if(isset($index)) { echo $index; } ?>">
                   
                </div>
                <?php 
                    if(isset($indexErr))
                    {
                        echo $indexErr;
                    }
                ?>
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
                    <div class="fas fa-phone "></div>
                    <input type="text " placeholder="Phone Number " name="phone" value="<?php if(isset($phone)) { echo $phone; } ?>">
                    
                </div>
                <?php 
                    if(isset($phoneErr))
                    {
                        echo $phoneErr;
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
                <button>REGISTER</button>
                <div class="link ">
                    Already a member?
                    <a href="Userlogin.php">LOGIN NOW</a>
                </div>
            </form>
        </div>
        </center>
</body>
<?php
include_once('footer.php');
?>
</html>
