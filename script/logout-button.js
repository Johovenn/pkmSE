const logoutBtn = document.getElementById("logout-btn")
const modal = document.getElementById("logout-popup")
const noBtn = document.getElementById("no-btn")
const yesBtn = document.getElementById("yes-btn")

logoutBtn.addEventListener("click", function(){
    modal.showModal()
    modal.style.display = "flex"
})

noBtn.addEventListener("click", function(){
    modal.close()
    modal.style.display = "none"
})

yesBtn.addEventListener("click", function(){
    window.location.href= "../../landingPage.html"
})