<?php 


    include_once("connect.php");

    include_once("login.php");

    if(isset($_POST['submit'])){

        $levels =  $_POST['level'];  
        
        $dates = $_POST['date'];  

        $reg_no = $_SESSION['id'];

        $sql_query = " INSERT INTO receipt (level,date,reg_no) VALUES ('$levels', '$dates', '$reg_no')";

        mysqli_query($con, $sql_query);
    }

?>