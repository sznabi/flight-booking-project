document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const flightId = parseInt(urlParams.get("flightId"));
    const passengers = parseInt(urlParams.get("passengers"));

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
