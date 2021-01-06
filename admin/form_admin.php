<html>
<head lang="en">
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login</title>

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
            background-image: url("../assets/rustem-baltiyev-x_YN1GKSn-0-un.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .login-content {
            display: flex;
            align-items: center;
            text-align: center;
            margin-right: 300px;
            margin-top: 5%;
            margin-left: 300px;
            margin-bottom: auto;
            background-color: rgba(255,255,255, 0.8);
            border-radius: 30px;
            box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.2), 5px 6px 20px rgba(0, 0, 0, 0.19);
            padding-left: 4%;
            padding-right: 4%;
            padding-bottom: 3%;
            padding-top: 3%;
        }
    </style>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="../landing.php">e-Rapor</a>
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
                <a class="btn btn-primary my-2 my-sm-0 mx-4" type="button" href="./admin/form_admin.php">Login</a>
                <a class="btn btn-light my-2 my-sm-0" type="button" href="./admin/form_register.php">Register</a>
            </form>
        </div>
    </nav>

    <!-- <main role="main" class="card mx-auto" style="width: 20rem;"> -->
        
        <div class="login-content" >
        
            <form action="./admin/login.php" method="post">
            <div class="card-header">
            <h2>Login</h2>
            </div>
                <div class="form-group">
                    <label for="inputUsername">Email</label>
                    <input class="form-control" type="text" id="inputUsername" name="email">
                </div>
                <div class="form-group">
                    <label for="inputUsername">Password</label>
                    <input class="form-control" type="password" id="inputPassword" name="password">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="showPassword" onclick="showHidePassword()">
                            <label class="custom-control-label" for="showPassword">Show Password</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputRole" class="radio-label">Login Sebagai: </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="admin">
                        <label class="form-check-label" for="inlineRadio1">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="guru">
                        <label class="form-check-label" for="inlineRadio2">Guru</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio3" value="murid">
                        <label class="form-check-label" for="inlineRadio3">Murid</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <!-- <table class="center">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" size="20"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" size="20"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Login" value="Proses"></td>
                    </tr>
                </table> -->
            </form>
        </div>
    <!-- </main> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        function showHidePassword() {
        var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html> 