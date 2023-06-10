<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCano</title>
    <script src="https://kit.fontawesome.com/804c059b40.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/quizPage.css">
</head>
<body>
    <nav>
        <div class="greetings">
            <img src="../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="quizPage.php"><i class="fa-solid fa-person-chalkboard"></i></a>
                <span class="text">Quiz</span>
            </div>

            <div class="nav-logo">
                <a href=""><i class="fa-solid fa-book"></i></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo">
                <a href="account/changeUsername.php"><i class="fa-solid fa-user"></i></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="change-province-button">
            <div class="current-province">
                <img src="../../images/Provinsi Bali.png" alt="">
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
                <div class="add-new-province"><a href="">Switch province</a></div>
            </div>
        </div>
    </nav>
    <main>
        <ul id="accordion">
            <li>
                <label for="first">Quiz 1<span>&#x3e</span></label>
                <input type="checkbox" name="accordion" id="first">
                <div class="content">
                    <div class="content-left"></div>
                </div>
            </li>
            <li>
                <label for="second">Quiz 2<span>&#x3e</span></label>
                <input type="checkbox" name="accordion" id="second">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus at et error quos, unde officia inventore. Repellendus facere quibusdam laboriosam, quidem error laudantium architecto, quam doloribus obcaecati, odit praesentium nam.</p>
                </div>
            </li>
            <li>
                <label for="third">Final Quiz<span>&#x3e</span></label>
                <input type="checkbox" name="accordion" id="third">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus at et error quos, unde officia inventore. Repellendus facere quibusdam laboriosam, quidem error laudantium architecto, quam doloribus obcaecati, odit praesentium nam.</p>
                </div>
            </li>
        </ul>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>