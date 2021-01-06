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
		background-image: url("./assets/bg-landing.jpg");
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

        /* Define the shape and color of the hamburger lines */
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


        /* top line needs a little padding */
        .navbar-toggler span:nth-child(1) {
            margin-top: 0.3em;
        }

        /**
        * Animate collapse into X.
        */

        /* top line rotates 45 degrees clockwise and moves up and in a bit to close the center of the X in the center of the button */
        .navbar-toggler:not(.collapsed) span:nth-child(1) {
            transform: translate(15%, -33%) rotate(45deg);
        }
        /* center line goes transparent */
        .navbar-toggler:not(.collapsed) span:nth-child(2) {
            opacity: 0;
        }
        /* bottom line rotates 45 degrees counter clockwise, in, and down a bit to close the center of the X in the center of the button  */
        .navbar-toggler:not(.collapsed) span:nth-child(3) {
            transform: translate(15%, 33%) rotate(-45deg) ;
        }


        /**
        * Animate collapse open into hamburger menu
        */

        /* top line moves back to initial position and rotates back to 0 degrees */
        .navbar-toggler span:nth-child(1) {
            transform: translate(0%, 0%) rotate(0deg) ;
        }
        /* middle line goes back to regular color and opacity */
        .navbar-toggler span:nth-child(2) {
            opacity: 1;
        }
        /* bottom line goes back to initial position and rotates back to 0 degrees */
        .navbar-toggler span:nth-child(3) {
            transform: translate(0%, 0%) rotate(0deg) ;
        }
    
    </style>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="landing.php">e-Rapor</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">   
            <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
        </span> -->
        <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span> </span>
            <span> </span>
            <span> </span>
        </a>
        <!-- <span class="navbar-toggler-icon top-bar"></span>
        <span class="navbar-toggler-icon middle-bar"></span>
        <span class="navbar-toggler-icon bottom-bar"></span> -->
        <!-- </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <!-- dikanan -->
            <form class="form-inline my-2 my-lg-0">
                <!-- <a class="btn btn-primary my-2 my-sm-0 mx-4" type="button" href="./admin/form_admin.php">Login</a> -->
                <a class="btn btn-light my-2 my-sm-0" type="button" href="./admin/form_register.php">Register</a>
            </form>
        </div>
    </nav>

    <main role="main" class="container">
        <div class="jumbotron bg-image">
            <h1>buat login page nanti</h1>
            <p class="lead">lgin page.exe</p>
            <!-- <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a> -->
        </div>
        
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- <script>
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
    </script> -->
</body>
</html>