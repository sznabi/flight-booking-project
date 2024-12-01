document.addEventListener("DOMContentLoaded", () => {
    const classSelector = document.getElementById("classSelector");
    const options = classSelector.querySelectorAll("span");
    let selectedClass = "turista";

    options.forEach(option => {
        option.addEventListener("click", () => {

            options.forEach(opt => opt.classList.remove("active"));
            
            option.classList.add("active");
            
            selectedClass = option.dataset.type;
            console.log("Selected class:", selectedClass);
        });
    });
});

let slideIndex = 1;

function showSlides(n) {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Current slide
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Initialize the slideshow
showSlides(slideIndex);
