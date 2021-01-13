<?php
    include "../koneksi.php";
    $idmp = null;
    if(isset($_GET['id']) &&  isset($_GET['idg']) && isset($_GET['mp'])){
        $mp = $_GET['mp'];
        $idSiswa = $_GET['id'];
        $idGuru = $_GET['idg'];
        switch($_GET['mp']){
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
    }
    
    $tugas1 = $_POST['tugas1'];
    $tugas2 = $_POST['tugas2'];
    $uts    = $_POST['uts'];
    $uas    = $_POST['uas'];
    $prak   = $_POST['prak'];
    $check  = mysqli_query($koneksi, "select id_nilai_siswa from nilai_siswa where id_mapel=$idmp and id_guru=$idGuru and id_siswa=$idSiswa");
    if(mysqli_num_rows($check)>0){
        $qstring = "update nilai_siswa set tugas1=$tugas1,tugas2=$tugas2,uts=$uts,uas=$uas,praktikum=$prak where id_guru=$idGuru and id_siswa=$idSiswa and id_mapel=$idmp";
        $queryres = mysqli_query($koneksi, $qstring);
        if($queryres) {
            header("Location: nilai.php?id=$mp");
            exit();
        }
    }
    // echo "Haloo ".$idmp;
    // exit();
    $qstring = "insert into nilai_siswa(id_nilai_siswa, id_mapel, id_guru, id_siswa, tugas1, tugas2, uts, uas, praktikum, komentar) 
                values (null, $idmp, $idGuru, $idSiswa, $tugas1, $tugas2, $uts, $uas, $prak, null)";
    $queryres = mysqli_query($koneksi, $qstring);
    if($queryres) {
        header("Location: nilai.php?id=$mp");
        exit();
    }
?>