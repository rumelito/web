<?php 
session_start(); 
include "../connection/dbconn.php";

if (isset($_POST['officer'])) 
	{
		function validate($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

		$officer = validate($_POST['officer']);
		$user_data = '&officer='. $officer;

		if (empty($officer)) 
			{
				header("Location: adminlistofficer.php?error=Officer name is required&$user_data");
				exit();
			}

		else
			{
				$sql = "SELECT * FROM officertb WHERE Officername='$officer' ";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) 
					{
						header("Location: adminlistofficer.php?error=The Officer is taken try another&$user_data");
						exit();
					}
				else 
					{
						$sql2 = "INSERT INTO officertb (Officername) VALUES('$officer')";
						$result2 = mysqli_query($conn, $sql2);
						if ($sql2) 
							{
								echo "
									<script> alert('Added Successfully!');
									window.location = 'adminlistofficer.php';</script>";
							}
						else 
							{
								header("Location: adminlistofficer.php?error=unknown error occurred&$user_data");
								exit();
							}
					}
			}
			
	}
else
	{
		header("Location: adminlistofficer.php");
		exit();
	}

