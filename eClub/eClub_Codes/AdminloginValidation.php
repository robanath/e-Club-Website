
<?php
 
 include("connectdb.php");
 $email = $_POST['email'];
  $passwd = $_POST['pwd'];

        $sqlEmail = "select * from admin where Email = '".$email."'";
        $res = mysqli_query($con,$sqlEmail);
        $numRows = mysqli_num_rows($res);
        
    if($numRows  == 1)
        {
            
        $sqlPassword = "select * from admin where Password = '".$passwd."'";
        $res = mysqli_query($con,$sqlPassword);
        $numRows1 = mysqli_num_rows($res);
        
         if($numRows1  == 1)
            {
		        $_SESSION['Email']=$email;
		        $_SESSION['pwd']=$passwd;
		        header("Location:admin.php");
            }
            
        else
        {
           // echo "Password Incorrect";
           // header("Location:Userlogin.php");
            include_once('Adminlogin.php');
            $Err=" Password is incorrect";
            



        }


        }
    else
    {
       // echo "Email incorrect";
        
        $Err=" Email is incorrect";
        include_once('Userlogin.php');
    }  
 ?>  
    <div>
    <?php
    include('footer.php');
    ?>
    </div>

</body>

</html>