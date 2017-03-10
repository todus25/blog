<?php

include_once('connection.php');

$query = "SELECT * FROM products";
$result = mysql_query($query);

if(mysql_num_rows($result) < 1)
{
	echo "Sorry! No products available yet.";
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container well-sm">
		
		<div class="row">
			
		<?php

			while($row = mysql_fetch_array($result))
			{


				?>


					<div class="col-md-6">
						<img src="http://localhost/form-file-upload/uploads/products/<?php echo $row['photo'];?>" class="img-thumbnail">
						<h3><?php echo $row['title'];?></h3>
						<p>Category: <?php echo $row['category'];?></p>
						<p>Quantity: <?php echo $row['quantity'];?></p>
						<p>Price: 1500</p>
					</div>


				<?php

			}

		?>

		</div>

	</div>

</body>
</html>