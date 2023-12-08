<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>
    <title>USER DATABASE</title>
</head>
<body class="body">
    <section class="box1">
        <div class="wrap">
            <h1 class="title1">USER DATABASE</h1>
        </div>
    </section>
    <section class="box2">
        <div class="wrap">
            <h3 class="edittitle">INSERT DATA</h3><br>
            <form action="insert.php" method="post">
               <label style="left: 20px; position:relative;">NAME</label><br>
               <input type="text" name="name" class="form"><br>
               <br>
               <label style="left: 20px; position:relative;">EMAIL</label><br>
               <input type="text" name="email" class="form"><br>
               <br>
               <label style="left: 20px; position:relative;">PHONE</label><br>
               <input type="text" name="phone" class="form"><br>
               <br>
               <input type="submit" class="sub" value="SUBMIT">
            </form>
        </div>
    </section>
    <section class="box3">
        <div>
            <div class="container w-10 pt-3">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from user";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['user_id'];
                                $name = $row['nama'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                echo '<tr>';
                                echo '<td>'.$id.'</td>';
                                echo '<td>'.$name.'</td>';
                                echo '<td>'.$email.'</td>';
                                echo '<td>'.$phone.'</td>';
                                echo '<td>
                                <button class="updatebtn"><a href="editpage.php?updateid='.$id.'">UPDATE</a></button>
                                <button class="delbtn"><a href="delete.php?deleteid='.$id.'">DELETE</a></button>
                                </td>';
                                echo '</tr>';
                                
                            }
                           
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </section>
   
    
</body>
</html>