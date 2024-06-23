<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<header>
<div class="full">
    <div class="inner_full">
        <div id="header"><h2>Blood Bank Management System</h2>
        <nav>
            <a href="index.php"> Home</a>
            <a href="admin-login.php"> Admin</a>
            <a href="donor-login.php"> Donor</a>
            <a href="patient-login.php"> Patient</a>
        </nav>
        </div>
</div>
</div>
</header>
<body>
        <div id ="body">
        <br><br><br><br><br><br><br>
        <center> <div id="form">
        <center><h1> Admin Login </center>
            <br><br><br>
            <form action="" method="post">            
            <table align="center">
                <tr>
                    <td width="150px" height="50px"><b> Enter Username</b></td>
                    <td width="250px" height="50px"><input type="text" name="un" placeholder="Enter username" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="100px" height="50px"><b>Enter Password</b></td>
                    <td width="250px" height="50px"><input type="password" name="ps" placeholder="Enter Password" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="100px" align="center"><input type="submit" name="sub" value="Login" ></td> 
                </tr>
            </table>
            </form>
</div>
        
        <?php
        if(isset($_POST['sub']))
        {
            $un=$_POST['un'];
            $ps=$_POST['ps'];
            $q=$db->prepare("SELECT * FROM admin WHERE name='$un' && Password='$ps'");
            $q->execute();
            $res=$q->fetchAll(PDO::FETCH_OBJ);
            if($res)
            {
                $_SESSION['Uname']=$un;
                header("location:admin-home.php");
        
            }
            else{
                echo "<script>alert('wrong user')</script>";
            }
        }
        ?>
        </div>
    </body>
    <footer>

        <div id="footer"></div>
    
    </footer>
</html>