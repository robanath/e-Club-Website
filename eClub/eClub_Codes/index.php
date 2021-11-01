<?php
include_once('header.php');
?>
<?php
    session_start();
    echo "Welcome! YOu are logged in with the Email ID: ".$_SESSION['Email'];


?>