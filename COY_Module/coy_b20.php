<?php
session_start();
include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coder Of The Year | Batch 20 - Code Wars</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/index.min.css" rel="stylesheet">

    <!--Icon-->
    <link rel="icon" href="../img/codewars.png" type="image/icon type">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light topbar mb-4 pt-3 static-top shadow" style="background: black">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <img src="../img/codewars.png" width="150" height="50" alt="">
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none text-white">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                            <h1 class="h3 mb-0 text-white">CS QUIZ</h1>
                        </a>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                            <span id="demo" class="btn btn-sm text-lg text-dark mt-3 float-left digital-clock" style="background: #00FCBF">
                                00h:00m:00s
                                <?php
                                date_default_timezone_set("Asia/Karachi");
                                ?>
                            </span>
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white font-weight-bold small">
                                    <?php echo $_SESSION["team_name"]; ?>
                                </span>
                            <img class="img-profile rounded-circle"
                                 src="../img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Coder Of The Year -  Batch 20'</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-md-11 mb-4">
                        <div class="card shadow h-100 py-2" style=" border-left-width: 5px; border-left-color: #00FCBF">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-dark text-uppercase mb-1">
                                            <h4 class="font-weight-bold">Rules</h4>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="container text-center text-primary text-lg">Competition Timing: 12PM - 2PM</div>
                                    <div class="row">1. There are 3 questions which you have to complete within 2 hours, you can use any programming language.</div>
                                    <div class="row">2. Each and every question should be submitted in a different file.</div>
                                    <div class="row">3. You should follow the template, naming conventions, correct syntax. If none of these are followed, we will not accept your code.</div>
                                    <div class="row">4. The naming convention is: < TeamName >_< ProblemNumber >.py/cpp/java</div>
                                    <div class="row">5. Your code must run on our operating system. If it doesn’t then we are not responsible for it.</div>
                                    <div class="row">6. A Team can submit using only one account which is registered on its leader’s email.</div>
                                    <div class="row">7. You are requested to review your answers twice because you can only submit once. So press submit button when you are fully done.</div>
                                    <div class="row mt-2">
                                        <strong>Note:</strong>
                                        <span class="text-danger">If we find out any kind of plagiarism from within the competition or from any internet source, we will not tolerate it. We have software which can detect any kind of code which is available on the internet so be careful.</span>
                                    </div>
                                    <div class="container text-center">Happy Coding 😃</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">Problem 1</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <p>
                                    Given a list of integers nums and an integer target , return the sum of the indices of the
                                    two numbers such that they add up to target. You may assume that each input would
                                    have exactly one solution. You can return the answer in any form.
                                </p>
                                <p class="font-weight-bold">Example:</p>
                                <code>
                                    <p>Input: nums = [11,7,2,15], target = 9</p>
                                    <p>Output: 3</p>
                                    <p>Output: Because nums[1] + nums[2] == 9, we return 1 + 2 == 3.</p>
                                </code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">Problem 2</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <p>
                                    Determine whether an integer is a palindrome. An integer is palindrome when it reads
                                    the same backward as forward. Your function should return a boolean value indicating
                                    whether the integer is palindrome or not.
                                    <strong>Bonus: </strong> Do it without converting the integer to a string.
                                </p>
                                <p class="font-weight-bold">Example:</p>
                                <code>
                                    <p>Input: x = 121</p>
                                    <p>Output: true</p>
                                </code>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">Problem 3</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <p>
                                    Bob is climbing a staircase total of <strong>n</strong> stairs. In each step Bob can climb either <strong>2</strong> or <strong>3</strong>
                                    stairs. In how many distinct ways can Bob climb to the top.
                                    <br><strong>Constraint: n >= 2.</strong>
                                </p>
                                <p class="font-weight-bold">Example:</p>
                                <code>
                                    <p>Input: n = 10</p>
                                    <p>Output: 2</p>
                                    <p>Explanation: There are two ways to climb to the top.</p>
                                    <p>1. 2 step + 2 step + 2 step + 2 step + 2 step</p>
                                    <p>2. 2 step + 2 steps + 3 step + 3 step</p>
                                </code>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <p>Submit Your files here:</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="file" name="doc[]" class="btn btn-outline-success" multiple required>
                        <button type="submit" name="btn-submit" class="btn btn-success">Submit</button>
                    </form>
                    <?php
                        if(isset($_POST["btn-submit"]))
                        {
                            $qry_get_submitted = " SELECT submitted FROM coy WHERE user_email='".$_SESSION["user_email"]."' ";
                            $res = $con->query($qry_get_submitted);
                            $row = $res->fetch_assoc();

                            if($row["submitted"] == 1)
                            {
                                echo '<div class="col-sm-4 alert alert-danger">';
                                echo 'Already Submitted';
                                echo '</div>';
                            }
                            else
                            {
                                $file_path = 'submissions/batch20/'.$_SESSION["user_name"];

                                if(!file_exists($file_path))
                                {
                                    mkdir($file_path);
                                }

                                foreach ($_FILES['doc']['name'] as $key=>$val)
                                {
                                    if(empty($val))
                                    {
                                        echo "No Files Selected!";
                                    }
                                    else
                                    {
                                        move_uploaded_file($_FILES['doc']['tmp_name'][$key], $file_path.'/'.$val);
                                    }

                                }

                                $qry_update_sub = " UPDATE coy SET submitted=1 WHERE user_email='".$_SESSION["user_email"]."' ";
                                $con->query($qry_update_sub);

                                echo '<div class="col-sm-4 alert alert-success">';
                                echo 'Submit Successfully!';
                                echo '</div>';

                            }

                        }
                    ?>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/chart-area-demo.js"></script>
<script src="../js/demo/chart-pie-demo.js"></script>

<script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 19, 2020 14:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function()
    {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = hours + "h:"
            + minutes + "m:" + seconds + "s";

        // If the count down is over, write some text
        if (distance < 0)
        {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "00h:00m:00s";
        }
    }, 1000);
</script>

</body>
</html>