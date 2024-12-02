document.addEventListener("DOMContentLoaded", () => {
    const classSelector = document.getElementById("classSelector");
    const options = classSelector.querySelectorAll("span");
    let selectedClass = "Bármely";

    options.forEach(option => {
        option.addEventListener("click", () => {
            options.forEach(opt => opt.classList.remove("active"));
            option.classList.add("active");
            selectedClass = option.dataset.type;
            console.log("Kiválasztott osztály:", selectedClass);
        });
    });

    // JARATOK
    const flights = [
        { 
            id: 1, 
            origin: "Helyszín 1", 
            destination: "Helyszín 2", 
            departure: "2024-12-10", 
            return: "2024-12-15", 
            availableSeats: 15, 
            price: "10000", 
            class: "Turista" 
        },
        { 
            id: 2, 
            origin: "Helyszín 3", 
            destination: "Helyszín 1", 
            departure: "2024-12-12", 
            return: "2024-12-18", 
            availableSeats: 3, 
            price: "12000", 
            class: "Első" 
        },
        { 
            id: 3, 
            origin: "Helyszín 2", 
            destination: "Helyszín 1", 
            departure: "2024-12-18", 
            return: "2024-12-30", 
            availableSeats: 12, 
            price: "25000", 
            class: "Turista" 
        },
        { 
            id: 4, 
            origin: "Helyszín 1", 
            destination: "Helyszín 3", 
            departure: "2024-12-08", 
            return: "2024-12-11", 
            availableSeats: 21, 
            price: "18000", 
            class: "Turista" 
        }
    ];

    // JARAT SORTING GOMBOK
    const sortAscButton = document.getElementById('sortAsc');
    const sortDescButton = document.getElementById('sortDesc');

    sortAscButton.addEventListener('click', () => {
        const sortedFlights = [...flights].sort((a, b) => new Date(a.departure) - new Date(b.departure));
        loadFlights(sortedFlights);
    });

    sortDescButton.addEventListener('click', () => {
        const sortedFlights = [...flights].sort((a, b) => new Date(b.departure) - new Date(a.departure));
        loadFlights(sortedFlights);
    });

    // JARAT BETOLTES
    function loadFlights(flightData) {
        const flightList = document.getElementById('flightList');
        flightList.innerHTML = '';

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
                        <p><strong>Ár:</strong> ${flight.price} HUF</p>
                    </div>
                </div>
                <button class="btn" onclick="bookFlight(${flight.id}, ${flight.availableSeats})">Foglalás</button>
            `;
            flightList.appendChild(flightBlock);
        });

        document.getElementById('availableFlights').style.display = 'block';
    }

    // FILTEREZES
    function filterFlights(event) {
        event.preventDefault();

        const origin = document.getElementById("originSelect").value;
        const destination = document.getElementById("destinationSelect").value;
        const passengers = parseInt(document.getElementById("passengersSelect").value);
        const departureDate = document.getElementById("departureDate").value;

        const filteredFlights = flights.filter(flight => {
            const isOriginValid = origin === "any" || flight.origin === origin;
            const isDestinationValid = destination === "any" || flight.destination === destination;
            const isSeatsValid = isNaN(passengers) || flight.availableSeats >= passengers;
            const isDateValid = departureDate === "" || new Date(flight.departure) >= new Date(departureDate);
            const isClassValid = 
                selectedClass === "Bármely" || 
                flight.class.toLowerCase() === selectedClass.toLowerCase();

            return isOriginValid && isDestinationValid && isSeatsValid && isDateValid && isClassValid;
        });

        loadFlights(filteredFlights);
    }

    document.getElementById('searchForm').addEventListener('submit', filterFlights);
});

// KERESES GOMB
function bookFlight(flightId, availableSeats) {
    const passengers = parseInt(document.getElementById("passengersSelect").value);
    const selectedClass = document.querySelector("#classSelector .active")?.dataset.type || "Bármely";

    if (isNaN(passengers) || passengers <= 0) {
        alert("Hiba: Kérlek, add meg hányan szeretnétek utazni!");
        return;
    }

    if (passengers > availableSeats) {
        alert(`Nincs elég hely. Csak ${availableSeats} elérhető.`);
        return;
    }

    const bookingUrl = `booking.php?flightId=${flightId}&passengers=${passengers}`;
    window.location.href = bookingUrl;
}


// GALERIA SCRIPT
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