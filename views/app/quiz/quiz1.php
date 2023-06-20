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
    <script defer src="../../../script/quiz1.js"></script>
    <link rel="icon" href="../../../images/logo indocano 2.png">
</head>
<body>
<a class="back-home" href="quizPage.php"><ion-icon name="arrow-back-circle-outline"></ion-icon> Back to Home</a>
    
    <progress id="progress-bar" value="0" max="4"></progress>

    <div class="container">
        <div id="question-container" class="hide">
            <div id="question">Question</div>
            <div id="answer-buttons" class="btn-grid">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
            </div>
        </div>
        <div class="result hide" id="result">
            <div class="quiz-finish-image">
                <img src="../../../images/quiz-finish.jpg" alt="">
            </div>
            <div class="message" id="score">Score : 100</div>
            <div class="message" id="message">
                Well done! You got 10 out of 10 questions right!
            </div>
        </div>
        <div class="ready" id="ready">Are you ready?</div>
        <div class="controls">
            <button id="start-btn" class="start-btn btn">Start</button>
            <button id="next-btn" class="next-btn btn hide">Next</button>
            <button id="continue-btn" class="continue-btn btn hide">Continue</button>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <audio src="../../../audio/correct.mp3" id="correct-sound"></audio>
    <audio src="../../../audio/wrong.mp3" id="wrong-sound"></audio>
</body>
</html>