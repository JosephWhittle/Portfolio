function validateInput() {
    //run through and grab all the data in the form
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const emailAddress = document.getElementById("emailAddress");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");

    //grab all the error boxes at the end of the inputs
    const checkboxFName = document.getElementById("firstName-id");
    const checkboxLName = document.getElementById("lastName-id");
    const checkboxEmailAddress = document.getElementById("emailAddress-id");
    const checkboxSubject = document.getElementById("subject-id");
    const checkboxMessage = document.getElementById("message-id");

    //get a link to the submit button to prevent unwanted input (Technically this only affects css but thats fine for now)
    const submitButton = document.getElementById("submitButton");

    //first name validation
    if (validateInputLength(1, 100, firstName.value)) {
        firstName.style.borderColor = "green";
        checkboxFName.classList.add("fa-check-circle");
    } else {
        firstName.style.borderColor = "rgba(0, 0, 0, 0.158)";
        checkboxFName.classList.remove("fa-check-circle");
    }

    //last name validation
    if (validateInputLength(1, 100, lastName.value)) {
        lastName.style.borderColor = "green";
        checkboxLName.classList.add("fa-check-circle");
    } else {
        lastName.style.borderColor = "rgba(0, 0, 0, 0.158)";
        checkboxLName.classList.remove("fa-check-circle");
    }

    //email validation
    if (validateEmail(emailAddress.value)) {
        emailAddress.style.borderColor = "green";
        checkboxEmailAddress.classList.add("fa-check-circle");
    } else {
        emailAddress.style.borderColor = "rgba(0, 0, 0, 0.158)";
        checkboxEmailAddress.classList.remove("fa-check-circle");
    }

    //subject validation
    if (validateInputLength(3, 250, subject.value)) {
        subject.style.borderColor = "green";
        checkboxSubject.classList.add("fa-check-circle");
    } else {
        subject.style.borderColor = "rgba(0, 0, 0, 0.158)";
        checkboxSubject.classList.remove("fa-check-circle");
    }

    //Message validation
    if (validateInputLength(1, 5000, message.value)) {
        message.style.borderColor = "green";
        checkboxMessage.classList.add("fa-check-circle");
    } else {
        message.style.borderColor = "rgba(0, 0, 0, 0.158)";
        checkboxMessage.classList.remove("fa-check-circle");
    }


    //submit button
    let submitCheck = [];
    submitCheck.push(checkboxFName, checkboxLName, checkboxEmailAddress, checkboxSubject, checkboxMessage);

    let count = 0
    submitCheck.forEach(element => {
        if(element.classList.contains("fa-check-circle")) {
            count++;
        }
        if(count >= 5){
            submitButton.disabled = false;
        }
        else {
            submitButton.disabled = true;
        }
    });


}


//regex function that returns a bool as to whether to the email placed in the params is valid
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


//To run a charactor check, by setting a min and max and returns true if it falls between the two
function validateInputLength(min, max, input) {
    var length = input.length;
    if (length >= min && length <= max) {
        return true;
    } else {
        return false;
    }
}

//function to remove an error'ed element from the php validation
function removeOnClick(element) {
    element.parentNode.removeChild(element);
}