document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const flightId = parseInt(urlParams.get("flightId"));
    const passengers = parseInt(urlParams.get("passengers"));

    if (isNaN(flightId) || isNaN(passengers)) {
        alert("Hiba: Nem található érvényes járat ID vagy utas szám.");
        return;
    }

    const flights = [
        { 
            id: 1, 
            origin: "Helyszín 1", 
            destination: "Helyszín 2", 
            departure: "2024-12-10", 
            return: "2024-12-15", 
            price: 10000, 
            class: "Turista" 
        },
        { 
            id: 2, 
            origin: "Helyszín 3", 
            destination: "Helyszín 1", 
            departure: "2024-12-12", 
            return: "2024-12-18", 
            price: 12000, 
            class: "Első" 
        }
    ];

    const selectedFlight = flights.find(flight => flight.id === flightId);

    if (!selectedFlight) {
        alert("Hiba: Nem található a kiválasztott járat.");
        return;
    }

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
    confirmBookingButton.addEventListener("click", () => {
        const formData = new FormData(document.getElementById("passengerForm"));
        const passengerData = [];

        for (let i = 1; i <= passengers; i++) {
            passengerData.push({
                firstName: formData.get(`firstName${i}`),
                lastName: formData.get(`lastName${i}`),
                dob: formData.get(`dob${i}`)
            });
        }

        console.log("Foglalás adatai:", passengerData);

        alert("Foglalás sikeres!");
        window.location.href = "index.php";
    });
});
