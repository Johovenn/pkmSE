<?php 
    include("../script/dbconnection.php");
    include("../script/verifyLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCano | Login</title>
    <link rel="stylesheet" href="../style/loginPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            <form action="loginPage.php" method="post">
                <span class="title">Sign In</span>
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter your username">
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <span id="error-message">
                    <?php 
                        if(!empty($errorMessage)){
                            echo $errorMessage;
                        }
                        $errorMessage = "";
                    ?>
                </span>

                <input type="submit">
            </form> 
        </div>
        <div id="sign-in-link">Dont have an account? <a href="registerPage.php">Sign up here!</a></div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>