<?php session_start();
    if($_SESSION["username"]){
        include "koneksi.php";
        $id=$_GET['id'];
        $query=mysqli_query($koneksi,"delete from biodata where id='$id'");
        
        if($query){
            ?><script language="javascript">document.location.href="tabel.php";</script><?php
        }else{
            echo "gagal hapus data";
        }
    }else{
        ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login
        dahulu</a><?php
    }
    
?> 