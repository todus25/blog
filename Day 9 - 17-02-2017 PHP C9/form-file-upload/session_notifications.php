<?php

if( isset($_SESSION['successful']) && $_SESSION['successful'] == true )
{
	
	?>

		<div class="alert alert-success">
			<p>
				Congratulation! Product added to inventory successfully.
			</p>
		</div>

	<?php


	$_SESSION['successful'] = false;
}


if( isset($_SESSION['required']) && $_SESSION['required'] == true )
{
	
	?>

		<div class="alert alert-danger">
			<p>
				Sorry! You need to fill up all form fields.
			</p>
		</div>

	<?php


	$_SESSION['required'] = false;
}


if( isset($_SESSION['photo_max_size_exceed']) && $_SESSION['photo_max_size_exceed'] == true )
{
	
	?>

		<div class="alert alert-danger">
			<p>
				Sorry! Photo Must be under 250 KB.
			</p>
		</div>

	<?php


	$_SESSION['photo_max_size_exceed'] = false;
}

?>