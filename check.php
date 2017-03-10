<?php
session_start();
?>

<?php
$pass=$_POST['password'];
$password=$pass;
$email=$_POST['email'];


include_once 'connection.php';

$query="SELECT *FROM user_table WHERE email='$email' AND password='$password' AND status='0'";

$result=mysqli_query($con,$query)or die("hi");

$rows=mysqli_num_rows($result);

if($rows<1)
{   $_SESSION['fail']=true;
	header('location:login.php');
  exit();
  }
  
$_SESSION['login']=true;
$_SESSION['email']=$email;

header('location:index.php');
  exit();
  ?>









?>