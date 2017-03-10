<?php
session_start();

$name = mysql_real_escape_string($_POST['name']);
$email = $_POST['email'];
$password = md5($_POST['password']);
$phone_no = $_POST['phone_no'];

$photo = time().'.jpg';

move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$photo);

include_once('connection.php');

$query = "INSERT INTO participants(name, email, password, phone_no, photo) VALUES('$name', '$email', '$password', '$phone_no', '$photo')";


mysqli_query($con, $query) or die('Query execution unsuccessful.');

$_SESSION['registration_successful'] = true;

header('Location: login.php');
exit();

?>