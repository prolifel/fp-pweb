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
    
        .login-content {
            display: flex;
            align-items: center;
            text-align: center;
            margin-right: 300px;
            margin-top: 5%;
            margin-left: 300px;
            margin-bottom: auto;
            background-color: rgba(50,205,50, 0.3);
            border-radius: 30px;
            box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.2), 5px 6px 20px rgba(0, 0, 0, 0.19);
            padding-left: 4%;
            padding-right: 4%;
            padding-bottom: 3%;
            padding-top: 3%;
        } 
    </style>
    <script>
        // Function to check Whether both passwords 
        // is same or not. 
        function checkPassword(form) { 
            password1 = form.password1.value; 
            password2 = form.password2.value; 

            // If password not entered 
            if (password1 == ''){
                alert ("Tolong masukkan password"); 
                return false;
            }

            // If confirm password not entered 
            else if (password2 == ''){
                alert ("Tolong masukkan konfirmasi password"); 
                return false;
            }
                
            // If Not same return False.     
            else if (password1 != password2) { 
                alert ("\nPassword tidak sama. Silakan coba kembali") 
                return false; 
            } 

            // If same return True. 
            else{ 
                return true; 
            } 
        } 
    </script>
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
                <a class="btn btn-warning my-2 my-sm-0 mx-4" type="button" href="./admin/form_admin.php">Login</a>
            </form>
        </div>
    </nav>

        <div class="d-flex justify-content-center">
        <div class="login-content" >
            
                <form action="register.php" method="post" onsubmit="return checkPassword(this);">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <label class="form-reg">
                    <p class="label-txt">Email</p>
                    <input type="text" class="input" require name="email" id="inputEmail" >
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <label class="form-reg">
                    <p class="label-txt">Nama Lengkap</p>
                    <input type="text" class="input" require name="nama" id="inputUsername">
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                
                <label class="form-reg">
                    <p class="label-txt">Password</p>
                    <input type="password" class="input" id="inputPassword" name="password1" require>
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <label class="form-reg">
                    <p class="label-txt">Confirm Password</p>
                    <input type="password" class="input" id="inputPassword2" name="password2" require>
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
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
                <br>
                <button type="submit" class="btn btn-warning">Register</button>
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
        </div>
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
        function showHidePassword2() {
            var x = document.getElementById("inputPassword2");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html> 