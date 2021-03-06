<?php
    session_start();
    $loginFlag = false;
    if(isset($_SESSION['id']) & isset($_SESSION['role'])){
        $loginFlag = true;
    }
    if($loginFlag == true) {
        if($_SESSION['role']==1){
            header("Location: ./guru/index.php");
            exit();
        } elseif ($_SESSION['role']==2) {
            header("Location: ./murid2/index.php");
            exit();
        }
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
            padding-top: 4.5rem;
        }
        
        body {
		width: 100%;
		height: 400px;
		background-color: rgb(232, 235, 238); 
		background-image: url("./assets/bgland.png");
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

        .navbar-toggler span {
            display: block;
            background-color: #4f4f4f;
            height: 3px;
            width: 25px;
            margin-top: 5px;
            margin-bottom: 5px;
            position: relative;
            left: 0;
            opacity: 1;
            transition: all 0.35s ease-out;
            transform-origin: center left;
        }

        .navbar-toggler span:nth-child(1) {
            margin-top: 0.3em;
        }

        .navbar-toggler:not(.collapsed) span:nth-child(1) {
            transform: translate(15%, -33%) rotate(45deg);
        }
        .navbar-toggler:not(.collapsed) span:nth-child(2) {
            opacity: 0;
        }
               .navbar-toggler:not(.collapsed) span:nth-child(3) {
            transform: translate(15%, 33%) rotate(-45deg) ;
        }
        .navbar-toggler span:nth-child(1) {
            transform: translate(0%, 0%) rotate(0deg) ;
        }
        .navbar-toggler span:nth-child(2) {
            opacity: 1;
        }
        .navbar-toggler span:nth-child(3) {
            transform: translate(0%, 0%) rotate(0deg) ;
        }
        .form-reg {
            display: block;
            position: relative;
            margin: 40px 0px;
        }
        .label-txt {
            position: absolute;
            top: -1.6em;
            padding: 10px;
            font-family: sans-serif;
            font-size: .8em;
            letter-spacing: 1px;
            color: rgb(0,0,0);
            transition: ease .3s;
        }
        .input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            outline: none;
        }

        .line-box {
            position: relative;
            width: 100%;
            height: 2px;
            background: #BCBCBC;
        }

        .line {
        position: absolute;
            width: 0%;
            height: 2px;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            background: #8BC34A;
            transition: ease .6s;
        }

        .input:focus + .line-box .line {
            width: 100%;
        }

        .label-active {
            top: -3em;
        }

        button:hover {
            background: #8BC34A;
            /* color: #ffffff; */
        }
        
    </style>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
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
            
            <form class="form-inline my-2 my-lg-0">
                <!-- <a class="btn btn-primary my-2 my-sm-0 mx-4" type="button" href="./admin/form_admin.php">Login</a> -->
                <ul class="nav-item dropdown my-2 my-sm-0">
                    <a class="btn btn-warning nav-link dropdown-toggle" type="button" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./admin/formRegisterGuru.php">Guru</a>
                        <a class="dropdown-item" href="./admin/formRegisterMurid.php">Murid</a>
                    </div>
                </ul>
            </form>
        </div>
    </nav>
    <!--  -->
    <!-- <div class="container-fluid"> -->
        <div class="d-flex justify-content-center">            
            <?php
                include './admin/formLogin.php';
            ?>
        </div>
        <?php
            echo "<br><h5 class='text-center'>";
            if(isset($_GET['msg'])){
                if($_GET['msg'] == "registed"){
                    echo "Register Success <br> Try to Logging In";
                }
                if($_GET['msg'] == "notlogin"){
                    echo "User Not Logged In";
                }
            }
            echo "</h5>";
        ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="./js/bootstrap.bundle.min.js"></script>
   
</body>
</html>