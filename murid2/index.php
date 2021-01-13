<?php
    session_start();
    $loginFlag = false;
    if(isset($_SESSION['id']) & isset($_SESSION['role'])){
        if($_SESSION['role'] == 1){
            $loginFlag = true;
        }
    }
    if($loginFlag == false) {
        header("Location: ../landing.php?msg=notlogin");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Homepage | GURU</title>
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

        #crd {
            box-shadow: 1px 2px 6px rgba(255,165,0, 0.4), 2px 6px 7px rgba(255,165,0, 0.3);
        }
        #iya {
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="index.php">e-Rapor</a>

        <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span> </span>
            <span> </span>
            <span> </span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <!-- dikanan -->
            <a class="btn btn-warning my-2 my-sm-0 mx-4" type="button" href="../admin/logout.php">Logout</a>
        
        </div>
    </nav>
    
    <div class="container">
        <div class="card text-black bg-warning mb-3" id="iya">
            <div class="card-header">
                <h5>Hai, *nama murid*</h5>
            </div>
            <div class="card-body">
            <h3 class="card-title">Nilai</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
    </div>
<br>
<br>
  <div class="container-fluid d-flex justify-content-center" id="">
      
    <div class="row card-columns" >
        <div class="card col-4" style="max-width: 19rem;" id="iya">
                <img class="card-img-top" src="../assets/bio.png" alt="Card image cap">
                <div class="card-body" >
                    <h5 class="card-title">BIOLOGI</h5>
                    <p class="card-text">Jam 14:00 - 15:50</p>
                    
                    <div class="accordion" id="accordionExample">
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Tugas 1
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tugas 2
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                UTS
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                EAS
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                                Praktikum
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="card col-4" style="max-width: 19rem;" id="iya">
            <img class="card-img-top" src="../assets/fisik.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">FISIKA</h5>
                <p class="card-text">Jam 15:50 - 18:50</p>
                <div class="accordion" id="accordionExample">
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-center" type="button" data-toggle="collapse" data-target="#collapseOneb" aria-expanded="false" aria-controls="collapseOne">
                                Tugas 1
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOneb" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwob" aria-expanded="false" aria-controls="collapseTwo">
                                Tugas 2
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwob" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeb" aria-expanded="false" aria-controls="collapseThree">
                                UTS
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThreeb" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefourb" aria-expanded="false" aria-controls="collapseThree">
                                EAS
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefourb" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefiveb aria-expanded="false" aria-controls="collapseThree">
                                Praktikum
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefiveb" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card col-4" style="max-width: 19rem;" id="iya">
            <img class="card-img-top" src="../assets/kimia.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">KIMIA</h5>
                <p class="card-text">Jam 19:00 - 20:50</p>
                <div class="accordion" id="accordionExample">
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-center" type="button" data-toggle="collapse" data-target="#collapseOnec" aria-expanded="false" aria-controls="collapseOne">
                                Tugas 1
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOnec" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoc" aria-expanded="false" aria-controls="collapseTwo">
                                Tugas 2
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwoc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThreec" aria-expanded="false" aria-controls="collapseThree">
                                UTS
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThreec" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefourc" aria-expanded="false" aria-controls="collapseThree">
                                EAS
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefourc" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefivec" aria-expanded="false" aria-controls="collapseThree">
                                Praktikum
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefivec" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card col-4" style="max-width: 19rem;" id="iya">
                <img class="card-img-top" src="../assets/math12.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MATEMATIKA</h5>
                    <p class="card-text">Jam 14:00 - 15:50</p>
                    <div class="accordion" id="accordionExample">
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-center" type="button" data-toggle="collapse" data-target="#collapseOned" aria-expanded="false" aria-controls="collapseOne">
                                Tugas 1
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOned" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwod" aria-expanded="false" aria-controls="collapseTwo">
                                Tugas 2
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwod" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThreed" aria-expanded="false" aria-controls="collapseThree">
                                UTS
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThreed" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefourd" aria-expanded="false" aria-controls="collapseThree">
                                EAS
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefourd" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" id="crd">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefived" aria-expanded="false" aria-controls="collapseThree">
                                Praktikum
                                </button>
                            </h2>
                            </div>
                            <div id="collapsefived" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body text-black">
                                    <h1>100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
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