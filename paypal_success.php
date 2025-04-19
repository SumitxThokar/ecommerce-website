<?php
// Dummy PayPal success page for demonstration
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful | Plant Shopify</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header_menu.php'; ?>
    <div class="container text-center mt-5">
        <div class="card p-5">
            <h1 class="text-success">Thank You!</h1>
            <h3>Your payment was successful.</h3>
            <p>Your order is being processed and will be shipped soon.</p>
            <a href="index.php" class="btn btn-success mt-3">Return to Home</a>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
