const second = document.getElementById("second-quiz");
const last = document.getElementById("third-quiz");

const firstBtn = document.getElementById("first-btn")
const secondBtn = document.getElementById("second-btn")
const finalBtn = document.getElementById("final-btn")

const secondWarning = document.getElementById("warning2")
const finalWarning = document.getElementById("warning3")

redirectFirst = function (){
    window.location.href = "quiz1.php"
}

redirectSecond = function (){
    window.location.href = "quiz2.php"
}

redirectFinal = function (){
    window.location.href = "finalquiz.php"
}

firstBtn.addEventListener("click", redirectFirst)

secondBtn.addEventListener("click", redirectSecond)

finalBtn.addEventListener("click", redirectFinal)

function disableQuiz(quiz){
    if(quiz == 2){
        console.log("quiz 2 disable")

        // second.style.filter = "grayscale(100%)"
        second.classList.add("bnw")
        secondBtn.style.backgroundColor = "grey"
        secondBtn.style.color = "white"
        secondWarning.innerText = "Complete the previous quiz to unlock this quiz"
        secondBtn.removeEventListener("click", redirectSecond)
    }
    else if(quiz == 3){
        console.log("quiz 3 disable")

        // last.style.filter = "grayscale(100%)"
        last.classList.add("bnw")
        finalBtn.style.backgroundColor = "grey"
        finalBtn.style.color = "white"
        finalWarning.innerText = "Complete the previous quiz to unlock this quiz"
        finalBtn.removeEventListener("click", redirectFinal)
    }
}