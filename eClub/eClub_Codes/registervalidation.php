<!DOCTYPE html>
<html>

<head>
    
    <title>JNEC e-Club</title>
    
</head>

<body>
   

<?php
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $passwd = $_POST['password'];
 $index =$_POST['index'];
 
 
 //Name Validation 
 if(isset($_POST['name'])) 
     {
         $nme= filter_var($name, FILTER_SANITIZE_STRING);
         if($name == '')
         {  
             $nameErr = "Name is required";
             $err=1; 
         } 
         else
         {  
             
             if (!preg_match("/^[a-zA-Z ]*$/",$nme)) 
             {  
                 $nameErr = "$nme is not a valid Name";
                 $err=1;  
             }
              
         } 
     }  

    
     //INdex Number Validation
     if(isset($_POST['index'])) 
     {
       
        $indx= filter_var($index, FILTER_SANITIZE_NUMBER_INT);
         if($indx == '')
         {  
             $indexErr = "Index Number is required";
             $err=1; 
         } 
         else
         {  
            if(strlen($indx) !== 8 && !is_int($indx))
            {

                $indexErr = "$indx is not a valid INdex Number";
                $err=1;  
            }
            
           
              
         } 
     }  











     //Email Validation
     if(isset($_POST['email']))
     {
         $eml = filter_var($email, FILTER_SANITIZE_EMAIL);
         
         if ($eml == '')
         {  
             $emailErr = "Please enter the Email Address";
             $err=1;  
         } 
         else
         {     
             if (filter_var($eml, FILTER_VALIDATE_EMAIL) === false) 
             {  
                 $emailErr = "$eml is not a valid email address";
                 $err=1;
             }  
            
         }
   
     }  
          
     //Phone number validation
     if(isset($_POST['phone']))
     {
         if ($phone == '')
         {
             $phoneErr= 'Phone Number is required';
             $err=1;
         }
         else
         {
             // check if phone number is written
             if (!preg_match ("/^(17|16|77)[0-9]{6}$/", $phone) ) 
             {  
             $phoneErr = "$phone is not a valid Phone Number";  
             $err=1;
             } 
             
         }
     
     }
     //Password validation
         if(isset($_POST['password']))
     {   
         if ($passwd == '')
         {
             $passwdErr = 'Password is required';
             $err=1;
         }
         else
         {   
             $number = preg_match('@[0-9]@', $passwd);
             $uppercase = preg_match('@[A-Z]@', $passwd);
             $lowercase = preg_match('@[a-z]@', $passwd);
             $specialChars = preg_match('@[^\w]@', $passwd);
             
             if(strlen($passwd) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                 $passwdErr= "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
                 $err=1;
                } 
             {  
            
         }
     }
 
 }
     
 
     if(isset($err))
     {
         include_once('register.php');
     }
     else{
         include_once('connectdb.php');
         include('insert.php');
         header('Location:account.php');   
         
     }
     
 ?>  
    <div>
    <?php
    include_once('footer.php');
    ?>
    </div>

</body>

</html>














