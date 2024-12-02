document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const flightId = parseInt(urlParams.get("flightId"));
    const passengers = parseInt(urlParams.get("passengers"));

    const flights = [
        { 
            id: 1, 
            origin: "Róma", 
            destination: "Berlin", 
            departure: "2024-12-10", 
            return: "2024-12-15", 
            availableSeats: 20, 
            price: "15000", 
            class: "Turista" 
        },
        { 
            id: 2, 
            origin: "Berlin", 
            destination: "Madrid", 
            departure: "2024-12-12", 
            return: "2024-12-18", 
            availableSeats: 5, 
            price: "12000", 
            class: "Első" 
        },
        { 
            id: 3, 
            origin: "Madrid", 
            destination: "Barcelona", 
            departure: "2024-12-18", 
            return: "2024-12-20", 
            availableSeats: 18, 
            price: "8000", 
            class: "Turista" 
        },
        { 
            id: 4, 
            origin: "Barcelona", 
            destination: "Amszterdam", 
            departure: "2024-12-09", 
            return: "2024-12-14", 
            availableSeats: 10, 
            price: "14000", 
            class: "Turista" 
        },
        { 
            id: 5, 
            origin: "Amszterdam", 
            destination: "Bécs", 
            departure: "2024-12-15", 
            return: "2024-12-22", 
            availableSeats: 25, 
            price: "16000", 
            class: "Turista" 
        },
        { 
            id: 6, 
            origin: "Bécs", 
            destination: "Zürich", 
            departure: "2024-12-13", 
            return: "2024-12-20", 
            availableSeats: 8, 
            price: "20000", 
            class: "Első" 
        },
        { 
            id: 7, 
            origin: "Zürich", 
            destination: "Koppenhága", 
            departure: "2024-12-17", 
            return: "2024-12-21", 
            availableSeats: 12, 
            price: "18000", 
            class: "Turista" 
        },
        { 
            id: 8, 
            origin: "Koppenhága", 
            destination: "Brüsszel", 
            departure: "2024-12-20", 
            return: "2024-12-25", 
            availableSeats: 15, 
            price: "15000", 
            class: "Turista" 
        },
        { 
            id: 9, 
            origin: "Brüsszel", 
            destination: "Lisszabon", 
            departure: "2024-12-08", 
            return: "2024-12-15", 
            availableSeats: 30, 
            price: "11000", 
            class: "Turista" 
        },
        { 
            id: 10, 
            origin: "Lisszabon", 
            destination: "Dublin", 
            departure: "2024-12-10", 
            return: "2024-12-18", 
            availableSeats: 18, 
            price: "13000", 
            class: "Turista" 
        },
        { 
            id: 11, 
            origin: "Dublin", 
            destination: "Prága", 
            departure: "2024-12-16", 
            return: "2024-12-20", 
            availableSeats: 7, 
            price: "19000", 
            class: "Első" 
        },
        { 
            id: 12, 
            origin: "Prága", 
            destination: "Budapest", 
            departure: "2024-12-12", 
            return: "2024-12-18", 
            availableSeats: 10, 
            price: "14000", 
            class: "Turista" 
        },
        { 
            id: 13, 
            origin: "Budapest", 
            destination: "Stockholm", 
            departure: "2024-12-14", 
            return: "2024-12-22", 
            availableSeats: 20, 
            price: "17000", 
            class: "Turista" 
        },
        { 
            id: 14, 
            origin: "Stockholm", 
            destination: "Helsinki", 
            departure: "2024-12-11", 
            return: "2024-12-16", 
            availableSeats: 25, 
            price: "10000", 
            class: "Turista" 
        },
        { 
            id: 15, 
            origin: "Helsinki", 
            destination: "Oslo", 
            departure: "2024-12-18", 
            return: "2024-12-23", 
            availableSeats: 14, 
            price: "15000", 
            class: "Turista" 
        },
        { 
            id: 16, 
            origin: "Oslo", 
            destination: "Varsó", 
            departure: "2024-12-20", 
            return: "2024-12-27", 
            availableSeats: 12, 
            price: "16000", 
            class: "Turista" 
        },
        { 
            id: 17, 
            origin: "Varsó", 
            destination: "Athén", 
            departure: "2024-12-09", 
            return: "2024-12-15", 
            availableSeats: 20, 
            price: "17000", 
            class: "Első" 
        },
        { 
            id: 18, 
            origin: "Athén", 
            destination: "Róma", 
            departure: "2024-12-10", 
            return: "2024-12-14", 
            availableSeats: 10, 
            price: "18000", 
            class: "Turista" 
        }
    ];

    const selectedFlight = flights.find(flight => flight.id === flightId);

    const flightDetailsDiv = document.getElementById("flightDetails");
    flightDetailsDiv.innerHTML = `
        <h2>Járat adatai</h2>
        <p><strong>Innen:</strong> ${selectedFlight.origin}</p>
        <p><strong>Ide:</strong> ${selectedFlight.destination}</p>
        <p><strong>Indulás:</strong> ${selectedFlight.departure}</p>
        <p><strong>Visszaút:</strong> ${selectedFlight.return}</p>
        <p><strong>Osztály:</strong> ${selectedFlight.class}</p>
        <p><strong>Ár utasonként:</strong> ${selectedFlight.price} HUF</p>
    `;

    const passengerInputsDiv = document.getElementById("passengerInputs");
    for (let i = 1; i <= passengers; i++) {
        const passengerDiv = document.createElement("div");
        passengerDiv.classList.add("passenger");
        passengerDiv.innerHTML = `
            <h3>Utas ${i}</h3>
            <label for="firstName${i}">Keresztnév:</label>
            <input type="text" id="firstName${i}" name="firstName${i}" required>
            <label for="lastName${i}">Vezetéknév:</label>
            <input type="text" id="lastName${i}" name="lastName${i}" required>
            <label for="dob${i}">Születési dátum:</label>
            <input type="date" id="dob${i}" name="dob${i}" required>
        `;
        passengerInputsDiv.appendChild(passengerDiv);
    }

    const totalCostDiv = document.getElementById("totalCost");
    const totalCost = selectedFlight.price * passengers;
    totalCostDiv.innerHTML = `<h3>Teljes költség: ${totalCost} HUF</h3>`;

    const confirmBookingButton = document.getElementById("confirmBooking");
    confirmBookingButton.addEventListener("click", (event) => {
        event.preventDefault();

        const formData = new FormData(document.getElementById("passengerForm"));
        const passengerData = [];
        let isValid = true;

        for (let i = 1; i <= passengers; i++) {
            const firstName = formData.get(`firstName${i}`);
            const lastName = formData.get(`lastName${i}`);
            const dob = formData.get(`dob${i}`);

            if (!firstName || !lastName || !dob) {
                alert(`Utas ${i} adatainál hiányzik egy vagy több mező!`);
                isValid = false;
                break;
            }

            const birthDate = new Date(dob);
            const today = new Date();
            if (birthDate > today) {
                alert(`Utas ${i} születési dátuma nem lehet a jövőben!`);
                isValid = false;
                break;
            }

            passengerData.push({ firstName, lastName, dob });
        }

        if (isValid) {
            console.log("Foglalás adatai:", passengerData);
            alert("Foglalás sikeres! Megtekintheted a járat adatait a profilodon.");
            window.location.href = "profile.php";
        }
    });
});
