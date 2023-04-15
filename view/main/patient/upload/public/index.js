function validation() {
    let problem = document.getElementById("problem").value.trim();
    let description = document.getElementById("description").value.trim();
    let file = document.getElementById("file").value.trim();

    let problemError = document.getElementById("error-problem");
    let descriptionError = document.getElementById("error-description");
    let fileError = document.getElementById("error-file");

    let isValid = true;

    // validate problem
    if (problem === "") {
        problemError.textContent = "Please enter a problem.";
        isValid = false;
    } else {
        problemError.textContent = "";
    }

    // validate description
    if (description === "") {
        descriptionError.textContent = "Please enter a description.";
        isValid = false;
    } else {
        descriptionError.textContent = "";
    }

    // validate file
    if (file === "") {
        fileError.textContent = "Please select a file.";
        isValid = false;
    } else {
        fileError.textContent = "";
    }

    return isValid;
}

function prescriptionValidation() {
    let file = document.getElementById("file").value.trim();
    let fileError = document.getElementById("error-pfile");
    let isValid = true;

    // validate file
    if (file === "") {
        fileError.textContent = "Please select a file.";
        isValid = false;
    } else {
        fileError.textContent = "";
    }

    return isValid;
}
