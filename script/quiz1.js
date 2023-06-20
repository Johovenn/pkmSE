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
const minimumScore = 60
const progressBar = document.getElementById("progress-bar")

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
        // startButton.innerText = 'Restart'
        // startButton.classList.remove("hide")
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
    }
}

const questions=[
    {
        question: "Pulau Bali memiliki julukan",
        answers: [
            {text: 'Pulau Seribu Pura', correct: true},
            {text: 'Pulau Seribu Rumah', correct: false},
            {text: 'Pulau Seribu Sungai', correct: false},
            {text: 'Pulau Seribu Gunung', correct: false}
        ]
    },
    {
        question: "Pura terkenal yang terletak di Pulau Bali adalah",
        answers: [
            {text: 'Pura Giri Arjuno', correct: false},
            {text: 'Pura Salaka Alas Purwo', correct: false},
            {text: 'Pura Agung Blambangan', correct: false},
            {text: 'Pura Tanah Lot', correct: true}
        ]
    },
    {
        question: "Bali terkenal dengan seni tari tradisionalnya, yang bernama",
        answers: [
            {text: 'Tari Saman', correct: false},
            {text: 'Tari Kecak', correct: true},
            {text: 'Tari Piring', correct: false},
            {text: 'Tari Zapin', correct: false}
        ]
    },
    {
        question: "Upacara Nyepi adalah bagian dari tradisi",
        answers: [
            {text: 'Hindu Bali', correct: true},
            {text: 'Islam Bali', correct: false},
            {text: 'Buddha Bali', correct: false},
            {text: 'Kristen Bali', correct: false}
        ]
    },
    {
        question: "Nama dari peninggalan sejarah megalitikum di Bali yang berupa punden berundak dan terletak di Desa Pejeng, Gianyar adalah",
        answers: [
            {text: 'Candi Borobudur', correct: false},
            {text: 'Candi Prambanan', correct: false},
            {text: 'Punden Berundak Pejeng', correct: true},
            {text: 'Candi Sewu', correct: false}
        ]
    },
    {
        question: "Hewan endemik yang bisa ditemukan di Bali adalah",
        answers: [
            {text: 'Burung Jalak Bali', correct: true},
            {text: 'Orangutan Bali', correct: false},
            {text: 'Komodo', correct: false},
            {text: 'Harimau Bali', correct: false}
        ]
    },
    {
        question: "Bali dikenal oleh peminat olahraga air, salah satu olahraganya yaitu",
        answers: [
            {text: 'Surfing', correct: true},
            {text: 'Polo Air', correct: false},
            {text: 'Balapan Renang', correct: false},
            {text: 'Ski Air', correct: false}
        ]
    },
    {
        question: "Bahasa yang paling banyak digunakan di Pulau Bali adalah",
        answers: [
            {text: 'Bahasa Jawa', correct: false},
            {text: 'Bahasa Sunda', correct: false},
            {text: 'Bahasa Bali', correct: true},
            {text: 'Bahasa Indonesia', correct: false}
        ]
    },
    {
        question: "Mata pencaharian utama masyarakat Bali ada pada sektor",
        answers: [
            {text: 'Perminyakan', correct: false},
            {text: 'Pertambangan', correct: false},
            {text: 'Manufaktur', correct: false},
            {text: 'Pariwisata', correct: true}
        ]
    },
    {
        question: "Jatiluwih, yang terkenal karena sawah teraseringnya, terletak di kabupaten",
        answers: [
            {text: 'Tabanan', correct: true},
            {text: 'Klungkung', correct: false},
            {text: 'Badung', correct: false},
            {text: 'Gianyar', correct: false}
        ]
    }
]