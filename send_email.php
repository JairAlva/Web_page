<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configure your email settings
    $to = "alalvam@clio.uc3m.es";  // Replace with your email address
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Send a response back to the client
    echo "Message sent successfully!";
} else {
    // Return an error response if accessed directly without a POST request
    http_response_code(400);
    echo "Bad Request";
}
?>
