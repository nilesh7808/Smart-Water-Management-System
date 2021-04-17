<?php

	include('connect.php');

	session_start();
	
	
		$email = $_POST['email'];
			
		$passwords = $_POST['psw'];
		
		$email = stripcslashes($email);
		
		$passwords = stripcslashes($psw);
		
		$email = mysqli_real_escape_string($email);
		
		$passwords = mysqli_real_escape_string($passwords);
				
		$sql = " SELECT * FROM signup WHERE email = '$email' and psw = '$passwords' ";
			
		$result = mysqli_query($con, $sql);
		
		$row = mysqli_fetch_array($result);
				
		if($row['email'] == $email && $row['psw'] == $passwords)
		{
				
			$_SESSION['loggedin'] = true;
			
			$_SESSION['login_user'] = $email;
			
			//$_SESSION['email'] = $email;
						
			header("location:index1.php");
		
		}
		else {
			$error = "Your Login Name or Password is invalid";
		}

?>