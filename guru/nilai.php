<?php
    session_start();
    $loginFlag = false;
    if(isset($_SESSION['id'])){
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
    <title>Homepage</title>
    <style>
        body {
            min-height: 75rem;
            background-color: rgb(232, 235, 238); 
            background-image: url("../assets/bgnilai.png");
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

        .wrapper {
           display: inline-flex;
            align-items: stretch;
            position: relative;
        }
        /* .wrapper {
            display: flex;
            align-items: stretch;
        } */

        #sidebar {
            padding-top: 55px;
            width: 250px;
            max-width: 250px;
            height: 279vh;
            background: #f0ad4e;
            color: #FFF;
            transition: all 0.3s;
            /* position: fixed; */
            z-index: 999;
        }

        #sidebar.active {
            margin-left: -250px;
        }
        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            /* //border-bottom: 1px solid #47748b; */
        }

        #sidebar ul p {
            color: black;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 20px;
            font-size: 1.1em;
            display: block;
            color: black;
        }
        #sidebar ul li a:hover {
            color: #FFF;
            background: #292b2c;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
        #judul {
            padding-left: 100px;
            padding-top: 100px;
            display: inline-table;
            position: absolute;
        }
        #panel {
            padding-left: 100px;
            display: inline-block;
            padding-top: 350px;
            position: absolute;
            overflow: auto;
        }
        #konten {
            margin-bottom: 7px;
        }
        .card {
            box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.2), 5px 6px 20px rgba(0, 0, 0, 0.1);
        }
        #logout {
            /* margin-top: 300px; */
        }
    
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="landing.php">e-Rapor</a>

        <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span> </span>
            <span> </span>
            <span> </span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            
            
        
        </div>
    </nav>  -->
