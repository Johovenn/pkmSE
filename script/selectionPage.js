const baliBtn = document.getElementById("enroll-bali")

baliBtn.addEventListener("click", function(){
    let xhr = new XMLHttpRequest()
    let param = "param=1"
    let url = "../../../script/createnewprogress.php?param=" + encodeURIComponent(param)
    xhr.open("GET", url, true)

    xhr.onreadystatechange = function() {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                //berhasil
                console.log(xhr.status)
            }
            else{
                //gagal
            }
        }
    }

    xhr.send()
    window.location.href = "../learn/learnPage.php"
})

const jatengBtn = document.getElementById("enroll-jateng")

jatengBtn.addEventListener("click", function(){
    let xhr = new XMLHttpRequest()
    let param = "param=2"
    let url = "../../../script/createnewprogress.php?param=" + encodeURIComponent(param)
    xhr.open("GET", url, true)

    xhr.onreadystatechange = function() {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                //berhasil
                console.log(xhr.status)
            }
            else{
                //gagal
            }
        }
    }

    xhr.send()
    window.location.href = "../learn/learnPage.php"
})
