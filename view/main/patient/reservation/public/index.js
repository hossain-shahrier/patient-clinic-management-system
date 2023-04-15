function validation() {
    const doctorSelect = document.getElementById("doctor");
    const dateInput = document.getElementById("date");
    const timeInput = document.getElementById("time");
    let hasErrors = false;

    // Clear any previous error messages
    document.getElementById("error-doctors").textContent = "";
    document.getElementById("error-date").textContent = "";
    document.getElementById("error-time").textContent = "";

    // Validate doctor selection
    if (doctorSelect.value === "") {
        document.getElementById("error-doctors").textContent = "Please select a doctor";
        hasErrors = true;
    }

    // Validate date
    if (dateInput.value === "") {
        document.getElementById("error-date").textContent = "Please select a date";
        hasErrors = true;
    }

    // Validate time
    if (timeInput.value === "") {
        document.getElementById("error-time").textContent = "Please select a time";
        hasErrors = true;
    }

    return !hasErrors;
}
