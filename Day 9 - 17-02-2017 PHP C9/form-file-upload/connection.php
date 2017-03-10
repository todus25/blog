<?php

// connecting to host
mysql_connect('localhost', 'root', '') or die("Could not connect to host.");

// connecting to database
mysql_select_db('inventory') or die("Could not connect to database.");

?>