<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $contact_number = $_POST["contact_number"];
    $message = $_POST["message"];

    // You would typically validate and sanitize the data here
    
    // Process the data (e.g., save to a database)

    // Redirect the user to a thank you page or back to the contact form
    header("Location: thank_you.html");
    exit();
}
?>
