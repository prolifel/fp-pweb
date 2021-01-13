<?php
    function getAllScore($idSiswa, $idmp){
        include "../koneksi.php";
        $qstring = "select tugas1,tugas2,uts,uas,praktikum from nilai_siswa where id_siswa=$idSiswa and id_mapel=$idmp";
        $query = mysqli_query($koneksi, $qstring);
        if(mysqli_num_rows($query)>0){
            return $query;
        }
        return null;
    }

    function getName($idSiswa){
        
    }
?>