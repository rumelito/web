
<?php 
session_start();
include "../connection/dbconn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admindb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/img/profilcon.jpg" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/add.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
</head>
<body>
  <div class="container">
    <header>
      <div class="navbar">
        <h1>Welcome to Admin Page </h1>
      </div>
    </header>
    <div class="sidebar">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <i class="fa fa-user-circle"></i>
              <span class="nav-item"><?php echo $_SESSION['fname']; ?>&nbsp;<?php echo $_SESSION['lname']; ?></span>
            </a>
          </li>
          <li><a href="admindb.php"><i class="bx bxs-dashboard"></i><span class="nav-item">Dashboard</span></a></li>
          <li><a href="adminuseregistered.php"><i class="bx bxs-user-circle"></i><span class="nav-item">Registered User</span></a></li>
          <li><a href="adminlistofficer.php"><i class="bx bxs-user"></i><span class="nav-item">Update List</span></a></li>
          <li><a href="adminviewresult.php"><i class="bx bx-bar-chart-alt"></i><span class="nav-item">Result</span></a></li>

          <li><a href="logoutadmin.php" class="out"><i class="bx bx-log-in"></i><span class="nav-item">Log Out</span></a></li>
        </ul>
      </nav>
    </div>

      <div class="content">
        <div class="User1">
          <p><span>VIEW RESULT</span></p>
          
          <form action="adminviewresult.php" method="post">
            <input type="text" name="search" placeholder="search...." class ="add" required>
            <input type="submit" value="SUBMIT" class="searchbtn">
          </form>  
          <?php echo "<table border='1'>
            <tr>
              <th>Officer Name</th>
              <th>Question 1</th>
              <th>Question 2</th>
              <th>Question 3</th>
              <th>Question 4</th>
              <th>Question 5</th>
              <th>Question 6</th>
              <th>Question 7</th>
              <th>Question 8</th>
              <th>Question 9</th>
              <th>Question 10</th>
            </tr>";
                
                // PROCESS SEARCH WHEN FORM SUBMITTED
            if (isset($_POST["search"])) 
              {
                // SEARCH FOR USERS (Example)
                $search = mysqli_real_escape_string($conn, $_POST["search"]);
                $query = "SELECT * FROM evaltbl WHERE officername LIKE '%$search%'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) 
                  {
                    while ($row = mysqli_fetch_assoc($result)) 
                      {
                        echo "<tr>";
                          echo "<td>" . $row['officername'] . "</td>";
                          echo "<td id='q1'>" . $row['q1'] . " </td>";
                          echo "<td id='q2'>" . $row['q2'] . "</td>";
                          echo "<td id='q3'>" . $row['q3'] . "</td>";
                          echo "<td id='q4'>" . $row['q4'] . "</td>";
                          echo "<td id='q5'>" . $row['q5'] . "</td>";
                          echo "<td id='q6'>" . $row['q6'] . "</td>";
                          echo "<td id='q7'>" . $row['q7'] . "</td>";
                          echo "<td id='q8'>" . $row['q8'] . "</td>";
                          echo "<td id='q9'>" . $row['q9'] . "</td>";
                          echo "<td id='q10'>" . $row['q10'] . "</td>";
                        echo "</tr>";
                      }
                  } 
                else 
                    {
                      echo "<p class='noresult'>No results found </p>";
                    }
              }
              echo "</table>";
            ?>
            
        </div>
      </div>
    </div>
</body>
</html>

<?php 
    }
    else
      {
        header("Location: admindb.php");
         exit();
      }
    mysqli_close($conn);
?>
