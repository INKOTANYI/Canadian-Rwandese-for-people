<!DOCTYPE html>
<html>

<head>
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <h1>Make a Payment</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('payment.process') }}" method="POST" id="payment-form">
        @csrf
        <label for="card-element">Credit or debit card</label>
        <div id="card-element"></div>
        <button type="submit">Pay</button>
        <input type="hidden" name="amount" value="10"> <!-- Replace 10 with dynamic amount -->
    </form>

    <script>
        const stripe = Stripe("{{ config('services.stripe.key') }}");
        const elements = stripe.elements();
        const card = elements.create('card');
        card.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const {
                token,
                error
            } = await stripe.createToken(card);
            if (error) {
                console.error(error);
            } else {
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
    </script>
</body>

</html>
