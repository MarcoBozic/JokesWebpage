<?php

// four variables used to connect the database
$host = "localhost";
$username = "root";
$user_pass = "root";
$database_in_use = "test";

// create a database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

?>