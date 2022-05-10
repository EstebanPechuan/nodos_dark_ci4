// Scroll Down
window.addEventListener('scroll', () => {
    const navMenu = document.querySelector('.header')
    navMenu.classList.toggle('header-scroll', window.scrollY > 0)
})

let menu = document.querySelector('.menu')
let botonMenu = document.querySelector('.iconos')
let iconosMenu = document.querySelectorAll('.iconos img')

botonMenu.addEventListener('click', () => {
    iconosMenu[0].classList.toggle('icon-active')
    iconosMenu[1].classList.toggle('icon-active')

    menu.classList.toggle('menu-active')
})


// Modal Lightbox - w3school
// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}