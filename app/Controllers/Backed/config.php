<?php
$Database = 'finease';
$DATABASE_USER = 'root';
$Password = '';
$hostname = 'localhost';

$conn = mysqli_connect($hostname, $DATABASE_USER, $Password, $Database);
if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_error();
}


?>
