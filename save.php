<?php
session_start();
?>





<?php
$pass=$_POST['password'];
$email = $_POST['email'];
$user= $_POST['user'];
$password=$pass;


include_once 'connection.php'; 


$quer ="SELECT * FROM user_table WHERE email='$email'";
$result=mysqli_query($con,$quer);
$rows=mysqli_num_rows($result);


if($rows)
{   $_SESSION['t']=true;
header('location:login.php');
  exit();
  }
  
  
$query = "INSERT INTO user_table(email, username,password) VALUES('$email', '$user', '$password')";
//email check dite hobe
mysqli_query($con,$query) or die("Qurey execution unsuccessful.");
$_SESSION['save']=true;
header('Location:login.php');
exit();

?>