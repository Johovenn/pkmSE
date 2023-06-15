let current = 1;
let submitButton = document.getElementById('submit' + current)

function showNextQuestion(){
    let currentQuestion = document.getElementById("question" + current)
    let nextQuestion = document.getElementById("question" + (current + 1))

    if(currentQuestion && nextQuestion){
        currentQuestion.style.display = 'none'
        nextQuestion.style.display = 'block'
        current++
    }
}


submitButton.addEventListener('click', function(){
    console.log("button di click")
    showNextQuestion()
})