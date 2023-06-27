const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')
const wrongSound = document.getElementById("wrong-sound")
const correctSound = document.getElementById("correct-sound")
const quizResult = document.getElementById("result")
const resultScore = document.getElementById("score")
const resultMessage = document.getElementById("message")
const continueButton = document.getElementById("continue-btn")
const ready = document.getElementById('ready')
const minimumScore = 70
const progressBar = document.getElementById("progress-bar")

wrongSound.volume = 0.2
correctSound.volume = 0.2

let shuffledQuestions, currentQuestionIndex
let clicked = false
let correctCount = 0

startButton.addEventListener("click", startGame)
nextButton.addEventListener("click", () => {
    currentQuestionIndex++
    setNextQuestion()
})
continueButton.addEventListener("click", function(){
    window.location.href = "quizPage.php"
})

function startGame(){
    correctCount = 0
    quizResult.classList.add("hide")
    continueButton.classList.add("hide")
    ready.classList.add("hide")
    startButton.classList.add("hide") // hide start button
    shuffledQuestions = questions.sort(() => Math.random - 0.5) //acak urutan soal
    currentQuestionIndex = 0
    progressBar.setAttribute("max", shuffledQuestions.length)
    questionContainerElement.classList.remove("hide") // show question
    setNextQuestion()
}

function setNextQuestion(){
    resetState() //ilangin semua warna yang sblmnya ada
    answered = false
    showQuestion(shuffledQuestions[currentQuestionIndex]) //ganti text pertanyaan sama pilihan jawabannya
}

function showQuestion(question){
    questionElement.innerText = question.question //ganti pertanyaan sesuai pertanyaan
    question.answers.forEach(answer => { //loop through each answer
        const button = document.createElement('button') // bikin button
        button.innerText = answer.text //ganti each button punya text jadi jawaban
        button.classList.add('btn')
        button.classList.add('answer-btn') //kasih class btn
        if(answer.correct){ //kalo value correctnya = true
            button.dataset.correct = answer.correct //kasih value correct
        }
        button.addEventListener("click", selectAnswer) //kalo buttonnya dipencet
        answerButtonsElement.appendChild(button)
    });
}

function resetState(){ //function buat reset warna dari background sama button"
    clearStatusClass(document.body) //ilangin class correct sama wrong biar background nya balik putih
    nextButton.classList.add("hide") // hide next button
    while(answerButtonsElement.firstChild){ //hilangin semua answer button yang ada
        answerButtonsElement.removeChild(answerButtonsElement.firstChild)
    }
}

function selectAnswer(e){
    if(answered) return
    answered = true

    progressBar.value = progressBar.value + 1

    const selectedButton = e.target //masukin tombol yang dipencet dlm variable
    const correct = selectedButton.dataset.correct //buat cek dia punya value bener apa ga
    setStatusClass(document.body, correct) //ubah warna background sesuai bener ato salah
    Array.from(answerButtonsElement.children).forEach(button => {
        setStatusClass(button, button.dataset.correct)
        button.disabled = true;
    })

    if(correct){ //play sfx correct kalo bener
        correctSound.play()
        correctCount++
    }
    else{ //play sfx salah kalo salah
        wrongSound.play()
    }
    
    if(shuffledQuestions.length > currentQuestionIndex + 1){
        nextButton.classList.remove("hide")
    }
    else{
        questionContainerElement.classList.add("hide")
        showResult()
    }
}

function setStatusClass(element, correct){
    clearStatusClass(element)
    if(correct){
        element.classList.add("correct")
    }
    else{
        element.classList.add("wrong")
    }
}

function clearStatusClass(element){
    element.classList.remove("correct")
    element.classList.remove("wrong")
}

