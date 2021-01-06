<?php session_start();
    // print_r($_SESSION);
    if($_SESSION["username"]){
        include "../koneksi.php";
        $query=mysqli_query($koneksi, "select * from biodata");
        $jumlah=mysqli_num_rows($query);
        echo "Selamat datang : ".$_SESSION['username'];
        echo "<br><br>";
        echo "Jumlah data ada : ".$jumlah;
        ?>
    
    <table border="1">
        <tr>
        <th>Nomor</th><th>Nama</th>
        <th>Alamat</th><th>Usia</th>
        <th>Aksi</th>
        </tr>
        <?php
        $no=0; 
        while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $no=$no+1;?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td><?php echo $row['usia'];?></td>
        <td>
        <a href="../koneksi/delete.php?id=<?php echo $row['id']; ?>" onclick="return
        confirm('Apakah anda yakin?')">Delete</a>
        <a href="../koneksi/update.php?id=<?php echo $row['id']; ?>">Update</a>
        </td>
        </tr>
        <?php
        }
        ?>
        </table><br />
        <a href="logout.php">Logout</a>
        <?php
    }else{
        ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login
        dahulu</a><?php
    }
?> 