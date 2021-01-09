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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    <?php
            $matkul = null;
            if(isset($_GET)){
                $matkul = $_GET['id'];
            }
        ?>
    <div class="container">
        <div class="card text-black bg-warning mb-3" style="max-width: 25rem;">
        <div class="card-header">
        <h3 class="display-4 text-center"><?php echo $matkul;?></h3>
            </div>
            <div class="card-body">
            <h3 class="card-title ">Input Nilai Murid</h5>
            </div>
        </div>
    </div>
    <div class="container">
    
    <div id="accordion">
        
        <div class="card bg-dark" style="max-width: 19rem;">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Naufal Rafi Akbar H.
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a class="btn btn-warning" data-toggle="collapse" href="#collapsetgsA" role="button" aria-expanded="false" aria-controls="collapsetgsA">
                    Tugas 1
                </a>
                <div class="collapse" id="collapsetgsA">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            
                <a class="btn btn-warning" data-toggle="collapse" href="#collapseTGS2A" role="button" aria-expanded="false" aria-controls="collapseTGS2A">
                    Tugas 2
                </a>
                <div class="collapse" id="collapseTGS2A">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUTSA" role="button" aria-expanded="false" aria-controls="collapseUTSA">
                   UTS
                </a>
                <div class="collapse" id="collapseUTSA">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUASA" role="button" aria-expanded="false" aria-controls="collapseUASA">
                    UAS
                </a>
                <div class="collapse" id="collapseUASA">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapsePrakA" role="button" aria-expanded="false" aria-controls="collapsePrakA">
                    Praktikum
                </a>
                <div class="collapse" id="collapsePrakA">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <br>
        
        <div class="card bg-dark" style="max-width: 19rem;">
            <div class="card-header" id="headingTwo" >
            <h5 class="mb-0">
                <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Clement Prolifel
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <a class="btn btn-warning" data-toggle="collapse" href="#collapsetgsB" role="button" aria-expanded="false" aria-controls="collapsetgsB">
                    Tugas 1
                </a>
                <div class="collapse" id="collapsetgsB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            
                <a class="btn btn-warning" data-toggle="collapse" href="#collapseTGS2B" role="button" aria-expanded="false" aria-controls="collapseTGS2B">
                    Tugas 2
                </a>
                <div class="collapse" id="collapseTGS2B">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUTSB" role="button" aria-expanded="false" aria-controls="collapseUTSB">
                   UTS
                </a>
                <div class="collapse" id="collapseUTSB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUASB" role="button" aria-expanded="false" aria-controls="collapseUASB">
                    UAS
                </a>
                <div class="collapse" id="collapseUASB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapsePrakB" role="button" aria-expanded="false" aria-controls="collapsePrakB">
                    Praktikum
                </a>
                <div class="collapse" id="collapsePrakB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
           
            </div>
            </div>
        </div>
        
        <br>
        
        <div class="card bg-dark" style="max-width: 19rem;">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Edo Yogatama
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            <a class="btn btn-warning" data-toggle="collapse" href="#collapsetgsC" role="button" aria-expanded="false" aria-controls="collapsetgsC">
                    Tugas 1
                </a>
                <div class="collapse" id="collapsetgsC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            
                <a class="btn btn-warning" data-toggle="collapse" href="#collapseTGS2C" role="button" aria-expanded="false" aria-controls="collapseTGS2C">
                    Tugas 2
                </a>
                <div class="collapse" id="collapseTGS2C">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUTSC" role="button" aria-expanded="false" aria-controls="collapseUTSC">
                   UTS
                </a>
                <div class="collapse" id="collapseUTSC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUASC" role="button" aria-expanded="false" aria-controls="collapseUASC">
                    UAS
                </a>
                <div class="collapse" id="collapseUASC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapsePrakC" role="button" aria-expanded="false" aria-controls="collapsePrakC">
                    Praktikum
                </a>
                <div class="collapse" id="collapsePrakC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
    
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