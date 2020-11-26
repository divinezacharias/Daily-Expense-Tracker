<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//Validate the name:
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    echo "You forgot to enter your name.<br>";
}

//Validate the school:
if (!empty($_POST['school'])) {
    $school = $_POST['school'];
} else {
    echo "You forgot to enter your school.<br>";
}

//Validate the e-mail:
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo "You forgot to enter your e-mail.<br>";
}

//Validate the message:
if (!empty($_POST['message'])) {
    $message = $_POST['message'];
} else {
    echo "You forgot to enter a message.";
}

if (!empty($_POST['name']) && !empty($_POST['school']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $phone = $_POST['phone'];
    $body = "$name\n$school\n$phone\n$email\n\n$message";
    mail("***", "PAL Website - Message from a Visitor", $body);
    header("Location: confirm.html");
}

}

?>