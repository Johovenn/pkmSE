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
const minimumScore = 75
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
        xhr.open("POST", "../../../script/updatequiz1.php", false)
        xhr.send()
    }
}

const questions=[
    {
        question: "Apa nama istilah dalam bahasa Bali yang digunakan untuk menyebut 'terima kasih'?",
        answers: [
            {text: 'Om Swastiastu', correct: false},
            {text: 'Rahajeng Semeng', correct: false},
            {text: 'Suksma', correct: false},
            {text: 'Matur suksma', correct: true}
        ]
    },
    {
        question: "Apa nama danau terbesar di Bali?",
        answers: [
            {text: 'Danau Buyan', correct: false},
            {text: 'Danau Tamblingan', correct: false},
            {text: 'Danau Batur', correct: true},
            {text: 'Danau Beratan', correct: false}
        ]
    },
    {
        question: "Jenis kerajinan tangan yang terkenal di Bali adalah",
        answers: [
            {text: 'Batik', correct: false},
            {text: 'Tenun', correct: false},
            {text: 'Anyaman', correct: false},
            {text: 'Kerajinan Perak', correct: true}
        ]
    },
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
        question: " Apa nama pantai di Bali yang terkenal dengan ombaknya yang cocok untuk olahraga selancar ?",
        answers: [
            {text: 'Pantai Padang-padang', correct: true},
            {text: 'Pantai Dreamland', correct: false},
            {text: 'Pantai Balangan', correct: false},
            {text: 'Pantai Medewi', correct: false}
        ]
    },
    {
        question: " Nama tempat yang terkenal dengan panorama alamnya yang indah dan terletak di Kintamani, Bali adalah ",
        answers: [
            {text: 'Bukit Campuhan', correct: false},
            {text: 'Bukit Teletubbies', correct: false},
            {text: 'Bukit Asah', correct: true},
            {text: 'Bukit Jati', correct: false}
        ]
    },
    {
        question: " Pada saat apa festival Kuningan diadakan dalam agama Hindu Bali? ",
        answers: [
            {text: 'Pada bulan Januari', correct: false},
            {text: 'Pada bulan Februari', correct: false},
            {text: 'Pada bulan Maret', correct: false},
            {text: 'Pada bulan April', correct: true}
        ]
    },
    {
        question: " Apa nama burung yang dianggap suci dan dijadikan simbol Bali? ",
        answers: [
            {text: 'Burung Jalak Bali', correct: true},
            {text: 'Burung Elang Bali', correct: false},
            {text: 'Burung Merak Bali', correct: false},
            {text: 'Burung Garuda Bali', correct: false}
        ]
    },
    {
        question: " Apa nama danau yang terkenal di Bali dan menjadi ikon wisata utama di daerah Bedugul ? ",
        answers: [
            {text: 'Danau Beratan', correct: true},
            {text: 'Danau Buyan', correct: false},
            {text: 'Danau Tamblingan', correct: false},
            {text: 'Danau Batur', correct: false}
        ]
    },
    {
        question: " Apa nama puncak gunung yang terletak di daerah Buleleng dan merupakan spot populer untuk menikmati matahari terbit ? ",
        answers: [
            {text: 'Puncak Agung', correct: false},
            {text: 'Puncak Merapi', correct: false},
            {text: 'Puncak Abang', correct: false},
            {text: 'Puncak Lesung', correct: true}
        ]
    },
    {
        question: " Apa nama tradisi pengobatan tradisional Bali yang menggunakan ramuan alami dan teknik pijat ? ",
        answers: [
            {text: 'Yoga', correct: false},
            {text: 'Ayurveda', correct: false},
            {text: 'Reflexology', correct: false},
            {text: 'Urut Bali', correct: true}
        ]
    },
    {
        question: " Apa nama pantai terkenal di Bali yang terkenal dengan keberadaan bangunan pura yang berada di tengah laut ? ",
        answers: [
            {text: 'Pantai Kuta', correct: false},
            {text: 'Pantai Sanurword', correct: false},
            {text: 'Pantai Nusa Dua', correct: false},
            {text: 'Pantai Tanah Lot', correct: true}
        ]
    },
    {
        question: " Apa nama makanan khas Bali yang terbuat dari daging bebek dan dibakar dengan menggunakan alat khusus? ",
        answers: [
            {text: 'Bebek Betutu', correct: false},
            {text: 'Bebek Goreng', correct: false},
            {text: 'Bebek Panggang', correct: true},
            {text: 'Bebek Menyatnyat', correct: false}
        ]
    },
    {
        question: " Apa nama museum seni yang terkenal di Ubud, Bali? ",
        answers: [
            {text: 'Museum Bali', correct: false},
            {text: 'Museum Neka', correct: false},
            {text: 'Museum Antonio Blanco', correct: true},
            {text: 'Museum Rudana', correct: false}
        ]
    },
    {
        question: " Apa nama desa di Bali yang terkenal dengan produksi kerajinan peraknya? ",
        answers: [
            {text: 'Desa Celuk', correct: true},
            {text: 'Desa Mas', correct: false},
            {text: 'Desa Batuan', correct: false},
            {text: 'Desa Pejeng', correct: false}
        ]
    },
    {
        question: "Apa nama tradisi mengenakan kain sarung oleh pria Bali dalam acara-acara keagamaan?",
        answers: [
            {text: 'Kecak', correct: false},
            {text: 'Baris', correct: false},
            {text: 'Udeng', correct: false},
            {text: 'Kamen', correct: true}
        ]
    },
    {
        question: "Apa nama pantai di Bali yang terkenal dengan panorama alamnya yang eksotis dan pohon-pohon bergoyang?",
        answers: [
            {text: 'Pantai Suluban', correct: true},
            {text: 'Pantai Green Bowl', correct: false},
            {text: 'Pantai Melasti', correct: false},
            {text: 'Pantai Pandawa', correct: false}
        ]
    },
    {
        question: "Apa nama prosesi upacara pengaben yang dilakukan di Bali?",
        answers: [
            {text: 'Ngaben', correct: true},
            {text: 'Nyepi', correct: false},
            {text: 'Galungan', correct: false},
            {text: 'Kuningan', correct: false}
        ]
    },
    {
        question: "Apa nama jembatan terkenal di Bali yang menghubungkan Denpasar dengan Kuta?",
        answers: [
            {text: 'Jembatan Tukad Badung', correct: true},
            {text: 'Jembatan Sukawati', correct: false},
            {text: 'Jembatan Ayung', correct: false},
            {text: 'Jembatan Kuningan', correct: false}
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
]