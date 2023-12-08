<?php
    include 'connect.php';

    if (isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        mysqli_query($conn,"delete from user where user_id = '$id'");
    }

    header("location:index.php");
?>