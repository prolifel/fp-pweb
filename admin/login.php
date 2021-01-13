<?php session_start();
    include "../koneksi.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role= (int)$_POST['role'];
    if($role == 0){
        $query=mysqli_query($koneksi,"select * from admin where email_admin='$email' and password_admin='$password'");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['role']   = 0;
            $_SESSION['id']     = $row['id'];
            $_SESSION['nama']   = $row['nama_admin'];
            $_SESSION['uname']  = $row['username_admin'];
            header("Location: home.php");
            exit;
        } else {
            ?>
            <script>
                alert("Username atau password salah. Silakan login kembali");
                window.location = '../landing.php'
            </script>
            <?php
        }
    } else {
        $query=mysqli_query($koneksi,"select * from users where email_user='$email' and password_user='$password' and role=$role");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['role']   = $role;
            $_SESSION['id']     = $row['id'];
            $_SESSION['nama']   = $row['nama_admin'];
            $_SESSION['uname']  = $row['username_admin'];
            if($role == 1){
                header("Location: ../guru/index.php");
                exit;
            } else if($role == 2) {
                header("Location: ../murid2/index.php");
                exit;
            }
        } else {
            ?>
            <script>
                alert("Username atau password salah. Silakan login kembali");
                window.location = '../landing.php'
            </script>
            <?php
        }
    }
?> 