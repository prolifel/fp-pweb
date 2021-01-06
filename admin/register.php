<?php session_start();
    require('../koneksi.php');
    
    $nama = stripslashes($_REQUEST['nama']);
    $nama = mysqli_real_escape_string($koneksi,$nama); 

    $password = stripslashes($_REQUEST['password1']);
    $password = mysqli_real_escape_string($koneksi,$password);

    $role = stripslashes($_REQUEST['role']);
    $role = mysqli_real_escape_string($koneksi,$role);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($koneksi,$email);
    
    $query = "INSERT into `users` (id, role, email, nama, username, password) VALUES (NULL, '$role', '$email', '$nama', NULL, '".md5($password)."')";
    $result = mysqli_query($koneksi,$query);

    if($result){
        $_SESSION['role'] = $role;
        ?>
            <script>
                window.location = 'home.php'
            </script>
        <?php
        exit();
    }else{
        ?>
            <script>
                alert("Gagal mendaftar. Silakan coba lagi");
            </script>
        <?php
    }
?>