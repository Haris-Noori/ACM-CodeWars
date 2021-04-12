<?php

    //session_start();
    include "connect.php";

    /*session_start();
    $_SESSION["email"] = "test@nu.edu.pk";
    header("Location:dashboard.php");*/

    $user_email = $_POST["user_email"];
    $user_pass = $_POST["user_pass"];
    $module = $_POST["module"];

    /*echo "\nEmail: ".$user_email;
    echo "\nPass: ".$user_pass;
    echo "\nModule: ".$module;*/


    if($module == "m1")     // CS Quiz
    {
        //echo "CS Quiz";
        $qry_check1 = " SELECT user_name, user_email, user_pass FROM cs_quiz WHERE user_email='".$user_email."' ";
        $res = $con->query($qry_check1);
        if($res->num_rows > 0)  // email exists
        {
            $row = $res->fetch_assoc();
            if($user_pass == $row["user_pass"])     // password correct
            {
                //echo "Password is correct";
                session_start();
                $_SESSION["user_email"] = $user_email;
                $_SESSION["user_name"] = $row["user_name"];
                header("Location:cs_quiz_Module/csq_dashboard.php");
            }
            else    //Incorrect Password
            {
                $msg = "Incorrect Password!";
                header("Location:index.php?Message=$msg");
            }
        }
        else
        {
            //echo "Email not exists!";
            $msg = "This email does not exist!";
            header("Location:index.php?Message=$msg");
        }
    }
    if($module == "m2")     // Coder Of The Year
    {
        //echo "Coder Of The Year";
        $qry_check2 = " SELECT user_name, user_email, user_batch, user_pass, team_name FROM coy WHERE user_email='".$user_email."' ";
        $res = $con->query($qry_check2);
        if($res->num_rows > 0)  // email exists
        {
            $row = $res->fetch_assoc();
            if($user_pass == $row["user_pass"])     // password correct
            {

                if($row["user_batch"] == "19")      // If Batch 19
                {
                    session_start();
                    $_SESSION["user_email"] = $user_email;
                    $_SESSION["user_name"] = $row["user_name"];
                    $_SESSION["team_name"] = $row["team_name"];
                    header("Location:COY_Module/coy_b19.php");
                }
                if($row["user_batch"] == "20")      // If Batch 20
                {
                    session_start();
                    $_SESSION["user_email"] = $user_email;
                    $_SESSION["user_name"] = $row["user_name"];
                    $_SESSION["team_name"] = $row["team_name"];
                    header("Location:COY_Module/coy_b20.php");
                }
            }
            else    //Incorrect Password
            {
                $msg = "Incorrect Password!";
                header("Location:index.php?Message=$msg");
            }
        }
        else
        {
            //echo "Email not exists!";
            $msg = "This email does not exist!";
            header("Location:index.php?Message=$msg");
        }
    }

    /*$qry = "SELECT * FROM admin WHERE admin_id = '" . $username . "' ";

    // ----------------------- check if query working
    if ($con->query($qry)) {
        echo "Query run success";
    } else {
        echo "Query didn't run";
    }

    //--------------------------------------

    $res = $con->query($qry);    //storing result from query in this variable
    $msg = "";

    if ($res->num_rows > 0) {   //admin exists
        $row = $res->fetch_assoc();

        if ($row["admin_password"] == $admin_pass) {   //password is correct
            $_SESSION["admin"] = $admin_id;
            //echo $SESSION["user"];
            header("Location:admin_dashboard.php");    //give admin the access to dashboard
        } else {   //password is incorrect
            $msg = "Invalid Password";
            header("Location:admin_login.php?Message=$msg");
        }
    } else {   //admin does not exist
        $msg = " " . $admin_id . " does not exist";
        header("Location:admin_login.php?Message=$msg");
    }*/