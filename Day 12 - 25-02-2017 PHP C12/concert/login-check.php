<?php
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

include_once('connection.php');

$query = "SELECT * FROM participants WHERE email = '$email' AND password = '$password' LIMIT 1";

$result = mysqli_query($con, $query) or die('Query execution unsuccessful.');

if( mysqli_num_rows($result) > 0 )
{
	$_SESSION['logged_in'] = true;

	header('Location: participants.php');
	exit();
}
else
{
	$_SESSION['wrong_credentials'] = true;

	header('Location: login.php');
	exit();
}

?>