<?php
session_start();
include "../connection/dbconn.php";
$sql = "SELECT * FROM officertb";
$result = mysqli_query($conn, $sql);


if (isset($_GET['success'])) 
    {
        unset ($_GET['success']);
    }
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    include "../connection/dbconn.php";
    $sql1 = mysqli_query($conn, "SELECT fname, lname FROM admintb");
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
            <div class="User2">
                <p><span>UPDATE LIST of OFFICER</span></p>
                
                <form action="add.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
    	                <p class="error"><?php echo $_GET['error']; ?></p>
 	                <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <input type="text" name="officer" class="add" placeholder="Add Officer">
                    <button type="submit" class="addbtn">ADD</button>
                </form>

                <?php echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Officername</th>
                        <th>Action</th>
                    </tr>";
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($result)) 
                        {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row['Officername'] . "</td>";
                            echo "<td>";
                            echo "<a href='remove.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")' class='remove'><icon class='bx bx-trash'></icon>Remove</a>"; // Delete button
                            echo "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                ?>
            </div>
            
        </div>
    </div>
</body>
</html>

<?php 
    }else
    {
        header("Location: adminlistofficer.php");
         exit();
    }
    mysqli_close($conn);
?>