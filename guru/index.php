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
            padding-top: 6rem;
            background-color: rgb(232, 235, 238); 
            background-image: url("../assets/bgguru.png");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
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

        .card {
            box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.2), 5px 6px 20px rgba(0, 0, 0, 0.1);
        }
        .card-img-top{
            height: 215px;
            width: 500px;
        }
        #contain {
            margin-top: 5%;
            margin-left: 20%;
            align-items: center;
        }
        .btn {
            box-shadow: 3px 4px 8px rgba(255,165,0, 0.4), 5px 6px 20px rgba(255,165,0, 0.3);
        }
        
        
    </style>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="landing.php">e-Rapor</a>

        <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span> </span>
            <span> </span>
            <span> </span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <!-- dikanan -->
            
        
        </div>
    </nav>
    
    <div class="container">
        <div class="card text-black bg-warning mb-3">
            <div class="card-header">
                <h5>Hai, Guru!</h5>
            </div>
            <div class="card-body">
            <h3 class="card-title">Mata Pelajaran</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
    </div>
<br>
<br>
  <div class="container-fluid d-flex justify-content-center" id="">
      
    <div class="row card-columns" >
        <div class="card col-4" style="max-width: 19rem;">
                <img class="card-img-top" src="../assets/bio.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">BIOLOGI</h5>
                    <p class="card-text">Jam 14:00 - 15:50</p>
                    <form action="nilai.php" method="get">
                        <button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value="biologi">Input Nilai</button>
                    </form>
                </div>
            </div>
        <div class="card col-4" style="max-width: 19rem;">
            <img class="card-img-top" src="../assets/fisik.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">FISIKA</h5>
                <p class="card-text">Jam 15:50 - 18:50</p>
                <form action="nilai.php" method="get">
                    <button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value="fisika">Input Nilai</button>
                </form>
            </div>
        </div>
        <div class="card col-4" style="max-width: 19rem;">
            <img class="card-img-top" src="../assets/kimia.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">KIMIA</h5>
                <p class="card-text">Jam 19:00 - 20:50</p>
                <form action="nilai.php" method="get">
                    <button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value="kimia">Input Nilai</button>
                </form>
            </div>
        </div>
        <div class="card col-4" style="max-width: 19rem;">
                <img class="card-img-top" src="../assets/math12.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MATEMATIKA</h5>
                    <p class="card-text">Jam 14:00 - 15:50</p>
                    <form action="nilai.php" method="get">
                        <button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value="math">Input Nilai</button>
                    </form>
                </div>
        </div>
    </div>
    
    </div>
  
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