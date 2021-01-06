<?php session_start();
    require('../koneksi.php');
    
    if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($koneksi,$username); 

        $password = stripslashes($_REQUEST['password1']);
        $password = mysqli_real_escape_string($koneksi,$password);

        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($koneksi,$name);
        
        $query = "INSERT into `admin` (id, nama, username, password) VALUES (NULL, '$name', '$username', '".md5($password)."')";
        $result = mysqli_query($koneksi,$query);
    
        if($result){
            $_SESSION['username'] = $username;
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
    }else{
        ?>
            <script>
                alert("Username tidak dapat ditemukan. Silakan mendaftar kembali");
                window.location = 'index.php'
            </script>
        <?php
    }
?>