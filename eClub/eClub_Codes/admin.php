<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="text/css" href="header.html">
    <link rel="text/css" href="footer.html"> -->
    <title>JNEC e-Club: Programs</title>
    <style>

    </style>
</head>

<body>
<?php

if(isset($_SESSION['Email'])){
    echo "You are Logged in with the Email Address: ".$_SESSION['Email'];
}
?>
    <fieldset>
        <form>
            <fieldset>
                <h1>Event Management Dashboard</h1>
                Program Code:
                <input type="text" placeholder="Event Code" name="eventCode"><br>
                <br> Name:
                <input type="text" placeholder="Event Name" name="eventName"><br>
                <br> Time:
                <input type="time" name="time"> Date:
                <input type="date" name="date"><br><br> Place:
                <input type="text" placeholder="Enter the place(Venue)" name="pvenue"><br>
                <br>Descriptions

                <input type="file" placeholder="Select a file" name="pfile"><br><br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Enter the Details here...................." style="width: 100%;   "></textarea><br>
                <input type="file" name="posters">
                <input type="submit" value="post"><br>
            </fieldset>
            <br><br>






</body>

</html>