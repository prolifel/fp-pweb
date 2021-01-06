<?php session_start();
    if($_SESSION["username"]){
        include "koneksi.php";
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $usia=$_POST['usia'];
        $query=mysqli_query($koneksi,"update biodata set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
        
        if($query){
            echo "Berhasil update data ke database ";
            ?><a href="tabel.php">Lihat data di Tabel</a><?php
        }else{
            echo("Gagal update data" . mysqli_error($koneksi));
        }
    }else{
        ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login
        dahulu</a><?php
    }
    
?> 
