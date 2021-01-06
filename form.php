<html>
<head><title>Form</title>
</head>
<body>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="20"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea cols="20" rows="5" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="text" name="usia" size="20"></td>
            </tr>
            <tr>
                <td><input type="submit" name="proses" value="Proses"></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>