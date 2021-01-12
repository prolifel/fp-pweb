<?php session_start();
    require('../koneksi.php');

    $register = 1;
    // Register
    // 1: Guru
    // 2: Murid
    // 0: Gagal
    
    $nama = stripslashes($_REQUEST['nama']);
    $nama = mysqli_real_escape_string($koneksi,$nama); 

    $password = stripslashes($_REQUEST['password1']);
    $password = mysqli_real_escape_string($koneksi,$password);

    $role = stripslashes($_REQUEST['role']);
    $role = mysqli_real_escape_string($koneksi,$role);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($koneksi,$email);
    
    // $query = "INSERT into `users` (id, role, email, nama, username, password) VALUES (NULL, '$role', '$email', '$nama', NULL, '".md5($password)."')";
    // $result = mysqli_query($koneksi,$query);

    if (isset($_POST['kelas'])) {
        $register = 2;

        // ambil KelasID
        $kelas = $_POST['kelas'];
        $findKelas = mysqli_query($koneksi, "select `urutan` from `kelas` where nama='$kelas'");
        $temp = mysqli_fetch_assoc($findKelas);
        $kelasID = $temp['urutan'];

        // ambil UserID
        $findID = mysqli_query($koneksi, "select `id` from `users` where email_user='$email'");
        $temp1 = mysqli_fetch_assoc($findID);
        $userID = $temp1['id'];

        // verifikasi wajah
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Cek file gambar atau bukan
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $fileName = basename( $_FILES["fileToUpload"]["name"]);
                    $file = "../uploads/".$fileName;
                    $test = passthru("python3 face_detection.py -i $file");
                    
                    if (!$test) {
                        ?>
                            <script>
                                alert("Anda terverifikasi sebagai manusia");
                                window.location = '../landing.php';
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Foto tidak terverifikasi sebagai manusia. Silakan coba lagi!");
                                window.location = 'formRegisterMurid.php';
                            </script>
                        <?php
                        $register = 0;
                        exit();
                    }
                } else {
                    ?>
                        <script>
                            alert("Maaf ada error dalam upload file.");
                            window.location = 'formRegisterMurid.php';
                        </script>
                    <?php
                    $register = 0;
                    exit();
                }
            } else {
                ?>
                    <script>
                        alert("Mohon upload file gambar. Silakan coba lagi!");
                        window.location = 'formRegisterMurid.php'
                    </script>
                <?php
                $register = 0;
                exit();
            }
        }
    }

    // flag 
    if ($register > 0 && $register <= 2) {
        $query = "INSERT into `users` (id, role, email_user, nama_user, username_user, password_user) VALUES (NULL, $register, '$email', '$nama', NULL, '$password')";
        $result = mysqli_query($koneksi,$query);

        if ($register == 2) {
            $queryKelas = "insert into `kelas_siswa` (id, kelas_id, user_id) values (null, '$kelasID', '$userID')";
            $resulQueryKelas = mysqli_query($koneksi,$queryKelas);
        }
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    if($result){
        // Redirect ke home terlebih dahulu
        header("Location: ../landing.php?msg=registed");
        exit();
    }else{
        ?>
            <script>
                alert("Gagal mendaftar. Silakan coba lagi");
                window.location = '../landing.php'
            </script>
        <?php
    }
?>