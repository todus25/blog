<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>home</title>
<style>
h2:nth-child(odd){background:rgba(255, 0, 0, 0.3);
height:1.5cm;padding-top:0px;}
h2:nth-child(even){background:rgb(255,99,71);height:1.5cm;}
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
			  li{
			  width:24.75%;
			     height:100%;
			     font-size:.6cm;
			     display:inline-block;
			     
				 color:green;
				 position:relative;
				 
			    }
				li:hover{color:white;
				         background:#7D82B8;}
	  p{margin-top:.3cm;
	    text-align:center;}
		a{margin-top:.3cm;
	    text-align:center;}
	  h1{text-align:center;
	       color:grey;
		   font-size:1cm;}
		  
	#p{background:#7D82B8;
	color:white;}

</style>
</head>
<body><ul>
    <li id="p"><p>Home</p></li>
	<li><a href="http://localhost/Blog/i.php"><p>Add File</p></a></li>
	<li id="gg"><a href="http://localhost/Blog/login.php"><p>Log in</p></a></li>
	<li id="l"><a href="http://localhost/Blog/logout.php"><p>Log Out</p></a></li>
	</ul>
 <h1>All Posts</h1>
	 
<?php
if(!isset($_SESSION['login'])||!$_SESSION['login']==true)
					{?>
				<style> #l{display:none;}
				         li{width:33%}</style>
				
				     <?php
					    }				


if(isset($_SESSION['login'])&&$_SESSION['login']==true)
					{?>
				<style> #gg{display:none;}
				         li{width:33%}</style>
				
				     <?php
					    }



       $g=0;
	   
     include_once('connection.php');
$query="SELECT * FROM article";
$result=mysqli_query($con,$query);
//form while er agey diley hoto na..


while($rows=mysqli_fetch_assoc($result))
{$f;
  
	
?><h2><a href="http://localhost/Blog/foundry.php?x=<?php echo $rows['id'];?>" </a><p> <?php echo $rows['title'];?></p></h2><?php 
}
?>






</body>
</html>

