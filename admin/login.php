<?php session_start();
    include "../koneksi.php";
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = mysqli_query($koneksi,"select * from users where email_user='$email' and password_user='$password'");
    $row = mysqli_fetch_assoc($query);

    if(!empty($row)){
        $role = $row['role'];
    }else{
        $role = 0;
    }

    if($role == 0){
        // Admin
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
        $query=mysqli_query($koneksi,"select * from users where email_user='$email' and password_user='$password'");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['role']   = $row['role'];
            $_SESSION['id']     = $row['id'];
            $_SESSION['nama']   = $row['nama_user'];
            $_SESSION['uname']  = $row['username_user'];
            // echo $_SESSION['role'];
            // die;
            if($role == 1){
                // Guru
                header("Location: ../guru/index.php");
                exit;
            } else if($role == 2) {
                // Murid
                echo $_SESSION['role'];
                // die;
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