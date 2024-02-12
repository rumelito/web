<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 
  {
    include "../connection/dbconn.php";
    $sql = mysqli_query($conn, "SELECT fname, lname FROM admintb");
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
    
    <title>Admin Dashboard</title>
</head>
<body>
  <div class="container">
    <header>
      <div class="navbar">
        <h1>Welcome to Admin Page</h1>
      </div>
    </header>
    <div class="sidebar">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <i class="bx bxs-user-circle"></i>             
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
      <div class="User">
        <a href="adminuseregistered.php"><span><p ><i class="bx bxs-user-circle"></i><br>REGISTERED USER</p></span></a>
      </div>
      <div class="User">
        <a href="adminlistofficer.php"><span><p ><span><i class="bx bxs-user"></i><br>UPDATE LIST of OFFICER</p></span></a>
      </div>
      <div class="User">
        <a href="adminviewresult.php"><span><p ><span><i class="bx bx-bar-chart-alt"></i><br>VIEW RESULT</p></span></a>
      </div>
    </div>
  </div>
</body>
</html>
<?php 
}else
  {
    header("Location: admindb.php");
     exit();
  }
?>
