<?php
session_start();

if( !isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true )
{
	header('Location: login.php');
	exit();
}

include_once('connection.php');

$query = "SELECT * FROM participants ORDER BY name ASC";

$result = mysqli_query($con, $query) or die("Query execution unsuccessful.");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Participants</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container well-sm">
		
	<?php include_once('menu.php'); ?>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Participants List</div>
				<div class="panel-body">
					<?php include_once('notifications.php');?>

					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone No.</th>
								<th>Photo</th>
							</tr>
						</thead>

						<tbody>
							
							<?php

							while ($row = mysqli_fetch_assoc($result)) 
							{
								?>
									<tr>
										<td class="name"><?php echo $row['name'];?></td>
										<td><?php echo $row['email'];?></td>
										<td><?php echo $row['phone_no'];?></td>
										<td>
											<img src="uploads/<?php echo $row['photo'];?>" height="80" width="80">
										</td>
									</tr>
								<?php
							}

							?>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>

	</div>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>