function showResult(){
    quizResult.classList.remove("hide")
    startButton.innerText = "Review Lesson"
    startButton.classList.remove("hide")
    startButton.classList.remove("restart-btn")
    continueButton.classList.remove("hide")

    let score = correctCount/shuffledQuestions.length * 100

    resultScore.innerText = `Score : ${score}`
    if(score < minimumScore){
        resultMessage.innerText = `Aww, nice try. You got ${correctCount} out of ${shuffledQuestions.length} questions correct.`
    }
    else{
        resultMessage.innerText = `Well done! You got ${correctCount} out of ${shuffledQuestions.length} questions correct.`

        let xhr = new XMLHttpRequest()
        xhr.open("POST", "../../../script/updatequiz2.php", false)
        xhr.send()
    }
}

const questions=[
    {
        question: "Diantara ini, yang merupakan makanan khas bali adalah",
        answers: [
            {text: 'Tempe Mendoan', correct: false},
            {text: 'Pepeda', correct: false},
            {text: 'Gulai Belacan', correct: false},
            {text: 'Ayam Betutu', correct: true}
        ]
    },
    {
        question: "Nama danau yang terletak di Pulau Bali adalah",
        answers: [
            {text: 'Danau Toba', correct: false},
            {text: 'Danau Beratan', correct: true},
            {text: 'Danau Singkarak', correct: false},
            {text: 'Danau Sentani', correct: false}
        ]
    },
    {
        question: "Ibukota dari Provinsi Bali adalah",
        answers: [
            {text: 'Denpasar', correct: true},
            {text: 'Flores', correct: false},
            {text: 'Gianyar', correct: false},
            {text: 'Badung', correct: false}
        ]
    },
    {
        question: "Diantara ini yang bukan merupakan upacara adat Bali adalah",
        answers: [
            {text: 'Upacara Ngaben', correct: false},
            {text: 'Upacara Sadranan', correct: true},
            {text: 'Upacara Melasti', correct: false},
            {text: 'Upacara Saraswati', correct: false}
        ]
    },
    {
        question: "Salah satu pantai terkenal di Bali yang terkenal dengan pasir putihnya adalah",
        answers: [
            {text: 'Pantai Kuta', correct: true},
            {text: 'Pantai Sanur', correct: false},
            {text: 'Pantai Nusa Dua', correct: false},
            {text: 'Pantai Jimbaran', correct: false}
        ]
    },
    {
        question: "Apa julukan lain yang diberikan kepada Gunung Agung, gunung tertinggi di Bali",
        answers: [
            {text: 'Gunung Batur', correct: false},
            {text: 'Gunung Rinjani', correct: true},
            {text: 'Gunung Merapi', correct: false},
            {text: 'Gunung Abang', correct: false}
        ]
    },
    {
        question: "Tari legendaris Bali yang menggambarkan pertempuran antara kebaikan dan kejahatan adalah",
        answers: [
            {text: 'Tari Barong', correct: true},
            {text: 'Tari Legong', correct: false},
            {text: 'Tari Kecak', correct: false},
            {text: 'Tari Pendet', correct: false}
        ]
    },
    {
        question: "Apa nama festival musik yang diadakan setiap tahun di Ubud, Bali?",
        answers: [
            {text: 'Desa Tenganan', correct: true},
            {text: 'Desa Penglipuran', correct: false},
            {text: 'Desa Batubulan', correct: false},
            {text: 'Desa Sukawati', correct: false}
        ]
    },
    {
        question: "Apa nama salah satu air terjun terkenal di Bali yang terletak di daerah Buleleng?",
        answers: [
            {text: 'Air Terjun Gitgit', correct: false},
            {text: 'Air Terjun Sekumpul', correct: true},
            {text: 'Air Terjun Tegenungan', correct: false},
            {text: 'Air Terjun Nungnung', correct: false}
        ]
    },
    {
        question: "Apa nama gunung yang terkenal di Bali dan menjadi tempat trekking populer?",
        answers: [
            {text: 'Gunung Batur', correct: true},
            {text: 'Gunung Merapi', correct: false},
            {text: 'Gunung Abang', correct: false},
            {text: 'Gunung Batukaru', correct: false}
        ]
    }
]