<?php
    include("koneksi.php");
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $usia=$_POST['usia'];
    $tablename="biodata";
    $sqlstr="insert into $tablename(nama, alamat, usia) value('$nama','$alamat','$usia')";
    $query=mysqli_query($koneksi,$sqlstr);

    if($query){
        echo "Berhasil input data ke database ";
        ?><a href="tabel.php">Lihat data di Tabel</a><?php
    }else{
        echo("Gagal input data " . mysqli_error($koneksi));
    }
?> 
