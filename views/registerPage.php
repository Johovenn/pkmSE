<?php 
    include("../script/dbconnection.php");
    include("../script/verifyRegistration.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCano</title>
    <link rel="stylesheet" href="../style/registerPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/logo indocano 2.png">
</head> 
<body>
    <img id="bg-1" src="../images/background1.png" alt="">
    <img id="bg-2" src="../images/background2 copy.png" alt="">

    <div id="navbar">
        <div id="logo">
            <img src="../images/logo indocano 2.png" alt="">
        </div>
        <div id="navbar-right">
            <a href="landingPage.html">Back to Home</a>
        </div>
    </div>
    <div id="content">
        <div id="form-box">
            <form action="registerPage.php" method="post">
                <span class="title">Sign Up</span>
                <div class="input-field">
                    <input type="text" placeholder="First Name" name="first-name">
                    <span class="validation-message"><?php if(!empty($usernameError)) echo $usernameError; $usernameError = "";?></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Last Name" name="last-name">
                    <span class="validation-message"><?php if(!empty($usernameError)) echo $usernameError; $usernameError = "";?></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Username" name="username">
                    <span class="validation-message"><?php if(!empty($usernameError)) echo $usernameError; $usernameError = "";?></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email" name="email">
                    <span class="validation-message"><?php if(!empty($emailError)) echo $emailError; $emailError = "";?></span>
                </div>
                <div class="input-field">
                    <input type="date" placeholder="Date of Birth" name="dob" value="" min="1980-01-01" max="2019-01-01">
                    <span class="validation-message"><?php if(!empty($emailError)) echo $emailError; $emailError = "";?></span>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password">
                    <span class="validation-message"><?php if(!empty($passwordError)) echo $passwordError; $passwordError = "";?></span>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Confirm Password" name="confirm">
                    <span class="validation-message"><?php if(!empty($confirmError)) echo $confirmError; $confirmError = "";?></span>
                </div>
                <span class="validation-message"><?php if(!empty($errorMessage)) echo $errorMessage; $errorMessage = "";?></span>
                <input type="submit">
            </form> 
        </div>
        <div id="sign-in-link">Already have an account? <a href="loginPage.php">Sign in here!</a></div>
    </div>
</body>
</html>