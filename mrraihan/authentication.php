<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "tms";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submit'])){


  $email = $_POST['email'];
  $password=md5($_POST['password']);
  $query="select * from user where email='$email' and password = '$password'";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    $_SESSION['email'] = $email;
    header("Location: ./user/index2.php");
  }
  else{
    header("Location: login.php");
        }
    
  }


mysqli_close($conn);
?>
