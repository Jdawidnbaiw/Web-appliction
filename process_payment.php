<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extract and sanitize input
    $paymentMethod = filter_input(INPUT_POST, 'paymentMethod');
    // Based on $paymentMethod, process the payment accordingly
    // This is a placeholder for your payment processing logic

    echo "<h2>Payment Successful</h2>";
    echo "<p>Thank you for your purchase! You selected " . htmlspecialchars($paymentMethod) . " as your payment method.</p>";
    // Redirect or inform the user of success/failure here
    // Remember, for real transactions, ensure secure processing and data handling
} else {
    // Redirect to the form if the request method is not POST
    echo "Please submit the form.";
}
?>