<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Code Wars NUCES ACM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/index.min.css" rel="stylesheet">

    <!--Icon-->
    <link rel="icon" href="img/codewars.png" type="image/icon type">
</head>

<body style="background-image: url('img/bg.jpg'); background-size: cover; background-position: left">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 text-white" style="background-color: black">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><img src="img/codewars.png" width="250px" height="100px" alt=""></h1>
                                    </div>
                                    <!--FORM START-->
                                    <form class="user" action="login-check.php" method="POST">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="user_email" class="form-control text-dark"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="user123@email.com" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password (4-Digit)</label>
                                            <input type="password" name="user_pass" class="form-control"
                                                id="exampleInputPassword" placeholder="********" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Module</label>
                                            <select class="form-control" name="module" id="" required>
                                                <option class="form-control" value="m1">CS Quiz</option>
                                                <option class="form-control" value="m2">Coder Of The Year</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn font-weight-bold btn-block" style="background: #00FCBF; color: black">
                                            Login
                                        </button>
                                        <br>
                                        <div class="form-group">
                                            <?php
                                            if(isset($_GET["Message"]))
                                            {
                                                echo "<div class='col-md-12 alert alert-danger'>";
                                                echo $_GET["Message"];
                                                echo "</div>";
                                            }
                                            ?>
                                        </div>
                                        <hr>
                                    </form>
                                    <!--FORM END-->
                                    <div class="text-center">
                                        <a class="small" href="#">Contact Our Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>