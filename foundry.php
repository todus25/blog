<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>home</title>
<style>

h1{text-align:center;
font-size:1cm;
color:purple;}
img{height:9cm;
display: block;
    margin: 0 auto;
	width:50%;}
div{height:5cm;
width:100%;
 
font-size:.8cm;
margin-top:.5cm;
font-style:italic;}
*:focus {
    -web-kit-outline:none;
    -moz-outline:none;
}
a { text-decoration: none; color: green;}
input[type="text"] { border: none;}
 *{
			     box-sizing:border-box;
				 }
	      input{font-size:.5cm;
		         float:left;
				 margin-left:3cm;
				 color:purple;}
				 form{border:2px solid grey;
					 box-shadow: 10px 10px 5px #888888;
				     height:2cm;
					 width:80%;
					 margin-top:15px;}
		  
		      ul{width:100%;
padding:0px;
margin:0px;

			    height:1.5cm;
			    background:#C4FFB2;
				}
				span{width:10%;}
			  li{
			  width:24.75%;
			     height:100%;
			     font-size:.6cm;
			     display:inline-block;
			     
				 color:green;
				 position:relative;
				 
			    }
				li:hover{color:black;
				         background:#7D82B8;}
	  p{margin-top:.3cm;
	    text-align:center;}
		a{margin-top:.3cm;
	    text-align:center;}
	  h1{text-align:center;
	       color:grey;
		   font-size:1cm;}
		  
	
</style>
</head>
<?php
  
if(isset($_SESSION['login'])&&$_SESSION['login']==true)
					{?>
				<style> #gg{display:none;}
				         li{width:33%}</style>
				
				     <?php
					    }
		if(!isset($_SESSION['login'])||!$_SESSION['login']==true)
					{?>
				<style> #l{display:none;}
				         li{width:33%}</style>
				
				     <?php
					    }				

     if(isset($_GET['x']))
     {   
		 
		$id=$_GET['x'];
		  }
 
else
	die("li");
     include_once('connection.php');
/*$query="SELECT * FROM article WHERE title='$title'";
mysqli_query($con,$query) or die('j');
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($result);*/


$query="SELECT article.title,article.image,article.description,user_table.username FROM article  LEFT JOIN user_table ON article.uid=user_table.id WHERE article.id='$id'" ;
mysqli_query($con,$query) or die('j');
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($result);
/*echo '<pre>';
print_r($rows);
exit();*/


?>




<body><ul>
    <li><a href="http://localhost/Blog/index.php"><p>Home</p><a href="http://localhost/Blog/i.php"></li>
	<li><a href="http://localhost/Blog/i.php"><p>Add File</p></a></li>
	<li id="gg"><a href="http://localhost/Blog/login.php"><p>Log in</p></a></li>
	<li id="l"><a href="http://localhost/Blog/logout.php"><p>Log Out</p></a></li>
	</ul>

 <h1><?php  echo $rows['title'];?></h1>
 <img src="upload/<?php  echo $rows['image']; ?>"/>
 <div><span></span><?php echo $rows['description'];?><div/>

 <p>written by<?php echo '<br>'. $rows['username'];?></p>
 
	




</body>
</html>

