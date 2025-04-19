<!-- PayPal Express Checkout Button (Client-Side Demo, No Real Payment Processed) -->
<!-- Replace 'sb' with your own sandbox client-id for real integration -->
<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>
<script>
paypal.Buttons({
    createOrder: function(data, actions) {
        // Set up the transaction
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '10.00' // You can dynamically set this value from PHP using echo for real integration
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        // Simulate a successful payment
        window.location.href = 'paypal_success.php';
    }
}).render('#paypal-button-container');
</script>
<!-- This is a demo button. No real transaction will occur. For real payments, use your PayPal sandbox client-id and set the amount dynamically. -->
