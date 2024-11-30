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