<?php
include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($conn,"insert into user(nama, email, phone) values('$name','$email','$phone')");

header("location:index.php");
?>