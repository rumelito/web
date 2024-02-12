<?php 
session_start(); 
include "../connection/dbconn.php";

if (isset($_POST['uname']) && isset($_POST['password']) 
    && isset($_POST['fname'])&& isset($_POST['lname']) && isset ($_POST['platoon'])
	&& isset ($_POST['gender'])&& isset ($_POST['course'])
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
		$platoon = validate($_POST['platoon']);
		$gender = validate($_POST['gender']);
		$course = validate($_POST['course']);
		$re_pass = validate($_POST['password_confirmation']);
		$fname = validate($_POST['fname']);
		$lname = validate($_POST['lname']);
		$email = validate($_POST['email']);

		$user_data = '&uname='. $uname. '&fname='. $fname.'&lname='. $lname .'&email='. $email. '&platoon='. $platoon. '&gender='. $gender. '&course='. $course;
		
		
		if (strlen($_POST["password"]) < 8) 
			{
				header("Location: user.php?error=Password must be at least 8 characters");
				exit();
			}
			
		if ( ! preg_match("/[a-z]/i", $_POST["password"])) 
			{
				header("Location: user.php?error=Password must contain at least one letter");
				exit();
			}
			
		if ( ! preg_match("/[0-9]/", $_POST["password"])) 
			{
				header("Location: user.php?error=Password must contain at least one number");
				exit();
			}
			
		if (empty($uname)) 
			{
				header("Location: user.php?error=User Name is required&$user_data");
				exit();
			}
		else if(empty($pass))
			{
				header("Location: user.php?error=Password is required&$user_data");
				exit();
			}
		else if(empty($re_pass))
			{
				header("Location: user.php?error=Re Password is required&$user_data");
				exit();
			}
		else if(empty($fname))
			{
				header("Location: user.php?error=First Name is required&$user_data");
				exit();
			}
		else if(empty($lname))
			{
				header("Location: user.php?error=Last Name is required&$user_data");
				exit();
			}
		else if(empty($email))
			{
				header("Location: user.php?error=Email is required&$user_data");
				exit();
			}
		else if(empty($platoon))
			{
				header("Location: user.php?error=Platoon is required&$user_data");
				exit();
			}
		else if(empty($gender))
			{
				header("Location: user.php?error=Gender is required&$user_data");
				exit();
			}
		else if(empty($course))
			{
				header("Location: user.php?error=Course is required&$user_data");
				exit();
			}
		
		
		else if($pass !== $re_pass)
			{
				header("Location: user.php?error=The confirmation password  does not match&$user_data");
				exit();
			}

		else
			{

				// hashing the password
				$pass = md5($pass);
				$sql = "SELECT * FROM usertb WHERE user_name='$uname' ";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) 
					{
						header("Location: user.php?error=The username is taken try another&$user_data");
						exit();
					}
				else 
					{
						$sql2 = "INSERT INTO usertb (user_name, password, fname, lname, email, platoon, gender, course) VALUES('$uname', '$pass', '$fname', '$lname', '$email', '$platoon', '$gender', '$course')";
						$result2 = mysqli_query($conn, $sql2);
						if ($result2) 
							{
								header("Location: user.php?success=Your account has been created successfully");
								exit();
							}
						else 
							{
								header("Location: user.php?error=unknown error occurred&$user_data");
								exit();
							}
					}
			}
		
	}
else
	{
		header("Location: user.php");
		exit();
	}