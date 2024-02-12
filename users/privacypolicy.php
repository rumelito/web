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
        <a href="https://www.facebook.com/colegiodemontalbanrotcunit"><img src="../photos/logoto.jpg" class="logoo"></a>
        <nav class="navigation">
            <a href="user.php" class="link">Home</a>
            <a href="aboutus.php" class="link">About Us</a>
            <button class="uhpsignin" >Sign In</button>&nbsp;&nbsp;<button class="uhpsignup">Sign Up</button>
        </nav>
    </header>

    <!-- Body -->
    <div class="midder1">
            <h1>"Privacy Policy"</h1> 
            <p>"This is a privacy policy template for the ROTC Officer Evaluation System (ROES). <br>
            This policy explains how we collect, use, and protect your personal information when <br>
            you use the ROES. <br>
            <br>
            We collect your personal information when you register for the ROES, complete your 
            <br>self-assessment, receive feedback from your peers and superiors, and access your 
            <br>evaluation reports. The types of information we collect include your name, email 
            <br>address, rank, unit, performance ratings, strengths, weaknesses, and goals. <br>
            <br>
            We use your personal information to provide you with the ROES service, to improve the <br>
            quality and effectiveness of the ROTC program, to conduct research and analysis on <br>
            officer development, and to comply with legal and regulatory requirements. We do not <br>
            sell, rent, or share your personal information with any third parties without your <br>
            consent, except as required by law or in case of a merger, acquisition, or <br>
            reorganization of our organization. <br>
            <br>
            We protect your personal information by using appropriate technical and organizational <br>
            measures to prevent unauthorized access, disclosure, modification, or destruction. We <br>
            store your personal information on secure servers that are encrypted and protected by <br>
            firewalls. We limit access to your personal information to authorized personnel who <br>
            need it to perform their duties. We retain your personal information for as long as <br>
            necessary to fulfill the purposes for which we collected it, or as required by law. <br>
            <br>
            You have the right to access, correct, update, delete, or request a copy of your <br>
            personal information at any time. You can do so by contacting us. <br>
            You also have the right to opt out of receiving any marketing or promotional <br>
            communications from us. You can do so by clicking on the unsubscribe link in any <br>
            email we send you, or by contacting us. <br>
            <br>
            We may update this privacy policy from time to time to reflect changes in our practices <br>
            or applicable laws. We will notify you of any material changes by posting a notice on our <br>
            website or sending you an email. Your continued use of the ROES after such notice <br>
            constitutes your acceptance of the updated privacy policy. <br>
            <br>
            If you have any questions or concerns about this privacy policy or how we handle your <br>
            personal information, please contact us. We are committed to respecting <br>
            your privacy and protecting your personal information. "<br>
            </p> 
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