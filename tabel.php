<?php
    include "koneksi.php";
    $query=mysqli_query($koneksi,"select * from biodata");
    $jumlah=mysqli_num_rows($query);
    echo "Jumlah data ada : ".$jumlah;

    $c = 0;
?>
    <table border="1">
        <tr>
            <th>Nomor</th><th>Nama</th>
            <th>Alamat</th><th>Usia</th>
            <th>Aksi</th>
        </tr> 
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $c=$c+1;?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['alamat'];?></td>
            <td><?php echo $row['usia'];?></td>
        <td>
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
            <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
        </td>
        <?php
            }
        ?>
    </table><br />
<a href="form.php">Input data form</a> 