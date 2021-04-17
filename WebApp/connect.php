<?php

 
    $servername = "localhost";
    $username = "root";
    $db_name = "arduino";
    $password = "";

    $con = mysqli_connect($servername, $db_name, $username, $password);

    if(!$con){

        die("Connection didnot established ". mysqli_connect_error());
        
    }


?>
