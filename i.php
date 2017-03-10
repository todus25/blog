<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>home</title>
<style>
*{
			     box-sizing:border-box;
				 }
h1{text-align:center;
color:purple;}
h2{text-align:center;
color:blue;
font-style: italic;}
body:after{
    content : "";
display: block;
position: absolute;
top: 0;
left: 0;
background-image: url("bg.jpg"); 
 background-size: 100% 100%;
width: 100%;
height: 100%;
opacity : 0.8;
z-index: -1;
 background-repeat: no-repeat;
   background-position: center;
background-attachment:fixed;
}


form{margin-top:2cm;
      margin-left:3cm;
	  color:green;
	  
	  font-weight: bold;
	 font-size:.7cm;
	  }
	  span{margin-top:2cm;}
 button{height:.9cm;
			          width:2cm;
					  background:#BFD9EA;
					  border:0px;
					  
					  margin-top:10px;
					  font-size:.4cm;
					  color:blue;
					  border-radius:6px;
					  }
					 button:hover{background:#BC382E;
			               color:white;}  
input{width:50%;
height:1cm;
padding-left:4px;}
#d{height:3cm;
width:80%;}

a { text-decoration: none; color: green;}

	      
				 
		  
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
		#v{margin-top:2cm;}  
		#i{margin-top:1cm;}
	#p{background:#7D82B8;
	color:white;}
</style>






</head>
<body>
<ul>
    <li><a href="http://localhost/Blog/index.php"><p>Home</a></p></li>
	<li id="p" ><a href="http://localhost/Blog/i.php"><p>Add File</p></a></li>
	<li id="gg"><a href="http://localhost/Blog/login.php"><p>Log in</p></a></li>
	<li id="l"><a href="http://localhost/Blog/logout.php"><p>Log Out</p></a></li>
	</ul>
	 .
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
if(!isset($_SESSION['login']) ||!$_SESSION['login']==true)
					{
					  header('location:login.php');
  exit();  }


			        if(isset($_SESSION['toolong']) && $_SESSION['toolong']==true)
					{?>
					      <h1>Image Size Is Very Long</h1>
					     <?php
						 $_SESSION['toolong']=false; 
					    }

 


			        if(isset($_SESSION['new']) && $_SESSION['new']==true)
					{?>
					      <h1>Article adding successful</h1>
					     <?php
						 $_SESSION['new']=false; 
					    }?>
						

<h2>Add article</h2>
      <form  action="mb.php" method="post" enctype="multipart/form-data" >
	  Title<input id="t" type="text" name="title" required="required"></br>
	  
	<span> Description</span> <textarea id="v" rows="7" cols="110" name="description" ></textarea></br>
	  
	  Image<input id="i" type="file" name="image" ></br>
	  
	  
	  
	 <button style="background:grey;" type="submit">Go On
	 </button>
	  

      </form>





</body>
</html>

