<!-- Dummy PayPal Button Integration (client-side only, no payment processed) -->
<form action="paypal_success.php" method="post" style="display:inline;">
    <button type="submit" id="paypal-demo-btn" class="btn btn-warning" style="background:#ffc439; color:#111; font-weight:bold; border:none; margin-top:12px;">
        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal" style="height:24px; margin-right:8px; vertical-align:middle;">
        Pay with PayPal
    </button>
</form>
<!-- This is a demo button. No real transaction will occur. -->
<script>
// Optionally, show a notice or modal on click for demo purposes
// document.getElementById('paypal-demo-btn').addEventListener('click', function(e) {
//     alert('This is a demo PayPal button. No real payment will be processed.');
// });
</script>
