function validateInput() {
    //run through and grab all the data in the form
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const emailAddress = document.getElementById("emailAddress");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");

    //get a link to the submit button to prevent unwanted input (Technically this only affects css but thats fine for now)
    const submitButton = document.getElementById("submitButton");

    //array so that I can loop through the input elements instead of doing them all individually as, loads are just text fields tbh
    const inputElements = [];
    inputElements.push(firstName, lastName, emailAddress, subject, message);



    //Current client side validation does email and empty fields, ill more as I have time and find approprirate regex
    for (let index = 0; index < inputElements.length; index++) {
        //establish iterator element varible
        let curElement = inputElements[index];

        if(curElement.value.length != 0) {
            //is not empty
            curElement.style.borderColor = "green";

            if((curElement.name == "emailAddress") && (validateEmail(curElement.value))) {
                curElement.style.borderColor = "green";
            } else if(curElement.name == "emailAddress")  {
                curElement.style.borderColor = "red";
            }
        }
        else {
            //is empty field
            curElement.style.borderColor = "red";
        }
    }

    let count = 0;
    inputElements.forEach(element => {
        if(element.style.borderColor == "green") {
            count++;
        }

        if(count >= 5) {
            submitButton.disabled = false;
        }
        else {
            submitButton.disabled = true;
        }
        console.log(count);
    });


}


//regex function that returns a bool as to whether to the email placed in the params is valid
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//function to remove an error'ed element from the php validation
function removeOnClick(element) {
    element.parentNode.removeChild(element);
}