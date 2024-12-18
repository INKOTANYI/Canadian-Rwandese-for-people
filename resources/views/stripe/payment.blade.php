<!-- resources/views/stripe/payment.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <h1>Stripe Payment</h1>

    @if(session('success_message'))
        <p style="color: green">{{ session('success_message') }}</p>
    @endif
    @if(session('error_message'))
        <p style="color: red">{{ session('error_message') }}</p>
    @endif

    <form action="{{ route('stripe.charge') }}" method="POST" id="payment-form">
        @csrf

        <!-- Your payment details form -->
        <div>
            <label for="card-element">Credit or Debit Card</label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button type="submit">Pay $50</button>
    </form>

    <script>
        var stripe = Stripe('{{ config('services.stripe.key') }}'); // Your publishable key
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        // Handle form submission
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createPaymentMethod({
                type: 'card',
                card: card,
            }).then(function(result) {
                if (result.error) {
                    // Show error in payment form
                    document.getElementById('card-errors').textContent = result.error.message;
                } else {
                    // Send the payment method to your server
                    var paymentMethod = result.paymentMethod.id;
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentMethod);
                    form.appendChild(hiddenInput);

                    // Submit the form to the server
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
