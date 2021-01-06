<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Homepage</title>
    <style>
        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
        
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .bg-image {
            /* The image used */
            background-image: url("./assets/rustem-baltiyev-x_YN1GKSn-0-un.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    
    </style>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pemrograman Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <!-- dikanan -->
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-primary my-2 my-sm-0 mx-4" type="button" href="./admin/form_admin.php">Login</a>
                <a class="btn btn-secondary my-2 my-sm-0" type="button" href="./admin/form_register.php">Register</a>
            </form>
        </div>
    </nav>

    <main role="main" class="container">
        <div class="jumbotron bg-image">
            <h1>Tugas 4</h1>
            <p class="lead">Berikut ini adalah Tugas 4 Pemrograman Web untuk membuat CRUD
            dan login page menggunakan PHP dan local database</p>
            <!-- <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a> -->
        </div>
        <div class="jumbotron bg-image">
            <h1>Tugas 5</h1>
            <p class="lead border-bottom-primary">Berikut ini adalah Tugas 5 Pemrograman Web untuk membuat counter
            user dengan menggunakan file text</p>
            <hr/>
            <p class="counter-count">
                <?php
                    $filecounter="counter.txt";
                    $fl=fopen($filecounter,"r+");
                    $hit=fread($fl,filesize($filecounter));
                    echo("Anda pengunjung yang ke:");
                    // echo($hit);
                    fclose($fl);
                    $fl=fopen($filecounter,"w+");
                    $hit=$hit+1;
                    fwrite($fl,$hit,strlen($hit));
                    fclose($fl);
                ?>
            </p>
            <!-- <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a> -->
        </div>
        <div class="jumbotron bg-image">
            <h1>Tugas 6</h1>
            <p class="lead">Berikut ini adalah Tugas 6 Pemrograman Web untuk membuat Form Validation PHP</p>
            <a class="btn btn-lg btn-primary" href="./validation.php" role="button">Lihat&raquo;</a>
        </div>
        <div class="jumbotron bg-image">
            <h1>Tugas 7</h1>
            <p class="lead">
                Berikut ini adalah Tugas 7 Pemrograman Web untuk membuat chart dengan framework Javascript.
                Disini saya menggunakan framework Data-Driven Documents (D3) dengan menggunakan data saham teknologi
                (AAPL, AMZN, GOOG, IBM, MSFT) dari tahun 2013-2018 setiap tanggalnya.
            </p>
            <a class="btn btn-lg btn-primary" href="chart/index.html" role="button">Lihat&raquo;</a>
        </div>
        <div class="jumbotron bg-image">
            <h1>Tugas 9</h1>
            <p class="lead">
                Berikut ini adalah Tugas 9 Pemrograman Web untuk membuat log file saat mengupload sebuah gambar.
            </p>
            <form method="post" action="./img/sendFace.php">
                <div class="form-group">
                    <label for="idUser">Username</label>
                    <input type="text" class="form-control" name="idUser" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="form-group">
                    <label for="image">Base64 Image</label>
                    <input type="text" class="form-control" name="image" placeholder="Masukkan Base64 Image" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script>
        $('.counter-count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
</body>
</html>