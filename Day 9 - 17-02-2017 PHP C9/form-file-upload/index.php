<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Inventory</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container well-sm">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Add Product Information</div>

					<div class="panel-body">

						<?php

							include_once('session_notifications.php');

						?>
						
						<form action="save.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
							
							<div class="form-group">
								<label class="col-sm-3">Product Title</label>

								<div class="col-sm-9">
									<input type="text" name="title" class="form-control" required="required">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Product Category</label>

								<div class="col-sm-9">
									<select name="category" class="form-control" required="required">
										<option value="">SELECT ONE</option>
										<option value="Electronics">Electronics</option>
										<option value="Foods">Foods</option>
										<option value="Clothes">Clothes</option>
										<option value="Shoes">Shoes</option>
										<option value="Grocery">Grocery</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Product Price</label>

								<div class="col-sm-9">
									<input type="number" name="price" class="form-control" required="required">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Product Quantity</label>

								<div class="col-sm-9">
									<input type="number" name="quantity" class="form-control" required="required">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Product Photo</label>

								<div class="col-sm-9">
									<input type="file" name="photo" required="required">
								</div>
							</div>


							<div class="form-group">
								<div class="col-md-offset-3 col-sm-9 text-right">

									<hr>

									<button type="reset" class="btn btn-default">Reset</button>

									<button type="submit" class="btn btn-success">Submit</button>							
								</div>
							</div>

						</form>

					</div>
				</div>
			</div>	
		</div>
	</div>

</body>
</html>