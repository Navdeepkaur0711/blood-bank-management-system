<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Donor Registration</title>
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
        <center> <div id="form" class="border">
        <center><h1> Donor Registration </center>
            <br><br><br>
            <form action="" method="post">            
            <table align="center">
                <tr>
                    <td width="150px" height="50px"><b> Name </b></td>
                    <td width="250px" height="50px"><input type="text" name="NAME" placeholder="Enter username" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="150px" height="50px"><b> Email</b></td>
                    <td width="250px" height="50px"><input type="text" name="EMAIL" placeholder="Enter username" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="100px" height="50px"><b>Password</b></td>
                    <td width="250px" height="50px"><input type="password" name="PASSWORD" placeholder="Enter Password" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="150px" height="50px"><b> Mobile</b></td>
                    <td width="250px" height="50px"><input type="text" name="MOBILE" placeholder="Enter username" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="100px" height="50px"><input type="submit" name="sub" value="save" ></td> 
                    <td width="100px" height="50px"><a href='donor-login.php'> Already register? Login here</a></td>
                </tr>
            </table>
            </form>
</div>
</div>    
        <?php
        if(isset($_POST['sub']))
        {
            $NAME=$_POST['NAME'];
            $EMAIL=$_POST['EMAIL'];
            $PASSWORD=$_POST['PASSWORD'];
            $MOBILE=$_POST['MOBILE'];
            $q=$db->prepare("INSERT INTO donor(NAME,EMAIL,PASSWORD,MOBILE) VALUES(:NAME,:EMAIL,:PASSWORD,:MOBILE)");
            $q->bindValue('NAME',$NAME);
            $q->bindValue('EMAIL',$EMAIL);
            $q->bindValue('PASSWORD',$PASSWORD);
            $q->bindValue('MOBILE',$MOBILE);
            if($q->execute())
            {
               $did = $db->lastInsertId();
               echo "<script>alert('Donor Registration Successful. Your Donor ID is $did')</script>";
             }
            else
            {
                echo "<script>alert('Donor Registration Unsuccessful')</script>";
            }    
        }
          
        ?>
        </div>
           
</body>
<footer>

        <div id="footer"></div>
        </footer>
    

</body>
</html>