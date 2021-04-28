<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "arduino";

    $con = mysqli_connect($servername, $username, $password, $db_name);

    if(!$con){

        die("Connection didnot established ". mysqli_connect_error());
        
    }


?>
