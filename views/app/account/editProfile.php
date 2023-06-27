<?php
    session_start();
    include("../../../script/dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../../../style/editProfile.css">
    <link rel="icon" href="../../../images/logo indocano 2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="../../../script/logout-button.js"></script>
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
                <a href="#"><ion-icon name="person-outline"></ion-icon></a>
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
                        <img src="../../../images/Provinsi Bali.png" alt="">
                    </div>
                    <div class="province-name">Provinsi Bali</div>
                </div>
                <hr>
                <div class="add-new-province"><a href="../selection/selectionPage.php">Switch province</a></div>
            </div>
        </div>
    </nav>  
    <div class="main">
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li class="hover-effect"><a href="editProfile.php">Edit Profile</a></li>
                    <li class="hover-effect"><a href="changePassword.php">Change Password</a></li>
                    <li class="hover-effect"><a href="termsofservice.php">Terms Of Service</a></li>
                    <li class="hover-effect"><a href="privacypolicy.php">Privacy Policy</a></li>
                </ul>
                <button href="../../landingPage.html" id="logout-btn" class="log-out-button hover-effect">Log Out</button>
                <dialog id="logout-popup" data-modal>
                    <span class="confirmation">Are you sure you want to log out?</span>
                    <div class="buttons">
                        <button class="button" id="no-btn">No</button>
                        <button class="button" id="yes-btn">Yes</button>
                    </div>
                </dialog>
            </div>
            <div class="content">
                <div class="title">
                    <img src="../../../images/profile-pic.png" alt="">
                    <span class="username">Username</span>
                </div>
                <div class="form-container">
                    <form action="editProfile.php" method = "post">
                        <div class="input-field">
                            <div class="first-name">
                                <label for="first-name-input">First Name</label>
                                <input type="text" name="first-name" id="first-name-input">
                            </div>
                            <div class="last-name">
                                <label for="last-name-input">Last Name</label>
                                <input type="text" name="last-name" id="last-name-input">
                            </div>
                        </div>
                        <div class="input-field">
                            <label for="username-input">Username</label>
                            <input type="text" name="username" id="username-input">
                        </div>
                        <div class="input-field">
                            <label for="email-input">Email</label>
                            <input type="email" name="email" id="email-input">
                        </div>
                        <div class="input-field">
                            <label for="dob-input">Date of Birth</label>
                            <input type="text" name="dob" id="dob-input">
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src ="../../../script/editProfile.js"></script>

    <?php 
        include("../../../script/editProfileScript.php");
    ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>