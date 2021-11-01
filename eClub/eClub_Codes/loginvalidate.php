
<?php
 
 include("connectdb.php");
 $email = $_POST['email'];
  $passwd = $_POST['password'];

        $sqlEmail = "select * from member where Email = '".$email."'";
        $rs = mysqli_query($con,$sqlEmail);
        $numRows = mysqli_num_rows($rs);
        
    if($numRows  == 1)
        {
            
        $sqlEmail = "select * from member where Password = '".$passwd."'";
        $rss = mysqli_query($con,$sqlEmail);
        $numRows1 = mysqli_num_rows($rss);
        
         if($numRows1  == 1)
            {
                session_start();
		        $_SESSION['Email']=$email;
		        $_SESSION['pwd']=$passwd;
		        header("Location:index.php");
            }
            
        else
        {
           // echo "Password Incorrect";
           // header("Location:Userlogin.php");
            include_once('Userlogin.php');
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