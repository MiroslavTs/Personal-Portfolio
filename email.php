<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email_address = $_POST["email_address"];
    $mobile_number = $_POST["mobile_number"];
    $email_subject = $_POST["email_subject"];
    $message = $_POST["message"];

    // Construct the email message
    $to = "m.tsintsarski@abv.bg";  // Replace with your email address
    $subject = "New Form Submission: $email_subject";
    $headers = "From: $email_address";
    $message_body = "Full Name: $full_name\n";
    $message_body .= "Email Address: $email_address\n";
    $message_body .= "Mobile Number: $mobile_number\n\n";
    $message_body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $message_body, $headers);

    
}
?>
