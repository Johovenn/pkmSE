<?php 
    include("../../../script/dbconnection.php");
    include("../../../script/resetPassword.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../../../style/changePassword.css">
    <script src="https://kit.fontawesome.com/804c059b40.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="../quiz/quizPage.php"><i class="fa-solid fa-person-chalkboard"></i></a>
                <span class="text">Quiz</span>
            </div>

            <div class="nav-logo">
                <a href=""><i class="fa-solid fa-book"></i></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo">
                <a href=""><i class="fa-solid fa-user"></i></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="logout-button">
            <a href="../../landingPage.html">Log Out</a>
        </div>
    </nav>
    <div class="main">
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li class="hover-effect"><a href="changeUsername.php">Change Username</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li class="hover-effect"><a href="changeEmail.php">Change Email</a></li>
                    <li class="hover-effect"><a href="accountSettings.php">Account Settings</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="title">Change Password</div>

                <form action="changePassword.php" method="post">
                    <div class="input-group">
                        <label for="current">Current Password</label>
                        <input type="password" name="current">
                    </div>
                    <div class="input-group">
                        <label for="new">New Password</label>
                        <input type="password" name="new">
                    </div>
                    <div class="input-group">
                        <label for="confirm">Confirm Password</label>
                        <input type="password" name="confirm">
                    </div>

                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>