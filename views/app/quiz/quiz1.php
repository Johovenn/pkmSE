<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCano</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../style/quiz1.css">
</head>
<body>
    <a class="back-home" href="quizPage.php"><ion-icon name="arrow-back-circle-outline"></ion-icon> Back to Home</a>
    <div class="question-container">
        <div class="question var1" id="question1">
            <div>
                <img src="../../../images/borobudur.png" alt="">
            </div>
            <div class="answer-container">
                <p>What is the name of this building?</p>
                <div class="answer">
                    <button class="choice">Answer 1</button>
                    <button class="choice">Answer 2</button>
                    <button class="choice">Answer 3</button>
                </div>
            </div>
        </div>
        <div class="question var2" id="question2">
            <div class="image">
                <img src="../../../images/monas.png" alt="">
            </div>
            <div class="answer-container">
                <p>What is the name of this building?</p>
                <div class="answer">
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="question var3" id="question3">
            <div>
                <img src="../../../images/menara.png" alt="">
            </div>
            <div class="answer-choice">
                <button class="choice">Answer 1</button>
                <button class="choice">Answer 2</button>
                <button class="choice">Answer 3</button>
            </div>
        </div>
        <button class="submit-button" id="submit1">Submit</button>
    </div>

    <script src="../../../script/quiz1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>