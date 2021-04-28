<?php

	include('connect.php');

	session_start();
	

	if (isset($_POST['submit']))
	{
	
		$first_name = mysqli_real_escape_string($con, $_POST['fname']);

		//$last_name = mysqli_real_escape_string($con, $_POST['lname']);
			
		$passwords = mysqli_real_escape_string($con, $_POST['psw']);

		$sql = " SELECT * FROM signup WHERE fname = '$first_name' AND  psw = '$passwords'  ";

		$res = mysqli_query($con, $sql);

				
			if(mysqli_num_rows($res) == 1)
			{
				$row = mysqli_fetch_assoc($res);
				
				$_SESSION['loggedin'] = true;
				
				$_SESSION['fname'] = $first_name;

				$userid = $row['id'];

				$_SESSION['id'] = $userid;

				//$_SESSION['lname'] = $last_name;
					
				header('location:home.php');
					
			}
		else {

			echo '<script language="javascript">'; 
			echo ' alert("Username or firstname is incorrect or doesnot exist, Please Enter Correct Credentials."); ';
			echo ' window.location.href="index.php"; '; 
			echo '</script>';
			//header('location: login.html');
				
		
		
		}
 }

?>