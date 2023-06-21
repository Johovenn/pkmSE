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
    <link rel="icon" href="../../../images/logo indocano 2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="../homePage.php"><ion-icon name="home-outline"></ion-icon></a>
                <span class="text">Home</span>
            </div>

            <div class="nav-logo">
                <a href="../quiz/quizPage.php"><ion-icon name="barbell-outline"></ion-icon></a>
                <span class="text">Train</span>
            </div>

            <div class="nav-logo">
                <a href="../learn/learnPage.php"><ion-icon name="book-outline"></ion-icon></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo">
                <a href="../account/accountSettings.php"><ion-icon name="person-outline"></ion-icon></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="change-province-button">
            <div class="current-province">
                <img src="../../../images/Provinsi Bali.png" alt="">
            </div>
            <div class="dropdown-container">
                <span>Current Province</span>
                <hr>
                <div class="enrolled-province">
                    <div class="province-image">
                        <img src="../../images/Provinsi Bali.png" alt="">
                    </div>
                    <div class="province-name">Provinsi Bali</div>
                </div>
                <hr>
                <div class="add-new-province"><a href="../selection/selectionPage.html">Switch province</a></div>
            </div>
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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>