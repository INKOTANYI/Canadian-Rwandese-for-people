<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stripe Donation</title>

    <script src="https://js.stripe.com/v3/"></script>

</head>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("YOUR_PUBLISHABLE_KEY"); // Replace with your Stripe Publishable Key

    fetch("/create-checkout-session", {
            method: "POST",
        })
        .then((res) => res.json())
        .then((data) => stripe.redirectToCheckout({
            sessionId: data.id
        }))
        .catch((err) => console.error(err));
</script>


<body>


    <button id="checkout-button">Donate</button>

    <script>
        const express = require("express");
        const app = express();
        const stripe = require("stripe")(process.env.STRIPE_SECRET_KEY); // Use environment variables for safety
        require("dotenv").config(); // Load environment variables from a .env file

        app.use(express.json()); // Middleware for parsing JSON requests

        // Endpoint to create a checkout session
        app.post("/create-checkout-session", async (req, res) => {
            try {
                const session = await stripe.checkout.sessions.create({
                    payment_method_types: ["card"],
                    line_items: [{
                        price_data: {
                            currency: "usd",
                            product_data: {
                                name: "Donation", // Customize as needed
                            },
                            unit_amount: 5000, // Amount in cents (e.g., $50.00)
                        },
                        quantity: 1,
                    }, ],
                    mode: "payment",
                    success_url: "https://your-website.com/success",
                    cancel_url: "https://your-website.com/cancel",
                });

                res.json({
                    id: session.id
                }); // Send session ID to the client
            } catch (error) {
                console.error("Error creating checkout session:", error.message);
                res.status(500).send({
                    error: error.message
                }); // Send detailed error response
            }
        });

        // Start the server on port 3000
        const PORT = process.env.PORT || 3000; // Allow dynamic port assignment
        app.listen(PORT, () => console.log(`Server running on port ${PORT}`));








        });
    </script>




</html>
const app = express();
const stripe = require("stripe")("YOUR_SECRET_KEY"); // Replace with your test Secret Key

app.use(express.json());

app.post("/create-checkout-session", async (req, res) => {
try {
const session = await stripe.checkout.sessions.create({
payment_method_types: ["card"],
line_items: [
{
price_data: {
currency: "usd",
product_data: {
name: "Donation",
},
unit_amount: 5000, // 50 USD donation
},
quantity: 1,
},
],
mode: "payment",
success_url: "https://your-website.com/success",
cancel_url: "https://your-website.com/cancel",
});

res.json({ id: session.id });
} catch (error) {
res.status(500).send({ error: error.message });
}
});

app.listen(3000, () => console.log("Server running on port 3000"));
