<?php
    function getMurid($idGuru){
        if(isset($_SESSION['id'])){
            $idGuru = $_SESSION['id'];
            include "../koneksi.php";
            $string = "select users.id, users.nama_user from users,kelas_siswa where users.id=kelas_siswa.siswa_id and kelas_siswa.guru_id=$idGuru order by users.nama_user";
            $query = mysqli_query($koneksi, $string);
            if(mysqli_num_rows($query)>0){
                return $query;
            }
        }
        return null;
    }

    function getNilaiSiswa($idSiswa, $idGuru, $mp){
        $idmp = null;
        switch($mp){
            case "biologi":
                $idmp = 1;
                break;
            case "fisika":
                $idmp = 2;
                break;
            case "kimia":
                $idmp = 3;
                break;
            case "math":
                $idmp = 4;
                break;
        }

        include "../koneksi.php";
        $string = "select tugas1,tugas2,uts,uas,praktikum from nilai_siswa where id_mapel=$idmp and id_guru=$idGuru and id_siswa=$idSiswa";
        $query = mysqli_query($koneksi, $string);
        if(mysqli_num_rows($query)>0){
            return $query;
        }

        return null;
    }
?>