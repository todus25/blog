
<?php
session_start();
?>

<?php

$title=$_POST['title'];
$image=time().$_FILES['image']['name'];


$description = $_POST['description'];
$date = $_POST['date'];
$email=$_SESSION['email'];
//
if($_FILES['image']['size']>50000)
{$_SESSION['toolong']=true;
 header('location:i.php');
 exit();
}
move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$image );

include_once('connection.php');

$ask="SELECT id FROM user_table WHERE email='$email'";
 $askid=mysqli_query($con,$ask);
 
 $result=mysqli_fetch_assoc($askid);
 
 $bar=$result['id'];

 
 
$query="INSERT INTO article(title,image,description,uid) VALUES('$title','$image','$description','$bar')";
//$q="INSERT INTO article(title,image,description,uid) VALUES('a','b','c','5')";
 mysqli_query($con,$query) or die('hi');
 print_r($r);
 
 $result=mysqli_fetch_assoc($askid);
 
 $_SESSION['new']=true;
 header('location:i.php');
 exit();
 
 ?>









