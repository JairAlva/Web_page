<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configure your email settings
    $to = "your_email@alalvamclio.uc3m.es";  // Replace with your email address
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
