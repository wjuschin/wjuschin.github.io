<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $from = 'From: Contact Form'; // Edit to suit your needs 
    $to = 'waldemar@juschin.com'; // Edit to suit the email on which you wish to recieve the form details
    $subject = 'Contact form submission'; 

    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }

?>