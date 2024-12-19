<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Webhook;
use Stripe\Checkout\Session;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Exception\UnexpectedValueException;
use Illuminate\Support\Facades\Log;



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

        try {
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

        } catch (\Exception $e) {
            Log::error('Error creating Checkout session: ' . $e->getMessage());
            return redirect()->route('payment.cancel');
        }
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

    // Handle Stripe webhook events
    public function webhook(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $payload = $request->getContent();  // Get the raw body of the request
        $sigHeader = $request->header('Stripe-Signature');  // Get the Stripe-Signature header
        $endpointSecret = env('STRIPE_WEBHOOK_SECRET');  // Get the webhook secret from .env

        try {
            // Verify the webhook signature and construct the event
            $event = Webhook::constructEvent($payload, $sigHeader, $endpointSecret);

            // Log the event for debugging purposes
            Log::info('Received Stripe Webhook Event: ' . $event->type);

            // Handle the event based on its type
            switch ($event->type) {
                case 'payment_intent.succeeded':
                    $paymentIntent = $event->data->object;  // Contains the PaymentIntent object
                    // Handle the successful payment here (e.g., update database)
                    Log::info('PaymentIntent succeeded: ' . $paymentIntent->id);
                    break;

                case 'payment_intent.payment_failed':
                    $paymentIntent = $event->data->object;  // Contains the PaymentIntent object
                    // Handle the failed payment here (e.g., notify user)
                    Log::info('PaymentIntent failed: ' . $paymentIntent->id);
                    break;

                // Add other events to handle (e.g., 'invoice.payment_succeeded', 'checkout.session.completed')
                default:
                    Log::info('Unhandled event type: ' . $event->type);
            }

            // Return a success response to Stripe
            return response()->json(['status' => 'success']);

        } catch (UnexpectedValueException $e) {
            // Invalid payload
            Log::error('Webhook error: Invalid payload - ' . $e->getMessage());
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (SignatureVerificationException $e) {
            // Invalid signature
            Log::error('Webhook error: Invalid signature - ' . $e->getMessage());
            return response()->json(['error' => 'Invalid signature'], 400);
        }
    }
}
