<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
</head>
<body>
    <h1>Make a Payment</h1>

    <form action="{{ url('/stripe-charge') }}" method="POST">
        @csrf
        <script 
            src="https://checkout.stripe.com/checkout.js" 
            class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}" <!-- Ensure it's correct -->
            data-amount="1000" <!-- Replace with desired amount in cents -->
            data-name="NGO Donation"
            data-description="Support Our Cause"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-currency="usd"
            data-email="donor@example.com">
        </script>
    </form>
    
    
</body>
</html>
