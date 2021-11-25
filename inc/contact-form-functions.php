<?php

//might get rid of this
$nameErr = $emailErr = $err = "";

//Check if the post is actually sent and the button is clicked 
if (isset($_POST)) {

    //grab the data from the form and clean it
    $firstName = cleanseData($_POST['firstName']);
    $lastName = cleanseData($_POST['lastName']);
    $emailAddress = cleanseData($_POST['emailAddress']);
    $subject = cleanseData($_POST['subject']);
    $message = cleanseData($_POST['message']);


    //check if the values are empty or not
    if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['emailAddress']) || empty($_POST['subject']) || empty($_POST['message'])) {
        //if any of these are empty, echo in/or do smth that will trigger a error message
        header("location: ../index.php?contactform=empty");
        $err = "Please ensure all fields are filled in";
        exit();
    }

    //check the name
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName) || !preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        header("location: ../index.php?name=illegalCharacters");
        $nameErr = "Only letters and white space allowed";
        exit();
    }

    //check the email
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        header("location: ../index.php?email=incorrectFormat");
        $emailErr = "Invalid email format";
        exit();
    }


    //grab connection
    include_once("../inc/Database-Connection.php");

    $sql = "INSERT INTO `contact-form-data-portfolio`(`first_name`, `last_name`, `email_address`, `subject`, `message`) VALUES(?, ?, ?, ?, ?)";

    $stmt = $db->prepare($sql);

    $stmt->execute([
        $firstName,
        $lastName,
        $emailAddress,
        $subject,
        $message
    ]);

    //ayy you successfully made it to the end of the file, and the data is in a db
    //now return to the contact page, refreshed
    header("location: ../index.php?contact-form-submission=success");


} else {
    echo "Contact form error!";
}




//A function to run data through in order to clean it from bad things
function cleanseData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
