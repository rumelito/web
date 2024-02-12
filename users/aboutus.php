<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Homepage</title>
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <a href="https://www.facebook.com/colegiodemontalbanrotcunit"><img src="../photos/logoto.jpg"  style="width: 50px;" height="50px" margin="0";></a>
        <nav class="navigation">
            <a href="user.php" class="link">Home</a>
            <a href="aboutus.php" class="link">About Us</a>
            <button class="uhpsignin" >Sign In</button>&nbsp;&nbsp;<button class="uhpsignup">Sign Up</button>
        </nav>
    </header>

    <!-- Body -->
    <div class="midder3">
        <h1>"About Us"</h1> 
        <p>
            <h2>BSIT-2F, GROUP 1</h2><br>
            <h2>Leader/Project Manager</h2><br>
            <h4>Rommel M. Montalbo</h4><br>
                <br>
                <h2>Member</h2><br>
                <h4>Rene Boy Bravo</h4><br>
                <h4>Axel Villarta</h4><br>
                <h4>Angelica Ligan</h4><br>
                <h4>Lovely D. Pantaleon</h4><br>
                <h4>Kristian Avenido</h4><br>
                <br>

                <h2>Assistant Project Manger</h2><br>
                <h4>Rene Boy Bravo</h4><br>
                <br>

                <h2>Designer</h2><br>
                <h4>Lovely D. Pantaleon</h4><br>
                <br>

                <h2>Assistant Designer</h2><br>
                <h4>Angelica Ligan</h4><br>
                <br>

                <h2>Analyst</h2><br>
                <h4>Kristian Avenido</h4><br>
                <h4>Axel Villarta</h4><br>
        </p> 
    </div>
    <div class="main-container" >

            <input type="radio" class="tab-radio" name="tab" id="tab1" checked>
            <label for="tab1" class="tab-label"> 1</label>   
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo1.jpg";>
            </div>
    

            <!-- Second Page-->
            <input type="radio" class="tab-radio" name="tab" id="tab2">
            <label for="tab2" class="tab-label"> 2</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo2.jpg";> 
            </div>

            <input type="radio" class="tab-radio" name="tab" id="tab3">
            <label for="tab3" class="tab-label"> 3</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo3.jpg";>   
            </div><input type="radio" class="tab-radio" name="tab" id="tab4">
            <label for="tab4" class="tab-label"> 4</label>   
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo4.jpg";>
            </div>
    
            <input type="radio" class="tab-radio" name="tab" id="tab5">
            <label for="tab5" class="tab-label"> 5</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo5.jpg";> 
            </div>

            <input type="radio" class="tab-radio" name="tab" id="tab6">
            <label for="tab6" class="tab-label"> 6</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo9.jpg";>   
            </div>
            <input type="radio" class="tab-radio" name="tab" id="tab7">
            <label for="tab7" class="tab-label"> 7</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo7.jpg";> 
            </div>

            <input type="radio" class="tab-radio" name="tab" id="tab8">
            <label for="tab8" class="tab-label"> 8</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo8.jpg";>   
            </div>
            <input type="radio" class="tab-radio" name="tab" id="tab9">
            <label for="tab9" class="tab-label"> 9</label>     
            <div class="Question-Container">
                <h2>Photo:</h2>
                <img src="../aboutphotos/photo10.jpg";>   
            </div>
    </div>

    
    <!-- Sign In Form -->    
    <div class="signinform">
        <div class="form-box signin">
            <span class="iconclose">
                <i class="fa fa-close"></i>
            </span>
            <form action="loginprocess.php" method="post">
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
            <form  action="signup-check.php" method="post">
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
                    <?php if (isset($_GET['fname'])) 
                        { ?>
                            <input type="text" name="fname" value="<?php echo $_GET['fname']; ?>"><br>
                    <?php }
                    else
                        { ?>
                            <input type="text" name="fname"><br>
                    <?php }?>
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-user"></i>
                    </span>
                        
                    <label for="lname">Last Name</label>
                    <?php if (isset($_GET['lname'])) 
                        { ?>
                            <input type="text" name="lname" value="<?php echo $_GET['lname']; ?>"><br>
                        <?php 
                        }
                    else
                        { ?>
                            <input type="text" name="lname"><br>
                    <?php }?>
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-venus-mars"></i>
                    </span>
                    
                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="gender">Gender</label>
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </span>
                    
                    <select name="course">
                        <option value="">Select Course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCPE">BSCPE</option>
                        <option value="BSBA">BSBA</option>
                        <option value="BSED">BSED</option>
                        <option value="BEED">BEED</option>
                        <option value="BSE">BSE</option>
                    </select>
                    <label for="gender">Gender</label>
                        
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-flag"></i>
                    </span>
                    
                    <select name="platoon">
                        <option value="">Select Platoon</option>
                        <option value="Alpha 1st Platoon">Alpha 1st Platoon</option>
                        <option value="Alpha 2nd Platoon">Alpha 2nd Platoon</option>
                        <option value="Bravo 1st Platoon">Bravo 1st Platoon</option>
                        <option value="Bravo 2nd Platoon">Bravo 2nd Platoon</option>
                        <option value="Charlie 1st Platoon">Charlie 1st Platoon</option>
                        <option value="Charlie 2nd Platoon">Charlie 2nd Platoon</option>
                        <option value="Delta 1st Platoon">Delta 1st Platoon</option>
                        <option value="Delta 2nd Platoon">Delta 2nd Platoon</option>
                        <option value="Echo 1st Platoon">Echo 1st Platoon</option>
                        <option value="Echo 2nd Platoon">Echo 2nd Platoon</option>
                        <option value="Foxtrot 1st Platoon">Foxtrot 1st Platoon</option>
                        <option value="Foxtrot 2nd Platoon">Foxtrot 2nd Platoon</option>
                    </select>
                    <label for="platoon">Platoon</label>
                        
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                        
                    <label>Email</label>
                        <?php if (isset($_GET['email'])) 
                            { ?>
                                <input type="email" name="email" value="<?php echo $_GET['email']; ?>"><br>
                        <?php }
                        else
                            { ?>
                                <input type="text" name="email"><br>
                        <?php }?>
                </div>

                <div class="form-input">
                    <span class="icon">
                        <i class="fa fa-user"></i>
                    </span>
                        
                    <label for="uname" >User Name</label>
                    <?php if (isset($_GET['uname'])) 
                        { ?>
                            <input type="text" name="uname" value="<?php echo $_GET['uname']; ?>"><br>
                        <?php 
                        }
                        else
                            { ?>
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
    
    <script src="script.js"></script>
</body>
</html>