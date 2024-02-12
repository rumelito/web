<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 
    {
        include "../connection/dbconn.php";
        $sql = mysqli_query($conn, "SELECT Officername FROM officertb");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Page</title>
    <link rel="stylesheet" href="UserEval.css">
</head>
<body>
    <header class="header">
        <h1>Welcome, <?php echo $_SESSION['lname']; ?></h1>
        <h2> Your Platoon is &nbsp; <?php echo $_SESSION['platoon']; ?></h2>
    </header>

    <form action="evaluation.php" method="post">	              
        <div class="selectt">
    
            <select class="select" name="officer">
                <?php
                while ($row = $sql->fetch_assoc()) 
                    {
                        echo '<option value="' . htmlspecialchars($row['Officername']) . '">' . htmlspecialchars($row['Officername']) . '</option>';
                    }
                ?>
            </select>
        </div>

        <!-- First Page-->
        <div class="main-container" >

            <input type="radio" class="tab-radio" name="tab" id="tab1" checked>
            <label for="tab1" class="tab-label">Tab 1</label>   
            <div class="Question-Container">
                <h2>Evaluation Questions:</h2>
                <div class="questions">
                    <p><h3>Question 1:</h3> Do you think the officer demonstrate leadership skills within the rotc units?</p>
                    <p>
                        <span>
                            <input type="radio" name="q1" value="Strongly Agree" required>
                            <label for="">1</label>
                            <input type="radio" name="q1" value="Agree" required>
                            <label for="">2</label>
                            <input type="radio" name="q1" value="Neutral" required>
                            <label for="">3</label>
                            <input type="radio" name="q1" value="DisAgree" required>
                            <label for="">4</label>
                            <input type="radio" name="q1" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div>  
                
                <div class="questions">
                    <p><h3>Question 2:</h3> Do you think the officer motivate and inspire their unit?</p>
                    <p>
                        <span>
                            <input type="radio" name="q2" value="Strongly Agree" required>
                            <label for="">1</label>
                            <input type="radio" name="q2" value="Agree" required>
                            <label for="">2</label>
                            <input type="radio" name="q2" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q2" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q2" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 

                <div class="questions">
                    <p><h3>Question 3:</h3> Do you think the officer handle unexpected situations or changes during exercises?</p>
                    <p>
                        <span>
                            <input type="radio" name="q3" value="Strongly Agree" required>
                            <label for="">1</label>
                            <input type="radio" name="q3" value="Agree" required>
                            <label for="">2</label>
                            <input type="radio" name="q3" value="Neutral" required>
                            <label for="">3</label>
                            <input type="radio" name="q3" value="DisAgree" required>
                            <label for="">4</label>
                            <input type="radio" name="q3" value="Strongly DisAgree" required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 

                <div class="questions">
                    <p><h3>Question 4:</h3> Do you think the officer encourage teamwork and cooperation among peers?</p>
                    <p>
                        <span>
                            <input type="radio" name="q4" value="Strongly Agree" required>
                            <label for="">1</label>
                            <input type="radio" name="q4" value="Agree" required>
                            <label for="">2</label>
                            <input type="radio" name="q4" value="Neutral" required>
                            <label for="">3</label>
                            <input type="radio" name="q4" value="DisAgree" required>
                            <label for="">4</label>
                            <input type="radio" name="q4" value="Strongly DisAgree" required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 
                <div class="questions">
                    <p><h3>Question 5:</h3> Do you think the officer maintain physical fitness standard?</p>
                    <p>
                        <span>
                            <input type="radio" name="q5" value="Strongly Agree"required>
                            <label for="">1</label>
                            <input type="radio" name="q5" value="Agree"required>
                            <label for="">2</label>
                            <input type="radio" name="q5" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q5" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q5" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 
            </div>
    

            <!-- Second Page-->


            <input type="radio" class="tab-radio" name="tab" id="tab2">
            <label for="tab2" class="tab-label">Tab 2</label>     
            <div class="Question-Container">
                <h2>Evaluation Questions:</h2>
                <div class="questions">
                    <p><h3>Question 6:</h3> Do you think the officer commitment to discipline and adherence to regulations?</p>
                    <p>
                        <span>
                            <input type="radio" name="q6" value="Strongly Agree"required>
                            <label for="">1</label>
                            <input type="radio" name="q6" value="Agree"required>
                            <label for="">2</label>
                            <input type="radio" name="q6" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q6" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q6" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div>  
            
                <div class="questions">
                    <p><h3>Question 7:</h3> Do you think the officer display professionalism and integrity in their conduct?</p>
                    <p>
                        <span>
                            <input type="radio" name="q7" value="Strongly Agree"required>
                            <label for="">1</label>
                            <input type="radio" name="q7" value="Agree"required>
                            <label for="">2</label>
                            <input type="radio" name="q7" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q7" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q7" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 

                <div class="questions">
                    <p><h3>Question 8:</h3> Do you think the officer contribute to the overall morale and cohesion of the unit?</p>
                    <p>
                        <span>
                            <input type="radio" name="q8" value="Strongly Agree"required>
                            <label for="">1</label>
                            <input type="radio" name="q8" value="Agree"required>
                            <label for="">2</label>
                            <input type="radio" name="q8" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q8" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q8" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 

                <div class="questions">
                    <p><h3>Question 9:</h3> Do you think the officer understanding and application of ROTC principles, policies, and procedure?</p>
                    <p>
                        <span>
                            <input type="radio" name="q9" value="Strongly Agree"required>
                            <label for="">1</label>
                            <input type="radio" name="q9" value="Agree"required>
                            <label for="">2</label>
                            <input type="radio" name="q9" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q9" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q9" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 

                <div class="questions">
                    <p><h3>Question 10:</h3> Do you think the officer promoting the safety protocols within their units?</p>
                    <p>
                        <span>
                            <input type="radio" name="q10" value="Strongly Agree"required>
                            <label for="">1</label>
                            <input type="radio" name="q10" value="Agree"required>
                            <label for="">2</label>
                            <input type="radio" name="q10" value="Neutral"required>
                            <label for="">3</label>
                            <input type="radio" name="q10" value="DisAgree"required>
                            <label for="">4</label>
                            <input type="radio" name="q10" value="Strongly DisAgree"required>
                            <label for="">5</label>
                        </span><br>
                        <p class="legend">LEGEND: 1(Strongly Agree), 2(Agree), 3(Neutral), 4(DisAgree), 5(Strongly DisAgree)</p>
                    </p>
                </div> 
            </div>
            <!-- Button-->
            <div class="button">
                <a href="logout.php" class="btn">LOG OUT</a>
            <button type="submit" name="Submit" class="btn">SUBMIT</button>
        </div>

    </form>
</body>
</html>

<?php 
}
else
    {
        header("Location: user.php");
        exit();
    }
?>


