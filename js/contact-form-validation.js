
function validateInput() {
    //run through and grab all the data in the form
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const emailAddress = document.getElementById("emailAddress");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");

    const submitButton = document.getElementById("submitButton");

    //array so that I can loop through the input elements instead of doing them all individually as, loads are just text fields tbh
    const inputElements = [];
    inputElements.push(firstName, lastName, emailAddress, subject, message);

    const checkedInputElements = [];

    const form = document.getElementById("contactId");


    //Current client side validation does email and empty fields, ill more as I have time and find approprirate regex
    for (let index = 0; index < inputElements.length; index++) {
        let curElement = inputElements[index];
        if(curElement.value.length > 0 && curElement.name =="emailAddress") {
            if(validateEmail(curElement.value)) {
                curElement.style.borderColor = "green";
                checkedInputElements.push(curElement);
                console.log("sup fam");
            }
            else {
                curElement.style.borderColor = "red";
                checkedInputElements.splice(inputElements.indexOf(curElement), 1);
            }
        }
        else {
            curElement.style.borderColor = "red";
            checkedInputElements.splice(inputElements.indexOf(curElement), 1);
        }


        if(curElement.value.length > 0 && curElement.name != emailAddress) {
            curElement.style.borderColor = "green";
            checkedInputElements.push(curElement);
        }
        else {
            curElement.style.borderColor = "red";
            checkedInputElements.splice(inputElements.indexOf(curElement), 1);
        }
    }


    //now when they are all good, allow the button to be pressed
    if(checkedInputElements.length < 5) {
        submitButton.disabled = true;
    }
    else {
        submitButton.disabled = false;
        //show a error message or smth
    }

    console.log(checkedInputElements);
}


//regex function that returns a bool as to whether to the email placed in the params is valid
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//function to remove an error'ed element from the php validation
function removeOnClick(element) {
    element.parentNode.removeChild(element);
    el.remove();
}