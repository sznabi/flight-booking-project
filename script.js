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

let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    setTimeout(showSlides, 4000);
}

showSlides();

function plusSlides(n) {
    slideIndex += n - 1;
    showSlides();
}

function currentSlide(n) {
    slideIndex = n - 1;
    showSlides();
}

document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const origin = document.querySelector('select[name="origin"]').value;
    const destination = document.querySelector('select[name="destination"]').value;
    const passengers = document.querySelector('select[name="passengers"]').value;
    const departureDate = document.querySelector('input[name="departureDate"]').value;
    const returnDate = document.querySelector('input[name="returnDate"]').value;
    const flightClass = document.querySelector('span.active').getAttribute('data-type');

    if (!origin || !destination || !passengers || !departureDate || !returnDate) {
        alert("Tölts ki minden mezőt!");
        return;
    }

    document.getElementById("ticketOrigin").textContent = origin;
    document.getElementById("ticketDestination").textContent = destination;
    document.getElementById("ticketDate").textContent = departureDate;
    document.getElementById("ticketReturnDate").textContent = returnDate;
    document.getElementById("ticketPassengers").textContent = passengers;
    document.getElementById("ticketClass").textContent = flightClass === 'turista' ? 'Turista osztály' : 'Első osztály';

    document.getElementById("ticketDetails").style.display = "block";
});