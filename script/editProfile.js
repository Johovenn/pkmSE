const firstNameInput = document.getElementById("first-name-input")
const lastNameInput = document.getElementById("last-name-input")
const usernameInput = document.getElementById("username-input")
const emailInput = document.getElementById("email-input")
const dobInput = document.getElementById("dob-input")

function getUserData(firstName, lastName, username, email, dob){
    console.log("function jalan")

    firstNameInput.value = firstName
    lastNameInput.value = lastName
    usernameInput = username
    emailInput = email
    dobInput = dob
}