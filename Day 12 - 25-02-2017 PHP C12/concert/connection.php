<?php

$con = mysqli_connect('localhost', 'root', '') or die('Could not connect to host');
mysqli_select_db($con, 'concert') or die('Could not connect to database');

?>