<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header bg-dark">
                <h3>Hai, Guru!</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="nilai.php?id=biologi" class="btn">BIOLOGI</a>
                    
                </li>
                
                <li>
                    <a href="nilai.php?id=fisika" class="btn">FISIKA</a>
                    
                </li>

                <li>
                    <a href="nilai.php?id=kimia" class="btn">KIMIA</a>
                
                </li>

                <li>
            
                    <a href="nilai.php?id=math" class="btn" >MATH</a>
            
                </li>
                <li>
                    <div class="d-grid gap-2 col-6 mx-auto" id="logout">
                        <button class="btn btn-success" type="button">LOGOUT</button>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="landing.php">e-Rapor</a>

                <!-- <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </a> -->
                <div class="container-fluid d-grid gap-2 d-md-flex justify-content-md-end">

                    <button type="button" id="sidebarCollapse" class="btn btn-warning">
                        <i class="fas fa-align-justify"></i>
                        <!-- <span>Toggle Sidebar</span> -->
                    </button>

                </div>
            </nav>
        </div>

    </div>
        
    <?php
            $matkul = null;
            if(isset($_GET)){
                $matkul = $_GET['id'];
            }
    ?>
    <div class="container" id="judul">
        <div class="card text-black bg-warning mb-3" style="max-width: 25rem;">
        <div class="card-header">
        <h3 class="display-4 text-center"><?php echo $matkul;?></h3>
            </div>
            <div class="card-body">
            <h3 class="card-title ">Input Nilai Murid</h5>
            
            </div>
        </div>
    </div>
    
   
    <div class="container" id="panel">
    
    <div id="accordion">
        <?php
            include "./queryMurid.php";
            $res = getMurid();
            while($name = mysqli_fetch_array($res)){
                // echo "Nama ".$name[1];
                ?>
                    <div class="card bg-dark" style="max-width: 19rem;">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $name[1];?>
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        <a class="btn btn-warning" data-toggle="collapse" href="#<?php echo $name[1];?>tgs1" role="button" aria-expanded="false" aria-controls="collapsetgsA" id="konten">
                                Tugas 1
                            </a>
                            <div class="collapse" id="<?php echo $name[1];?>tgs1">
                                <div class="card card-body">
                                    Input Nilai Disini
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        
                            <a class="btn btn-warning" data-toggle="collapse" href="#<?php echo $name[1];?>tgs" role="button" aria-expanded="false" aria-controls="collapseTGS2A" id="konten">
                                Tugas 2
                            </a>
                            <div class="collapse" id="<?php echo $name[1];?>tgs">
                                <div class="card card-body" > 
                                    Input Nilai Disini
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-warning" data-toggle="collapse" href="#<?php echo $name[1];?>uts" role="button" aria-expanded="false" aria-controls="collapseUTSA" id="konten">
                            UTS
                            </a>
                            <div class="collapse" id="<?php echo $name[1];?>uts">
                                <div class="card card-body">
                                    Input Nilai Disini
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-warning" data-toggle="collapse" href="#<?php echo $name[1];?>uas" role="button" aria-expanded="false" aria-controls="collapseUASA" id="konten">
                                UAS
                            </a>
                            <div class="collapse" id="<?php echo $name[1];?>uas">
                                <div class="card card-body">
                                    Input Nilai Disini
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-warning" data-toggle="collapse" href="#<?php echo $name[1];?>prak" role="button" aria-expanded="false" aria-controls="collapsePrakA" id="konten">
                                Praktikum
                            </a>
                            <div class="collapse" id="<?php echo $name[1];?>prak">
                                <div class="card card-body">
                                    Input Nilai Disini
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <br>
                <?php
            }
        ?>
        <!-- <div class="card bg-dark" style="max-width: 19rem;">
            <div class="card-header" id="headingTwo" >
            <h5 class="mb-0">
                <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Clement Prolifel
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <a class="btn btn-warning" data-toggle="collapse" href="#collapsetgsB" role="button" aria-expanded="false" aria-controls="collapsetgsB" id="konten">
                    Tugas 1
                </a>
                <div class="collapse" id="collapsetgsB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            
                <a class="btn btn-warning" data-toggle="collapse" href="#collapseTGS2B" role="button" aria-expanded="false" aria-controls="collapseTGS2B" id="konten">
                    Tugas 2
                </a>
                <div class="collapse" id="collapseTGS2B">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUTSB" role="button" aria-expanded="false" aria-controls="collapseUTSB" id="konten">
                   UTS
                </a>
                <div class="collapse" id="collapseUTSB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUASB" role="button" aria-expanded="false" aria-controls="collapseUASB" id="konten">
                    UAS
                </a>
                <div class="collapse" id="collapseUASB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapsePrakB" role="button" aria-expanded="false" aria-controls="collapsePrakB" id="konten">
                    Praktikum
                </a>
                <div class="collapse" id="collapsePrakB">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
           
            </div>
            </div>
        </div> -->
        
        <br>
        
        <!-- <div class="card bg-dark" style="max-width: 19rem;">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Edo Yogatama
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            <a class="btn btn-warning" data-toggle="collapse" href="#collapsetgsC" role="button" aria-expanded="false" aria-controls="collapsetgsC" id="konten">
                    Tugas 1
                </a>
                <div class="collapse" id="collapsetgsC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            
                <a class="btn btn-warning" data-toggle="collapse" href="#collapseTGS2C" role="button" aria-expanded="false" aria-controls="collapseTGS2C" id="konten">
                    Tugas 2
                </a>
                <div class="collapse" id="collapseTGS2C">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUTSC" role="button" aria-expanded="false" aria-controls="collapseUTSC" id="konten">
                   UTS
                </a>
                <div class="collapse" id="collapseUTSC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapseUASC" role="button" aria-expanded="false" aria-controls="collapseUASC" id="konten">
                    UAS
                </a>
                <div class="collapse" id="collapseUASC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>

                <a class="btn btn-warning" data-toggle="collapse" href="#collapsePrakC" role="button" aria-expanded="false" aria-controls="collapsePrakC" id="konten">
                    Praktikum
                </a>
                <div class="collapse" id="collapsePrakC">
                    <div class="card card-body">
                        Input Nilai Disini
                    </div>
                </div>
            </div>
            </div>
        </div> -->
        
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
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
</body>
</html>