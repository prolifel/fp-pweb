<?php session_start();
    include "../koneksi.php";
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $role=$_POST['role'];
    $query=mysqli_query($koneksi,"select * from users where email='$email' and password='$password' and role='$role'");
    $cek=mysqli_num_rows($query);
    
    if($cek){
        switch ($role) {
            case "admin":
                $_SESSION['admin_login']=$username; 
                // echo("Admin berhasil");
                // TODO: Header ke home admin
                header("refresh:3;home.php");
                break;
            case "guru":
                $_SESSION['guru_login']=$username; 
                // echo("Guru berhasil");
                // TODO: Header ke home guru
                header("refresh:3;home.php");
                break;
            case "murid":
                $_SESSION['user_login']=$username; 
                // echo("Murid berhasil");
                // TODO: Header ke home murid
                header("refresh:3;home.php");
                break;
            default:
                $errorMsg[]="Email, password, atau role salah";
                break;
        }
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
            window.location = '../landing.php'
        </script>
        <?php
    }
?> 