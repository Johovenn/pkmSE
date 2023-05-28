console.log("test");

const aboutUsButton = document.getElementById("about-us-button");

aboutUsButton.addEventListener("click", (event) => {
    event.preventDefault();

    const target = document.querySelector(aboutUsButton.getAttribute('href'));
    
    target.scrollIntoView({
        behavior: 'smooth'
    })
})