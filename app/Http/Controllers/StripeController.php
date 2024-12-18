<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;


class StripeController extends Controller

{
    public function index()
    {
        return view('stripe.index');  // Ensure you have an index.blade.php in resources/views/stripe
    }

    // Create a Stripe Checkout session
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));  // Your Stripe Secret Key

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Donation',
                        ],
                        'unit_amount' => 1000,  // Amount in cents (1000 = $10)
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);  // Redirect to Stripe Checkout page
    }

    // Success page after payment
    public function success()
    {
        return view('stripe.success');
    }

    // Cancel page if payment is canceled
    public function cancel()
    {
        return view('stripe.cancel');
    }
}

