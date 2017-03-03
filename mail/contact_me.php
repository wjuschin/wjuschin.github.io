<?php
if(isset($_POST["submit"])) {
$recipient = "waldemar@juschin.com"; //my email
echo $subject = 'Email Message From WJ Contact Form';
echo $name = $_POST ["name"];
echo $email = $_POST["email"];
echo $subject = $_POST["subject"];
echo  $message = $_POST["message"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>