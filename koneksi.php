<?php
    // localhost
    $host="localhost";
    $user="root";
    $password="";
    $database="db_cc";

    // 000
    // $host="localhost";
    // $user="id15322271_root";
    // $password="pG~1)NE]li?m8mIN";
    // $database="id15322271_db_cc";
    
    $koneksi=mysqli_connect($host,$user,$password,$database);

    //cek koneksi
    if($koneksi){
        // echo "berhasil koneksi";
    }else{
        // echo "gagal koneksi";
    }
?> 