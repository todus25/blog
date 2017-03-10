
<!DOCTYPE html>
<html>
<head>
<title>registration</title>
<style>
*{
			     box-sizing:border-box;
				 }

input{width:40%;
			        height:1cm;
			        margin-right:5px;
			        margin-top:20px;
			        border:1px solid pink;
			        font-size:.4cm;
			        color:purple;
					padding-left:10px;}
button:hover{background:purple;
			               color:white;}
input:hover{border:1px solid blue;
             text-align:center;}

			  button{height:1cm;
			          width:2cm;
					  background:grey;
					  border:0px;
					  opacity=.5;
					  margin-left:72px;
					  margin-top:20px;
					  font-size:.5cm;
					  color:white;
					  border-radius:6px;}


</style>





</head>
<body>
      <form  action="save.php" method="post">
  name:<input style="margin-left:33px;"  type="text" name="user" required="required" placeholder="ur name"></br>
 
	  email:<input style="margin-left:30px;" type="email" name="email" required="required" placeholder="mail id"></br>
	  
	  password:<input  style="margin-left:3px;" type="password" name="password" required="required" placeholder="password"></br>
	  
	 
	 <button type="submit">Save</button>
	  

      </form>





</body>
</html>

