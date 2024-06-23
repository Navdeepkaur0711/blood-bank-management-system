 <?php
 session_start();
 $un=$_SESSION['Uname'];
 session_destroy();
header('Location:admin-login.php');
 ?>