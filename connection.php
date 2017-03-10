<?php


$con = mysqli_connect('localhost', 'root', 'mysql') or die('Could not connect to host');
mysqli_select_db($con, 'blog') or die('Could not connect to database');
?>