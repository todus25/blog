<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>home</title>
<style>
*:focus {
    -web-kit-outline:none;
    -moz-outline:none;
}
input[type="text"] { border: none }
</style>
</head>
<body>
 <h1>All Titles</h1>
	 
<?php
       $g=0;
	   
     include_once('connection.php');
$query="SELECT * FROM article";
$result=mysqli_query($con,$query);
//form while er agey diley hoto na..


while($rows=mysqli_fetch_assoc($result))
{
?>  <form method="post" action="http://localhost/Blog/foundry.php" >
	
<h2><input readonly type="text" name="a" value="<?php echo $rows['title'];?>"></input></h2>
	 <button type="submit"  >go</button>
	</form><?php 
//$_SESSION['title'][$g]=$rows['title'];

//$g=$g+1;
}
	//print_r($rows['title']);
	//print_r($rows['email']);
	//echo'</br>';	   
//$lines=$lines-1;
	//echo '<pre>';//while loop er vitore na likle kaj korbe na..//print_r($rows);
?>






</body>
</html>

