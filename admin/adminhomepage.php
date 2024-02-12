<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminhp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Homepage</title>
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <a href="../index.php"><img src="../photos/logoto.jpg"  style="width: 50px;" height="50px" margin="0";></a>
        <nav class="navigation">      
            <button class="uhpsignin" >Sign In</button>&nbsp;&nbsp;<button class="uhpsignup">Sign Up</button>
        </nav>
    </header>

    <!-- Body -->
    <div class="midder">
        <h1>Welcome to Admin page</h1> 

        <h2>"ROTC CADETS OF TODAY, LEADER OF TOMMORROW"</h2> 
    </div>
    
    <!-- Sign In Form -->    
    <div class="signinform">
        <div class="form-box signin">
            <span class="iconclose">
                <i class="fa fa-close"></i>
            </span>
            <form action="loginprocessadmin.php" method="post">
                <h2>Sign In</h2>
                
                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input type="text" name="uname" class="input" required>
                    <label>Username</label>
                </div>
                <div class="form-input">
                    <span class="icon"><i class="fa fa-lock"></i></span>
                    <input class="input" type="password" name="password" required>
                    <label>Password</label>
                </div>

                <button type="submit" class="login-button">Sign in</button>
                
                <div class="signup-link">
                    <p>Don't have an account? <a href="#" class="dontsignup">Sign up</a></p>
                </div>
            </form>
        </div>  
    </div>  
    <!-- Sign Up Form -->    
    <div class="signupform">
        <div class="form-box signup">
            <span class="iconcloseup">
                <i class="fa fa-close"></i>
            </span>
            <h2>Sign Up</h2>
            <form action="sign-upcheckadmin.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-user"></i>
                    </span>
                        
                    <label for="fname" >First Name</label>
                        <?php if (isset($_GET['fname'])) { ?>
                            <input type="text" name="fname" value="<?php echo $_GET['fname']; ?>"><br>
                        <?php }else{ ?>
                            <input type="text" name="fname"><br>
                        <?php }?>
                </div>
                
                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-user"></i>
                    </span>
                        
                    <label for="lname">Last Name</label>
                    <?php if (isset($_GET['lname'])) { ?>
                        <input type="text" name="lname" value="
                    <?php echo $_GET['lname']; ?>"><br>

                    <?php }else{ ?>
                        <input type="text" name="lname"><br>
                    <?php }?>
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                        
                    <label>Email</label>
                    <?php if (isset($_GET['email'])) { ?>
                        <input type="email" name="email" value="<?php echo $_GET['email']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text" name="email"><br>
                    <?php }?>
                </div>
                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-user"></i>
                    </span>
                        
                <label for="uname" >User Name</label>
                    <?php if (isset($_GET['uname'])) { ?>
                        <input type="text" name="uname" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text" name="uname"><br>
                    <?php }?>
                </div>
                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label> 
                </div>
                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    <label for="password_confirmation">Re-Type Password</label>
                        
                </div>

                <button type="submit" class="signup-button">Submit</button>
                    
                <div class="signin-link">
                    <p>Already have an account? <a href="#" class="dontsignin">Sign in</a></p>
                </div>
            </form>    
        </div>    
    </div>
    
    <!-- Footer     -->
    <div class="footer">
        <div class="Visit">
            <h2>Visit Us On</h2> 
            <a href="https://www.facebook.com/colegiodemontalbanrotcunit"><i class="fa fa-facebook-f" style="font-size:17px; color:#fff"></i></a>
        </div>
        <div class="navdown">
            <ul>
                <li><a href="user.php">Privacy Policy</a></li>
                <li><a href="">Term of Use</a></li>
            </ul>
        </div>
            <p> 
                © 2023 CDM ROTC Inc.
            </p> 
    </div>
    <script src="../script/script.js"></script>
</body>
</html>