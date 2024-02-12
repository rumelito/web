<?php
session_start(); 
include "../connection/dbconn.php";


if (isset($_POST['Submit'])) 
    {
        $officername =  $_POST['officer'];;
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];


        // Insert data into the table
        $query = "INSERT INTO evaltbl (officername,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
                VALUES ('$officername', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10')";
        mysqli_query($conn,$query);
        
        
        if ($query) 
            {
                echo "
                <script> alert('Submitted Successfully!');
                window.location = 'UserEval.php';</script>";
            }
        
        //$_SESSION['status'] = "Data inserted successfully!";
        //header('location: UserEval.php'); //Redirect back to the form page
    }



?>