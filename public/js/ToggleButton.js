function TogglerButton() {
    const secondRow = document.querySelector('.nav-2 .second-row');
    if (secondRow.style.display === "none" || secondRow.style.display === "") {
        secondRow.style.display = "block";
    } else {
        secondRow.style.display = "none";
    }
}