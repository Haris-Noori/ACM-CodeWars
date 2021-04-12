<?php
    include "connect.php";

    $qry = " SELECT * FROM coy ";
    $res = $con->query($qry);
    if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo $row["sr"]." ";
            $digits = 4;
            $num = rand(pow(10, $digits-1), pow(10, $digits)-1);
            echo $num;
            echo "<br>";

            $qry_ins = " UPDATE coy set user_pass='".$num."' WHERE sr='".$row["sr"]."'  ";
            $con->query($qry_ins);
        }
    }