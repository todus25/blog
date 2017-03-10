<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
     <title>log in page</title>
	 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	 <style>
	 *{
			     box-sizing:border-box;
				 }
	 body{overflow:hidden;
	      position:relative;
		 background-color:#FF6656; }
		 
		.animate{animation:rotate 2s 1;
		animation-timing-function:linear;
		animation-fill-mode:forwards;}
		@keyframes rotate{from{tranform:roatateY(0deg);}
				                  to{transform:rotateY(360deg);}}
		  div{height:7cm;
		      width:12cm;
			  position:absolute;
			  background:white;
			  margin-left:11.5cm;
			  padding-left:10px;
			  color:rgba(0,0,255,0.7);
			  font-size:.45cm;
			  	
			  border-radius:8px;
			  
              animation:toptop 1.25s 1;
			  animation-timing-function:ease-out;
              animation-fill-mode: forwards;
		  }
			  
			  button:hover{background:#BC382E;
			               color:white;}
			  
			  input{width:80%;
			        height:1cm;
			        margin-right:5px;
			        margin-top:20px;
			        border:1px solid pink;
			        font-size:.4cm;
			        color:purple;
					padding-left:10px;}
			  
			  input:hover{border:1px solid blue;}
			  
			  button{height:.9cm;
			          width:2cm;
					  background:#BFD9EA;
					  border:0px;
					  
					  margin-top:10px;
					  font-size:.4cm;
					  color:blue;
					  border-radius:6px;
					  }
					  
			  #fnama{margin-left:33px;}
			  #fname{margin-left:5px;}
			  
			  #a{margin-left:169px;
			    }
				@keyframes toptop{from{top:0px;opacity:0;}
				                  to{top:3cm;opacity:2;}}
	 </style>
</head> 
<body>
              
<div>    

        <form id="pp" action="check.php" method="post" target="_blank">

              email<input   type="email" id="fnama" name="email" required="required"><br>
              PassWord<input   type="text" id="fname" name="password" required="required" ><br>
			  <button style="margin-left:350px;" type="submit" id="a">LogIn</button>
	           </form>
	 
	  <button style="margin-left:70px;" onclick="window.location='regi.php'">SignUp</button>
	 
	
</div>

<?php
            


       if(isset($_SESSION['t']) && $_SESSION['t']==true)
					{?>
					      <p>Wrong Email taken</p>
					     <?php
						 $_SESSION['t']=false; 
					    }



			        if(isset($_SESSION['fail']) && $_SESSION['fail']==true)
					{?>
					      <p>Wrong Email PassWord</p>
					     <?php
						 $_SESSION['fail']=false; 
					    }
					if(isset($_SESSION['save']) && $_SESSION['save']==true)
					{?>
					      <p>Registration Successful.U have to LogIn</p>
					     <?php
						 $_SESSION['save']=false; 
					    }
                     
                      ?>


<script>   
        $("button").click(function(){
    $("body").addClass("animate");
});


</script>

</body>
</html>
