<?php
$hostname ="localhost";
$Database = "finTech";
$username ="root";
$password = "";

$conn =  mysqli_connect($hostname,$username, $password,$Database);

if(!$conn){
    echo "connection error";
}

?>