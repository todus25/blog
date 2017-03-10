<?php
session_start();

$title = $_POST['title'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// echo "<pre>";
// print_r($_FILES);
// exit();

// form validation check
if( empty($title) || empty($category) || empty($price) || empty($quantity) || empty($_FILES['photo']) )
{
	$_SESSION['required'] = true;
	
	header('Location: index.php');
	exit();
}


if( $_FILES['photo']['size'] > 250 * 1024 ) // 250 KB = 250 * 1024
{
	$_SESSION['photo_max_size_exceed'] = true;

	header('Location: index.php');
	exit();
}


include_once('connection.php');


// processing photo
$extension = '.jpg';

switch ($_FILES['photo']['type']) {
	
	case 'image/png':
		$extension = '.png';
		break;

	default:
		# code...
		break;
}

$photo = time() . $extension;


// processing photo
move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/products/' . $photo);


$query = "INSERT INTO products(title, category, price, quantity, photo) VALUES('$title', '$category', '$price', '$quantity', '$photo')";

// to execute the query
mysql_query($query) or die("Qurey execution unsuccessful.");

$_SESSION['successful'] = true;

header('Location: index.php');
exit();

?>