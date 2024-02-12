<?php
include "../connection/dbconn.php";
// Check if the delete button was clicked
if (isset($_GET["id"])) 
  {
    // Get the ID of the record to delete
    $id = $_GET["id"];
  
    // Delete the record from the database
    $sql = "DELETE FROM officertb WHERE id = $id";
    mysqli_query($conn, $sql);
    if ($sql) 
      {
        //echo "Record removed successfully";
        echo "
          <script> alert('Removed Successfully!');
          window.location = 'adminlistofficer.php';</script>";
      }

  }
  
// Close the database connection
//header("Location: adminlistofficer.php");
mysqli_close($conn);

?>





