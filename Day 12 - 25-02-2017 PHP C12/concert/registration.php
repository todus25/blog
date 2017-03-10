<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container well-sm">
		
		<?php include_once('menu.php'); ?>

		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-primary">
				
					<div class="panel-heading">Registration</div>
					
					<div class="panel-body">

						<?php include_once('notifications.php'); ?>

						<form class="form-horizontal" method="POST" action="registration-check.php" enctype="multipart/form-data">
							
							<div class="form-group">
								<label class="col-sm-3">Name</label>
								<div class="col-sm-9">
									<input type="text" name="name" required="required" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Email</label>
								<div class="col-sm-9">
									<input type="email" name="email" required="required" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Password</label>
								<div class="col-sm-9">
									<input type="password" name="password" required="required" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Phone No.</label>
								<div class="col-sm-9">
									<input type="text" name="phone_no" required="required" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Photo</label>
								<div class="col-sm-9">
									<input type="file" name="photo" required="required">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-3 col-sm-9 text-right">
									<hr>

									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>

						</form>


				</div>

			</div>
			</div>
		</div>

	</div>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>