<?php

if( isset($_SESSION['registration_successful']) && $_SESSION['registration_successful'] == true )
{
	?>

		<div class="alert alert-success">
			Congratulation! Your registration process is successful.
		</div>

	<?php

		$_SESSION['registration_successful'] = false;
}


if( isset($_SESSION['wrong_credentials']) && $_SESSION['wrong_credentials'] == true )
{
	?>

		<div class="alert alert-danger">
			Sorry! Your email and password combination do not match.
		</div>

	<?php

		$_SESSION['wrong_credentials'] = false;
}

if( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true )
{
	?>

		<div class="alert alert-success">
			Welcome Back! You are now logged in.
		</div>

	<?php

		$_SESSION['logged_in'] = false;
}

?>