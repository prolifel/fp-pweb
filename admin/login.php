<?php session_start();
    include "../koneksi.php";
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
    $cek=mysqli_num_rows($query);
    
    if($cek){
        $_SESSION['username']=$username; 
        ?>
        <script>
            window.location = 'home.php'
        </script>
        <?php
        // header("Location: home.php");
        exit();
    }else{
        ?>
        <script>
            alert("Username atau password salah. Silakan login kembali");
            window.location = 'form_admin.php'
        </script>
        <?php
    }
?> 