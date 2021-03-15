<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "regentsdb";

$con = mysqli_connect($host, $username, $password, $database);

if(!$con)
{
    echo "Database not connected: ";
}

// else
// {
// 	echo "Database connected";
// }

?>