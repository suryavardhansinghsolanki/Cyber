<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $burgerQuantity = $_POST["burger_quantity"];
    $pizzaQuantity = $_POST["pizza_quantity"];
    $customerName = $_POST["customer_name"];
    $phoneNumber = $_POST["phone_number"];

    // Perform validation and processing (e.g., send email, save to database)
    
    // Example: Sending email confirmation
    $to = "your_email@example.com";
    $subject = "New Order from Party Time Website";
    $message = "New order details:\n\n";
    $message .= "Burger Quantity: $burgerQuantity\n";
    $message .= "Pizza Quantity: $pizzaQuantity\n";
    $message .= "Customer Name: $customerName\n";
    $message .= "Phone Number: $phoneNumber\n";
    $headers = "From: webmaster@example.com";

    // Uncomment the line below to send email (make sure your server is configured to send emails)
    // mail($to, $subject, $message, $headers);

    // Redirect back to the thank you page or homepage after submission
    header("Location: thankyou.html");
    exit();
}
?>
