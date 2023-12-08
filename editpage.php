<?php
include 'connect.php';
$id = $_GET['updateid'];
if (isset($_POST['update'])) {
    $name = $_POST['name2'];
    $email = $_POST['email2'];
    $phone = $_POST['phone2'];
    if($name !== ""){
        mysqli_query($conn,"update user set nama = '$name' where user_id = '$id'");
    }
    if($email !== ""){
        mysqli_query($conn,"update user set email = '$email' where user_id = '$id'");
    }
    if($phone !== ""){
        mysqli_query($conn,"update user set phone = '$phone' where user_id = '$id'");
    }
    header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>USER EDIT</title>
</head>
<body class="body">
    <section class="editbox">
        <div class="wrap">
            <h3 class="edittitle">Edit Data</h3><br>
            <form method="post">
               <label style="left: 20px; position:relative;">NAME</label><br>
               <input type="text" name="name2" class="form"><br>
               <br>
               <label style="left: 20px; position:relative;">EMAIL</label><br>
               <input type="text" name="email2" class="form"><br>
               <br>
               <label style="left: 20px; position:relative;">PHONE</label><br>
               <input type="text" name="phone2" class="form"><br>
               <br>
               <input type="submit" class="sub" value="SUBMIT" name="update">
            </form>
        </div>
    </section>

    
</body>
</html>