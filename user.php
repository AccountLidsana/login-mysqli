<?php 
include "connect.php";
session_start();

if(!isset($_SESSION['level']) == "user"){
    echo "<script>window.location='index.php'</script>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $sql = mysqli_query($conn,"SELECT * FROM login WHERE id = '$user_id'");
    while($result = mysqli_fetch_assoc($sql)){

    ?> 
    
    <ul>
        <li>ຊື່ :<?php  echo $result['fname']; ?></li>
        <li>ນາມສະກຸນ :<?php  echo $result['lname']; ?></li>
        <li>ຊື່ຜູ້ໃຊ້ງານ​ :<?php  echo $result['username']; ?></li>
        <li>ສະຖານະ :<?php  echo $result['level']; ?></li>
    </ul>


<?php 

  }

    
    }
?>
        <a href="logout.php">logout</a>
</body>
</html>