<?php 
session_start(); 
include "../connection/dbconn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['fname'])&& isset($_POST['lname'])
	&& isset($_POST['email'])&& isset($_POST['password_confirmation'])) 
	{

		function validate($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

		$uname = validate($_POST['uname']);
		$pass = validate($_POST['password']);
		$re_pass = validate($_POST['password_confirmation']);
		$fname = validate($_POST['fname']);
		$lname = validate($_POST['lname']);
		$email = validate($_POST['email']);

		$user_data = 'uname='. $uname. '&fname='. $fname.'&lname='. $lname .'&email='. $email;


		if (empty($uname)) 
			{
				header("Location: adminhomepage.php?error=User Name is required&$user_data");
				exit();
			}
		else if(empty($pass))
			{
				header("Location: adminhomepage.php?error=Password is required&$user_data");
				exit();
			}
		else if(empty($re_pass))
			{
				header("Location: adminhomepage.php?error=Re Password is required&$user_data");
				exit();
			}
		else if(empty($fname))
			{
				header("Location: adminhomepage.php?error=First Name is required&$user_data");
				exit();
			}
		else if(empty($lname))
			{
				header("Location: adminhomepage.php?error=Last Name is required&$user_data");
				exit();
			}
		else if(empty($email))
			{
				header("Location: adminhomepage.php?error=Email is required&$user_data");
				exit();
			}
		
		else if($pass !== $re_pass)
			{
				header("Location: adminhomepage.php?error=The confirmation password  does not match&$user_data");
				exit();
			}

		else
			{

				// hashing the password
				$pass = md5($pass);
				$sql = "SELECT * FROM admintb WHERE user_name='$uname' ";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) 
					{
						header("Location: adminhomepage.php?error=The username is taken try another&$user_data");
						exit();
					}
				else 
					{
						$sql2 = "INSERT INTO admintb (user_name, password, fname, lname, email) VALUES('$uname', '$pass', '$fname', '$lname', '$email')";
						$result2 = mysqli_query($conn, $sql2);
						if ($result2) 
							{
								header("Location: adminhomepage.php?success=Your account has been created successfully");
								exit();
							}
						else 
							{
								header("Location: adminhomepage.php?error=unknown error occurred&$user_data");
								exit();
							}
					}
			}
		
	}
else
	{
		header("Location: adminhomepage.php");
		exit();
	}