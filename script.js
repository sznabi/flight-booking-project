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

// FOGLALÁS SCRIPT
document.addEventListener("DOMContentLoaded", () => {
    const classSelector = document.getElementById("classSelector");
    const options = classSelector.querySelectorAll("span");
    let selectedClass = "turista";

    options.forEach(option => {
        option.addEventListener("click", () => {
            options.forEach(opt => opt.classList.remove("active"));
            option.classList.add("active");
            selectedClass = option.dataset.type;
        });
    });

    const flights = [
        { 
            id: 1, 
            origin: "Helyszín 1", 
            destination: "Helyszín 2", 
            departure: "2024-12-10", 
            return: "2024-12-15", 
            availableSeats: 5,  // Number of available seats
            price: "10000 HUF", 
            class: "Turista"
        },
        { 
            id: 2, 
            origin: "Helyszín 3", 
            destination: "Helyszín 1", 
            departure: "2024-12-12", 
            return: "2024-12-18", 
            availableSeats: 3,  // Number of available seats
            price: "12000 HUF", 
            class: "Első"
        },
        // Add more flights as needed
    ];

    function loadFlights(flightData) {
        const flightList = document.getElementById('flightList');
        flightList.innerHTML = '';  // Clear any previous flights

        flightData.forEach(flight => {
            const flightBlock = document.createElement('div');
            flightBlock.classList.add('flight-block');

            flightBlock.innerHTML = `
                <div class="flight-info">
                    <div class="flight-item">
                        <span><i class="ri-map-pin-line"></i></span>
                        <p><strong>Innen:</strong> ${flight.origin}</p>
                    </div>
                    <div class="flight-item">
                        <span><i class="ri-map-pin-line"></i></span>
                        <p><strong>Ide:</strong> ${flight.destination}</p>
                    </div>
                    <div class="flight-item">
                        <span><i class="ri-calendar-line"></i></span>
                        <p><strong>Indulás:</strong> ${flight.departure}</p>
                    </div>
                    <div class="flight-item">
                        <span><i class="ri-calendar-line"></i></span>
                        <p><strong>Visszaút:</strong> ${flight.return}</p>
                    </div>
                    <div class="flight-item">
                        <span><i class="ri-flag-line"></i></span>
                        <p><strong>Osztály:</strong> ${flight.class}</p>
                    </div>
                    <div class="flight-item">
                        <span><i class="ri-user-3-line"></i></span>
                        <p><strong>Elérhető:</strong> ${flight.availableSeats}</p>
                    </div>
                    <div class="flight-item">
                        <span><i class="ri-price-tag-3-line"></i></span>
                        <p><strong>Ár:</strong> ${flight.price}</p>
                    </div>
                </div>
                <button class="btn" onclick="bookFlight(${flight.id}, ${flight.availableSeats})">Foglalás</button>
            `;

            flightList.appendChild(flightBlock);
        });

        document.getElementById('availableFlights').style.display = 'block';
    }

    function filterFlights(event) {
        event.preventDefault();

        const origin = document.getElementById("originSelect").value;
        const destination = document.getElementById("destinationSelect").value;
        const passengers = document.getElementById("passengersSelect").value;
        const departureDate = document.getElementById("departureDate").value;
        const returnDate = document.getElementById("returnDate").value;

        const filteredFlights = flights.filter(flight => {
            return (
                (origin === "any" || flight.origin === origin) &&
                (destination === "any" || flight.destination === destination) &&
                (passengers === "any" || flight.passengers <= flight.availableSeats) &&
                (departureDate === "" || flight.departure === departureDate) &&
                (returnDate === "" || flight.return === returnDate)
            );
        });

        loadFlights(filteredFlights);
    }

    document.getElementById('searchForm').addEventListener('submit', filterFlights);
});

// Booking function
function bookFlight(flightId, availableSeats) {
    const passengers = parseInt(document.getElementById("passengersSelect").value);

    if (passengers <= availableSeats) {
        alert(`Foglalás sikeres a következő járatra: ${flightId}`);
    } else {
        alert(`Nincs elég hely. Csak ${availableSeats} elérhető hely van.`);
    }
}
