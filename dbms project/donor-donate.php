<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Donor Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
<div class="full">
    <div class="inner_full">
        <div id="header"><h2>Blood Bank Management System</h2>
        <nav>
            <a href="donor-home.php"> Dashboard</a>
            <a href="donor-donate.php"> Donate</a>
            <a href="logout-donor.php"> logout</a>
        </nav>
        </div>
</div>
</div>
</header>
<body>
        <div id ="body">
            <br><br><br><br><br>
            <center> <div id="form">
            <?php
            $un=$_SESSION['Uname'];
             if(!$un)
            {
                header("Location:donor-login.php");
            }
            ?>
           <h1> <center> Blood Donation Form</h1><br>
           
            <form action="" method="post">            
            <table align="center">
            
                <tr>
                    <td width="150px" height="50px"><b> Name </b></td>
                    <td width="250px" height="50px"><input type="text" name="NAME" placeholder="Enter name" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="150px" height="50px"><b> Email</b></td>
                    <td width="250px" height="50px"><input type="text" name="EMAIL" placeholder="Enter Email" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="100px" height="50px"><b>Password</b></td>
                    <td width="250px" height="50px"><input type="password" name="PASSWORD" placeholder="Enter Password" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="150px" height="50px"><b> Mobile</b></td>
                    <td width="250px" height="50px"><input type="text" name="MOBILE" placeholder="Enter Mobile" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="150px" height="50px"><b> Blood Group</b></td>
                    <td width="250px" height="50px"><Select name ="BLOOD_GROUP">
                        <option> A+ </option>
                        <option> A- </option>
                        <option> B+ </option>
                        <option> B- </option>
                        <option> O+ </option>
                        <option> O- </option>
                        <option> AB </option>
                        <option> AB- </option>
                     </select>
        </td>
        </tr>
                <tr>
                    <td width="150px" height="50px"><b> Units(in ml)</b></td>
                    <td width="250px" height="50px"><input type="text" name="NO_OF_UNITS" placeholder="Enter Mobile" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="150px" height="50px"><b> disease</b></td>
                    <td width="250px" height="50px"><input type="text" name="DISEASE" placeholder="Enter disease if any" style="width:180px;height:40px;border-radius:10px;"></td>
                </tr>
                <tr>
                    <td width="100px" height="50px"><input type="submit" name="sub" value="save" ></td> 
                    
                </tr>
            </table>
            </form>
</div>
</div>
        
<?php
if(isset($_POST['sub']))
{
    $name=$_POST['NAME'];
    $email=$_POST['EMAIL'];
    $ps=$_POST['PASSWORD'];
    $mobile=$_POST['MOBILE'];
    $BLOOD_GROUP=$_POST['BLOOD_GROUP'];
    $units=$_POST['NO_OF_UNITS'];
    $d=$_POST['DISEASE'];

    try {
        // Start a transaction
        $db->beginTransaction();

        // Prepare and execute the first statement
        $stmt1 = $db->prepare("INSERT INTO donor(NAME,EMAIL,PASSWORD,MOBILE) VALUES(:NAME,:EMAIL,:PASSWORD,:MOBILE)");
        $stmt1->bindValue('NAME',$name);
        $stmt1->bindValue('EMAIL',$email);
        $stmt1->bindValue('PASSWORD',$ps);
        $stmt1->bindValue('MOBILE',$mobile);
        $stmt1->execute();

        // Get the ID of the last inserted row
        $DID = $db->lastInsertId();

        // Prepare and execute the second statement
        $stmt2 = $db->prepare("INSERT INTO donation(BLOOD_GROUP,NO_OF_UNITS,DISEASE) VALUES(:BLOOD_GROUP,:NO_OF_UNITS,:DISEASE)");
        $stmt2->bindValue('BLOOD_GROUP',$BLOOD_GROUP);
        $stmt2->bindValue('NO_OF_UNITS',$units);
        $stmt2->bindValue('DISEASE',$d);
        $stmt2->execute();

        // Commit the transaction
        $db->commit();echo "<script>alert('Donor Registration Succesfull')</script>";

    } catch (Exception $e) {
        // Rollback the transaction if an error occurs
        $db->rollback();
        echo "<script>alert('Donor Registration Unsuccesfull')</script>";
    }
}
?>
        </div>
        </body>
        <footer>

        <div id="footer"></div>
        </footer>
    

</html>