<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'user_50421230';

$conn = new mysqli($host,$user,$pwd,$db_name);

if($conn->connect_error){
    die("Connection failed: ". $conn->connection_error);
}
?>