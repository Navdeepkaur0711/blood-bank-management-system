<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Donor Home</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<header>
<div class="full">
    <div class="inner_full">
        <div id="header"><h2>Blood Bank Management System</h2>
        <nav>
            <a href="donor-home.php">Dashboard</a>
            <a href="donor-donate.php"> Donate</a>
            <a href="logout-donor.php"> logout</a>
        </nav>
        </div>
</div>
</div>
</header>
<body>
        <div id ="body">
            <br><br><br><br><br><br>
            
            <?php
            $un=$_SESSION['Uname'];
             if(!$un)
            {
                header("Location:donor-login.php");
            }
            ?>
           
           <style>
                body{
                    background-image:url("p1.jpg");
                    
                    background-size:cover;
                    height: 100px;
                    width:100%;

                }
                
                </style> 

        </div>
        </body>
        <footer>

        <div id="footer"></div>
        </footer>
    

</html>