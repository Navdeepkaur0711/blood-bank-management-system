<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin Home</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<header>
<div class="full">
    <div class="inner_full">
        <div id="header"><h2>Blood Bank Management System</h2>
        <nav>
            <a href="admin-home.php"> Dashboard</a>
            <a href="donor-list.php"> Donors</a>
            <a href="patient-list.php"> Patients</a>
            <a href="donation-list.php"> Donations</a>
            <a href="request-list.php"> Requests</a>
            <a href="logout.php"> logout</a>
        </nav>
        </div>
</div>
</div>
</header>
<body>
        <div id ="body">
            <br><br><br>
            <?php
            $un=$_SESSION['Uname'];
             if(!$un)
            {
                header("Location:admin-login.php");
            }
            ?>
           <h1> Dashboard</h1><br><br><br>
           <ul>
            <li><a href="#"><b>A+</b></li>
            <li><a href="#"><b>A-</b></li>
            <li><a href="#"><b>B+</b></li>
            <li><a href="#"><b>B-</b></li>
            </ul><br><br><br><br><br>
            <ul>
            <li><a href="#"><b>O+</b></li>
            <li><a href="#"><b>O-</b></li>
            <li><a href="#"><b>AB+</b></li>
            <li><a href="#"><b>AB-</b></li>
        </ul>
        </div>
        </body>
        <footer>

        <div id="footer">Footer</div>
        </footer>
    

</html>