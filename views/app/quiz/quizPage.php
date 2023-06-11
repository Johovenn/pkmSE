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
    <link rel="stylesheet" href="../../../style/quizPage.css">
</head>
<body>
    <nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
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
                <a href="../account/changeUsername.php"><i class="fa-solid fa-user"></i></a>
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
                <div class="add-new-province"><a href="">Switch province</a></div>
            </div>
        </div>
    </nav>
    <main>
        <ul id="accordion">
            <li>
                <label for="first">
                    <div>
                        <p>Quiz 1</p>
                        <p>Test your common knowledge about the province</p>
                    </div>
                    <span class="arrow">&#x3e</span>
                </label>
                <input type="radio" name="accordion" id="first">
                <div class="content">
                    <div class="content-left">
                        <p>Total Questions : 10</p>
                        <p>Minimum Passing Score : 60</p>
                    </div>
                    <div class="content-right">
                        <a href="quiz1.php">Start Quiz</a>
                    </div>
                </div>
            </li>
            <li>
                <label for="second">
                    <div>
                        <p>Quiz 2</p>
                        <p>Deepen your knowledge about the province</p>
                    </div>
                    <span class="arrow">&#x3e</span>
                </label>
                <input type="radio" name="accordion" id="second">
                <div class="content">
                    <div class="content-left">
                        <p>Total Questions : 10</p>
                        <p>Minimum Passing Score : 65</p>
                    </div>
                    <div class="content-right">
                        <a href="#">Start Quiz</a>
                    </div>
                </div>
            </li>
            <li>
                <label for="third">
                    <div>
                        <p>Final Quiz</p>
                        <p>Get on the ultimate quiz about the province</p>
                    </div>
                    <span class="arrow">&#x3e</span>
                </label>
                <input type="radio" name="accordion" id="third">
                <div class="content">
                    <div class="content-left">
                        <p>Total Questions : 20</p>
                        <p>Minimum Passing Score : 75</p>
                    </div>
                    <div class="content-right">
                        <a href="#">Start Quiz</a>
                    </div>                
                </div>
            </li>
        </ul>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>