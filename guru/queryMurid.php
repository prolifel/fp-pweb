<?php
    session_start();
    function getMurid(){
        if(isset($_SESSION['id'])){
            $idGuru = $_SESSION['id'];
            include "../koneksi.php";
            $string = "select users.id, users.nama_user from users,kelas_siswa where users.id=kelas_siswa.siswa_id and kelas_siswa.guru_id=$idGuru";
            $query = mysqli_query($koneksi, $string);
            if(mysqli_num_rows($query)>0){
                return $query;
            }
        }
        return null;
    }
?>