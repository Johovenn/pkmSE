<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCano</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../../images/logo indocano 2.png">
    <link rel="stylesheet" href="../../../style/quizPage.css">
</head>
<body>
    <nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href=""><ion-icon name="barbell-outline"></ion-icon></a>
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
    <main>
        <ul id="accordion">
            <li>
                <label for="first" id="first-quiz">
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
                <label for="second" id="second-quiz">
                    <div>
                        <p>Quiz 2</p>
                        <p>Enhance your knowledge about the province</p>
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
                        <a href="quiz2.php">Start Quiz</a>
                    </div>
                </div>
            </li>
            <li>
                <label for="third" id="third-quiz">
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