<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="recipt.css">

</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    // Start the receipt HTML
    echo "<div class='receipt-container'>";
    echo "<div class='receipt'>";
    echo "<h2>Payment Receipt</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Amount:</strong> ₹$amount</p>";
    echo "<p><strong>Payment Method:</strong> " . ucfirst($payment_method) . "</p>";

    // Process credit card payment
    if ($payment_method == "credit_card") {
        $card_number = $_POST['card_number'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];

        // Display masked card number for security
        $masked_card = str_repeat("*", strlen($card_number) - 4) . substr($card_number, -4);
        echo "<p><strong>Card Number:</strong> $masked_card</p>";
        echo "<p><strong>Expiry Date:</strong> $expiry_date</p>";
    }

    // Process UPI payment
    if ($payment_method == "upi") {
        $upi_id = $_POST['upi_id'];
        echo "<p><strong>UPI ID:</strong> $upi_id</p>";
    }

    // Process bank transfer
    if ($payment_method == "bank_transfer") {
        $bank_account = $_POST['bank_account'];
        $ifsc = $_POST['ifsc'];
        echo "<p><strong>Bank Account:</strong> $bank_account</p>";
        echo "<p><strong>IFSC Code:</strong> $ifsc</p>";
    }

    echo "<div class='success-message'>Thank you for your payment!</div>";
    echo "</div>";
    echo "</div>";
} else {
    echo "<div class='error'>Invalid Request</div>";
}
?>

</body>
</html>