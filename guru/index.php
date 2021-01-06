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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="landing.php">e-Rapor</a>
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
    <h1 class="display-2 text-center">Daftar Mata Pelajaran</h1>
    <main role="main" class="container">
        <form action="nilai.php" method="get">
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="id" value="biologi">Biologi</button>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="id" value="fisika">Fisika</button>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="id" value="kimia">Kimia</button>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="id" value="math">Matematika</button>
        </form>
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