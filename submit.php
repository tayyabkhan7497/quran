<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form fields
    $name  = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);

    // Your email where you want to receive submissions
    $to = "viiarcane0@gmail.com"; // ← replace with your real email
    $subject = "New Quran Tutoring Inquiry";

    // Email content
    $message = "📩 New Inquiry From QuranTutors Website:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";

    // Email headers
    $headers = "From: noreply@yourdomain.com"; // you can use a domain email

    // Send email
    if (mail($to, $subject, $message, $headers)) {c
        echo "<h2>Thank you, $name! We'll contact you soon, InshaAllah.</h2>";
    } else {
        echo "<h3>Sorry, something went wrong. Please try again later.</h3>";
    }
} else {
    echo "Invalid request.";
}
?>
