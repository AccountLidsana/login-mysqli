<?php 

session_start();
include "connect.php";

if(isset($_POST['submit'])){
    
    $username =htmlspecialchars(htmlspecialchars(mysqli_real_escape_string($conn,$_POST['username']),ENT_COMPAT));
    $password =htmlspecialchars(htmlspecialchars(mysqli_real_escape_string($conn,$_POST['password']),ENT_COMPAT));
    $passwordHash = md5($password);

    // window.history.back() ມັນຈະຍອ້ນກັບໄປຫນ້າລອກອິນແລະຈະບໍ່ເຮັດໃຫ້ຂໍ້ມູນເກົ່າມັນລົບຈະບໍ່ເຮັດໃຫ້ເສຍເວລາປ້ອນໃຫມ້ອິກ


    if(empty($username)){
       
        echo "<script>alert('ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ງານກ່ອນ');window.history.back()</script>";


    }else if(empty($password)){
        
        echo "<script>alert('ກະລຸນາປ້ອນຜ່ານກ່ອນ');window.history.back()</script>";

    }
    else{

    // ເຊັກວ່າມີຂໍ້ມູນໃນລະບົບຫຼືບໍ
    $sql = mysqli_query($conn ,"SELECT * FROM login WHERE username = '$username'");

    if($row = mysqli_num_rows($sql) > 0){

    // ເຊັກຂໍ້ມູນເຂົ້າສູ່ລະບົບ
    $sql_check = mysqli_query($conn ,"SELECT * FROM login WHERE username = '$username' AND password = '$passwordHash' ");

    $result = mysqli_fetch_assoc($sql_check);

    $_SESSION['username'] = $result['username'];
    $_SESSION['password'] = $result['password'];
    $_SESSION['level'] = $result['level'];

    if($_SESSION['level'] == "admin"){

    $_SESSION['admin_id'] = $result['id'];
    echo "<script>alert('ເຂົ້າສູ່ລະບົບແອດມິນສຳເລັດ');window.location='admin.php'</script>";

    }else if($_SESSION['level'] == "user"){

    $_SESSION['user_id'] = $result['id'];
    echo "<script>alert('ເຂົ້າສູ່ລະບົບພະນັກງານສຳເລັດ');window.location='user.php'</script>";
    header("location:user.php");

    

    }else{

    echo "<script>alert('ຊື່ຜູ້ໃຊ້ແລະລະຫັດບໍ່ຖືກຕ້ອງກວດສອບຄືນໃຫມ່');window.history.back()</script>";

    }

    }else{

        echo "<script>alert('ບໍ່ມີບັນຊີນີ້ໃນລະບົບ');window.history.back()</script>";

    }
    

    }

    



}





?>