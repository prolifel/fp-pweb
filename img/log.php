<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="card">
            <div class="container-fluid">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('../koneksi.php');
            
                                $q = $koneksi->real_escape_string('SELECT * FROM log');
                                $q = $koneksi->query($q);
                                $i = 1;
                                while($res = $q->fetch_assoc()):
                            ?>
            
                            <tr>
                                <td class="align-middle"><?= $i++ ?></td>
                                <td class="align-middle"><?= $res['nama'] ?></td>
                                <td class="align-middle"><?= $res['timestamp'] ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </body>
</html>