<?php

   $servername = "localhost";
    $username = "root";
    $password = "";
	$db_name = "arduino";

    $con = mysqli_connect($servername, $username, $password, $db_name);

    if(!$con){

        die("Connection didnot established ". mysqli_connect_error());
        
    }
	// include("connect.php");

    //echo "Connected Successfully"; 

    $first_name = mysqli_real_escape_string($con, $_POST['fname']);
    $last_name = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $passwords = mysqli_real_escape_string($con, $_POST['psw']);
    $c_pass = mysqli_real_escape_string($con, $_POST['cpsw']);
    $add = mysqli_real_escape_string($con, $_POST["addresses"]);

  

    $sql = " INSERT INTO signup (fname, lname, email, psw, addresses) VALUES ('$first_name', '$last_name', '$email', '$passwords', '$add') ";

    $res = mysqli_query($con, $sql);

    if($res){

        
		echo "Data inserted successfully";
		
		header("Location: login.html");
   
 
	} 
	else {
		
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

    mysqli_close($con);

?>