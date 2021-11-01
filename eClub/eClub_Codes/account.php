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
                ACCOUNT DASHBOARD
            </div>
            <form action="AdminLogin.php" method="POST">  
            <button>Admin Login</button>
            </form>
            <form action="Userlogin.php" method="POST">  
            <button>User Login</button>
            </form>
            <form action="Logout.php" method="POST">  
            <button>Logout</button>
            </form>



            
        </div>
        </center>
</body>
<?php
include_once('footer.php');
?>
</html>


