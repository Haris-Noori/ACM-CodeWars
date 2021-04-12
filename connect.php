<?php

    $server = "localhost";      //
    $user = "root";             //username
    $pass = "";                 // Password
    $dbname = "cw_db";               // Database name

    $con = new MySQLi($server, $user, $pass, $dbname);

    if ($con->connect_error)
    {
        echo "<script>alert('Database Not Connected')</script>";
        echo "Error: " . $con->connect_error;
    }
    else {
        // "<script> alert('Successfully Connected to Database')</script>";
    }