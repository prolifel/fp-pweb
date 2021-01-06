<?php
    include("../koneksi.php");

    $username = $_POST['idUser'];
    $password = md5($_POST["password"]);
    $base64_string = $_POST['image'];

    // echo $base64_string;
    // echo $username;
    // echo $password;

    $query=mysqli_query($koneksi,"select * from admin where username='".$username."' and password='".$password."'");
    $cek=mysqli_num_rows($query);

    if ($cek>0) {
        $image_name = "C:\\xampp\\htdocs\\koneksi\\img\\".$username;

        if (!file_exists($image_name)) {
        if (!mkdir($image_name)) {
            $m=array('msg' => "REJECTED, cant create folder");
            echo json_encode($m);
            return;}
        }

        $fi = new FilesystemIterator($image_name, FilesystemIterator::SKIP_DOTS);
        $fileCount = iterator_count($fi)+1;
        $data = explode(',', $base64_string);
        $fullName = $image_name."\\X__".$fileCount."_". date("YmdHis") .".png";
        $ifp = fopen($fullName, "wb");
        fwrite($ifp, base64_decode($data[1]));
        fclose($ifp);
        if (!$ifp){
            $m=array('msg' => "REJECTED, ".$fullName."not saved");
            echo json_encode($m);
            return;}

        // $command = escapeshellcmd("python checkFace.py ".$fullName);
        // $output = shell_exec($command);

        $fi = new FilesystemIterator($image_name, FilesystemIterator::SKIP_DOTS);
        $fileCount = iterator_count($fi);
        $m = array('msg' => "Berhasil Mengirim"." total(".$fileCount.")");
        echo json_encode($m);

        $log = mysqli_query($koneksi, "insert into log(nama) values ('$username')");
        $queryLog = mysqli_query($koneksi, "select * from log");

        header("Location: ./log.php");
    }else{
        ?> 
            <script>
                alert("Username atau password salah!");
            </script>
        <?php
    }
?>
